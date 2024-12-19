@extends('include.master')
@section('content')
<div class="bg-gray-100 flex items-center justify-center py-6">
    <div class="bg-white shadow-lg rounded-lg w-full max-w-2xl p-6">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Update Profile</h2>

        <div class="flex items-center justify-center mb-6">
            <div class="relative h-28 w-28 rounded-full flex items-center justify-center border border-black">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
            </div>
        </div>

        <!-- Update Form -->
        <form action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" value="{{ auth()->user()->name }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" value="{{ auth()->user()->email }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" readonly>
            </div>

            <div>
                <label for="semester" class="block text-sm font-medium text-gray-700">Semester</label>
                <select name="semester" id="semester"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <option value="1" {{ auth()->user()->semester == 1 ? 'selected' : '' }}>1st Semester</option>
                    <option value="2" {{ auth()->user()->semester == 2 ? 'selected' : '' }}>2nd Semester</option>
                    <option value="3" {{ auth()->user()->semester == 3 ? 'selected' : '' }}>3rd Semester</option>
                    <option value="4" {{ auth()->user()->semester == 4 ? 'selected' : '' }}>4th Semester</option>
                    <option value="5" {{ auth()->user()->semester == 5 ? 'selected' : '' }}>5th Semester</option>
                    <option value="6" {{ auth()->user()->semester == 6 ? 'selected' : '' }}>6th Semester</option>
                    <option value="7" {{ auth()->user()->semester == 7 ? 'selected' : '' }}>7th Semester</option>
                    <option value="8" {{ auth()->user()->semester == 8 ? 'selected' : '' }}>8th Semester</option>
                </select>
            </div>

            @if($errors->any())
            <div class="bg-red-500 text-white px-4 py-2 rounded-md">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div>
                <button type="submit"
                    class="w-full bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    Update Profile
                </button>
            </div>
        </form>
    </div>
</div>

@endsection