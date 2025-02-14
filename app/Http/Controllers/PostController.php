<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\PostAttachment;

class PostController extends Controller
{
    public function showUploadPage()
    {
        return view('upload');
    }

    public function showPostDetails($id)
    {
        $post = Post::findOrFail($id);
        $pdfAttachment = PostAttachment::where('post_id', $id)->where('file_type', 'pdf')->first();

        return view('postDetails', compact('post', 'pdfAttachment'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'short_desc' => 'required|string',
            'type' => 'required|in:note,question,post',
            'semester' => 'required|string|max:50',
            'files.*' => 'nullable|file|max:10240',
        ]);

        if ($request->type === 'note') {
            $request->validate(
                [
                    'files.*' => 'mimes:pdf|max:10240',
                ],
                [
                    'files.*.mimes' => 'For notes, only PDF files are allowed.',
                    'files.*.max' => 'Each file must not exceed 10MB in size.',
                ]
            );
        }

        $post = Post::create([
            'title' => $validated['title'],
            'short_desc' => $validated['short_desc'],
            'type' => $validated['type'],
            'semester' => $validated['semester'],
            'request_status' => 0,
        ]);

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $filePath = $file->store('uploads', 'public');

                $fileType = $file->getClientOriginalExtension() === 'pdf' ? 'pdf' : 'image';

                PostAttachment::create([
                    'post_id' => $post->id,
                    'file_path' => 'storage/' . $filePath,
                    'file_type' => $fileType,
                ]);
            }
        }

        return redirect('/')->with('success', 'your request has been submitted successfully');
    }
}
