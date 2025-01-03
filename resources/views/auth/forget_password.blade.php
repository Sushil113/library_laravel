@extends('include.master')
@section('content')

<main id="content" role="main" class="w-full  max-w-md mx-auto p-6">
    <div class="mt-7 bg-white  rounded-xl shadow-lg border-2 border-indigo-300">
        <div class="p-4 sm:p-7">
            <div class="text-center">
                <h1 class="block text-2xl font-bold text-gray-800 dark:text-black">Forgot password?</h1>
                <p class="mt-2 text-sm text-black">
                    Remember your password?
                    <a class="text-blue-600 decoration-2 hover:underline font-medium" href="{{route('loginpage')}}">
                        Login here
                    </a>
                </p>
            </div>

            <div class="mt-5">
                <form method="post" action="{{route('sendResetLinkEmail')}}">
                    @csrf
                    <div class="grid gap-y-4">
                        <div>
                            <label for="email" class="block text-sm font-bold ml-1 mb-2 dark:text-black">Email address</label>
                            <div class="relative">
                                <input type="email" id="email" name="email" class="py-3 px-4 block w-full border-2 border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 shadow-sm" required aria-describedby="email-error">
                            </div>

                            @if ($errors->any())
                            <div class="bg-red-100 text-red-700 p-4 rounded mb-4 mt-4">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </div>
                        <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">Reset password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection