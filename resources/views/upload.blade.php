@extends('include.master')
@section('content')

<div class="container mx-auto p-4">
    <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Subject Title</label>
            <input
                type="text"
                name="title"
                id="title"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                placeholder="Enter Title"
                required>
        </div>

        <div class="mb-4">
            <label for="short_desc" class="block text-gray-700 text-sm font-bold mb-2">Short Description</label>
            <textarea
                name="short_desc"
                id="short_desc"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                rows="3"
                placeholder="Enter Short Description"
                required></textarea>
        </div>

        <div class="mb-4">
            <label for="type" class="block text-gray-700 text-sm font-bold mb-2">Type of Post</label>
            <select
                name="type"
                id="type"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                required>
                <option value="" disabled selected>Select Type</option>
                <option value="note">Note</option>
                <option value="question">Question</option>
                <option value="post">Post</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="semester" class="block text-gray-700 text-sm font-bold mb-2">Select the semester</label>
            <select id="semester" name="semester" required
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="" disabled selected>Select Semester</option>
                <option value="1">1st Semester</option>
                <option value="2">2nd Semester</option>
                <option value="3">3rd Semester</option>
                <option value="4">4th Semester</option>
                <option value="5">5th Semester</option>
                <option value="6">6th Semester</option>
                <option value="7">7th Semester</option>
                <option value="8">8th Semester</option>
            </select>
        </div>

        <div class="mb-6">
            <label for="files" class="block text-gray-700 text-sm font-bold mb-2">Upload Files</label>
            <input
                type="file"
                name="files[]"
                id="files"
                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
                multiple>
        </div>

        @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="flex items-center justify-between">
            <button
                type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Submit
            </button>
        </div>
    </form>
</div>

@endsection