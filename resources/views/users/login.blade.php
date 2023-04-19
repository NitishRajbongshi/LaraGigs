@extends('layout')
@section('content')
    <div class="bg-blue-100 shadow-md p-10 rounded max-w-full mx-auto mt-2 md:mt-24 md:max-w-lg">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Log In
            </h2>
            <p class="mb-4">Log in to post gigs</p>
        </header>

        <form action="/login/authenticate" method="POST">
            @csrf
            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Email</label>
                <input type="email" class="rounded p-2 w-full focus:outline-none focus:shadow-sm" name="email" value="{{ old('email') }}" />

                @error('email')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="inline-block text-lg mb-2">
                    Password
                </label>
                <input type="password" class="rounded p-2 w-full focus:outline-none focus:shadow-sm" name="password" value="{{ old('password') }}" />

                @error('password')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-black">
                    Sign In
                </button>
            </div>

            <div class="mt-8">
                <p>
                    Don't have an account?
                    <a href="/register" class="text-red-500">Register</a>
                </p>
            </div>
        </form>
    </div>
@endsection
