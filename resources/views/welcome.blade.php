@extends('include.master')
@section('content')

<div class="container mx-auto px-4 py-8">

    <!-- Recommended for You Section -->
    @auth
    <section class="mt-8">
        <h2 class="text-2xl font-semibold mb-4">Recommended for You</h2>
        <div class="grid grid-cols-5 gap-4">
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="{{ asset('image/dummy.jpg') }}" alt="Your Image" class="w-full h-60 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-medium">Card Title</h3>
                <p class="text-gray-600">Description of the card.</p>
            </div>
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="{{ asset('image/dummy.jpg') }}" alt="Your Image" class="w-full h-60 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-medium">Card Title</h3>
                <p class="text-gray-600">Description of the card.</p>
            </div>
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="{{ asset('image/dummy.jpg') }}" alt="Your Image" class="w-full h-60 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-medium">Card Title</h3>
                <p class="text-gray-600">Description of the card.</p>
            </div>
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="{{ asset('image/dummy.jpg') }}" alt="Your Image" class="w-full h-60 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-medium">Card Title</h3>
                <p class="text-gray-600">Description of the card.</p>
            </div>
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="{{ asset('image/dummy.jpg') }}" alt="Your Image" class="w-full h-60 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-medium">Card Title</h3>
                <p class="text-gray-600">Description of the card.</p>
            </div>
        </div>
    </section>
    @endauth

    <!-- Latest Section -->
    <section>
        <h2 class="text-2xl font-semibold mb-4">Latest Notes</h2>
        <div class="grid grid-cols-5 gap-4">
            @foreach($notes as $note)
            <div class="bg-white p-4 shadow-lg rounded-lg">
                @if($note->attachments->count() > 0)
                @php
                $firstAttachment = $note->attachments->first();
                @endphp
                @if($firstAttachment->file_type === 'pdf')
                <a href="{{ asset($firstAttachment->file_path) }}" target="_blank" class="text-blue-500">
                    <img src="{{ asset('image/dummy.jpg') }}" alt="PDF" class="w-full h-60 object-cover rounded-lg mb-4">
                </a>
                @else
                <img src="{{ asset($firstAttachment->file_path) }}" alt="Attachment" class="w-full h-60 object-cover rounded-lg mb-4">
                @endif
                @else
                <img src="{{ asset('image/dummy.jpg') }}" alt="No Image" class="w-full h-60 object-cover rounded-lg mb-4">
                @endif
                <div class="flex justify-between">  
                    <div>
                        <h3 class="text-lg font-medium">{{ $note->title }}</h3>
                        <p class="text-gray-600">Semester - {{ $note->semester }}</p>
                    </div>
                    <div>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
                            <a href="{{route('posts.show', $note->id)}}">View</a>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Popular Section -->
    <section class="mt-8">
        <h2 class="text-2xl font-semibold mb-4">Popular</h2>
        <div class="grid grid-cols-5 gap-4">
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="{{ asset('image/dummy.jpg') }}" alt="Your Image" class="w-full h-60 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-medium">Card Title</h3>
                <p class="text-gray-600">Description of the card.</p>
            </div>
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="{{ asset('image/dummy.jpg') }}" alt="Your Image" class="w-full h-60 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-medium">Card Title</h3>
                <p class="text-gray-600">Description of the card.</p>
            </div>
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="{{ asset('image/dummy.jpg') }}" alt="Your Image" class="w-full h-60 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-medium">Card Title</h3>
                <p class="text-gray-600">Description of the card.</p>
            </div>
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="{{ asset('image/dummy.jpg') }}" alt="Your Image" class="w-full h-60 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-medium">Card Title</h3>
                <p class="text-gray-600">Description of the card.</p>
            </div>
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="{{ asset('image/dummy.jpg') }}" alt="Your Image" class="w-full h-60 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-medium">Card Title</h3>
                <p class="text-gray-600">Description of the card.</p>
            </div>
        </div>
    </section>

</div>

@endsection