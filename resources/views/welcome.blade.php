@extends('include.master')
@section('content')

<div class="container mx-auto px-4 py-8">

    <!-- Recommended for You Section -->
    @auth
    <section class="mt-8">
        <h2 class="text-2xl font-semibold mb-4">Recommended for You</h2>
        <div class="grid grid-cols-5 gap-4">
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="https://via.placeholder.com/150" alt="Card Image" class="w-full h-60 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-medium">Card Title</h3>
                <p class="text-gray-600">Description of the card.</p>
            </div>
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="https://via.placeholder.com/150" alt="Card Image" class="w-full h-60 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-medium">Card Title</h3>
                <p class="text-gray-600">Description of the card.</p>
            </div>
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="https://via.placeholder.com/150" alt="Card Image" class="w-full h-60 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-medium">Card Title</h3>
                <p class="text-gray-600">Description of the card.</p>
            </div>
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="https://via.placeholder.com/150" alt="Card Image" class="w-full h-60 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-medium">Card Title</h3>
                <p class="text-gray-600">Description of the card.</p>
            </div>
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="https://via.placeholder.com/150" alt="Card Image" class="w-full h-60 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-medium">Card Title</h3>
                <p class="text-gray-600">Description of the card.</p>
            </div>
        </div>
    </section>
    @endauth
    
    <!-- Latest Section -->
    <section>
        <h2 class="text-2xl font-semibold mb-4">Latest</h2>
        <div class="grid grid-cols-5 gap-4">
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="https://via.placeholder.com/150" alt="Card Image" class="w-full h-60 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-medium">Card Title</h3>
                <p class="text-gray-600">Description of the card.</p>
            </div>
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="https://via.placeholder.com/150" alt="Card Image" class="w-full h-60 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-medium">Card Title</h3>
                <p class="text-gray-600">Description of the card.</p>
            </div>
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="https://via.placeholder.com/150" alt="Card Image" class="w-full h-60 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-medium">Card Title</h3>
                <p class="text-gray-600">Description of the card.</p>
            </div>
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="https://via.placeholder.com/150" alt="Card Image" class="w-full h-60 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-medium">Card Title</h3>
                <p class="text-gray-600">Description of the card.</p>
            </div>
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="https://via.placeholder.com/150" alt="Card Image" class="w-full h-60 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-medium">Card Title</h3>
                <p class="text-gray-600">Description of the card.</p>
            </div>
        </div>
    </section>

    <!-- Popular Section -->
    <section class="mt-8">
        <h2 class="text-2xl font-semibold mb-4">Popular</h2>
        <div class="grid grid-cols-5 gap-4">
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="https://via.placeholder.com/150" alt="Card Image" class="w-full h-60 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-medium">Card Title</h3>
                <p class="text-gray-600">Description of the card.</p>
            </div>
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="https://via.placeholder.com/150" alt="Card Image" class="w-full h-60 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-medium">Card Title</h3>
                <p class="text-gray-600">Description of the card.</p>
            </div>
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="https://via.placeholder.com/150" alt="Card Image" class="w-full h-60 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-medium">Card Title</h3>
                <p class="text-gray-600">Description of the card.</p>
            </div>
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="https://via.placeholder.com/150" alt="Card Image" class="w-full h-60 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-medium">Card Title</h3>
                <p class="text-gray-600">Description of the card.</p>
            </div>
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="https://via.placeholder.com/150" alt="Card Image" class="w-full h-60 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-medium">Card Title</h3>
                <p class="text-gray-600">Description of the card.</p>
            </div>
        </div>
    </section>

</div>

@endsection