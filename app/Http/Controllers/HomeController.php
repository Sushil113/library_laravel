<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $notes = Post::where('type', 'note')->with('attachments')->latest()->get();
        return view('welcome', compact('notes'));
    }
}
