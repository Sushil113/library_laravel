@extends('include.master')
@section('content')

<form method="POST" action="{{ route('verification') }}">
    @csrf
    @method('POST')
    <div class="flex flex-col justify-center items-center min-h-screen bg-gray-50">
        <div class="bg-white border border-gray-300 shadow-md rounded-lg p-6 md:p-8 w-full max-w-md">
            <div class="flex flex-col text-center space-y-4">
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800">Confirm OTP</h2>
                <p class="text-md md:text-lg text-gray-600">
                    Enter the OTP we just sent you.
                </p>
            </div>
            <div class="mt-6 space-y-4">
                <input type="hidden" name="user_id" value="{{ $user_id }}">
                <div>
                    <input 
                        type="text" 
                        name="otp" 
                        placeholder="Enter OTP"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none text-gray-800 placeholder-gray-400"
                    />
                </div>
                <div>
                    <button 
                        type="submit"
                        class="w-full flex items-center justify-center px-4 py-3 border border-transparent rounded-lg shadow-sm bg-indigo-600 hover:bg-indigo-700 text-white text-lg font-medium transition ease-in-out duration-150">
                        Confirm
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection

