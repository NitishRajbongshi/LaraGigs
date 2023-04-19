@extends('layout')
@section('content')
    <div class="bg-blue-100 shadow-md p-10 rounded max-w-full mx-auto mt-2 md:mt-24 md:max-w-lg">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Register
            </h2>
            <p class="mb-4">Create an account to post gigs</p>
        </header>

        <form action="/users" method="post">
            @csrf
            <div class="mb-6">
                <label for="name" class="inline-block text-lg mb-2">
                    Name
                </label>
                <input type="text" id="name" class="rounded p-2 w-full focus:outline-none focus:shadow-sm" name="name" value="{{ old('name') }}" />

                @error('name')
                    <p class="text-red-600 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Email</label>
                <input type="email" id="email" class="rounded p-2 w-full focus:outline-none focus:shadow-sm" name="email" value="{{ old('email') }}" />
                @error('email')
                    <p class="text-red-600 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="inline-block text-lg mb-2">
                    Password
                </label>
                <input type="password" id="password" class="rounded p-2 w-full focus:outline-none focus:shadow-sm" name="password" />

                @error('password')
                    <p class="text-red-600 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password_confirmation" class="inline-block text-lg mb-2">
                    Confirm Password
                </label>
                <input type="password" id="password_confirmation" class="rounded p-2 w-full focus:outline-none focus:shadow-sm" name="password_confirmation" />
                @error('password_confirmation')
                    <p class="text-red-600 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-black">
                    Sign Up
                </button>
            </div>

            <div class="mt-8">
                <p>
                    Already have an account?
                    <a href="/login" class="text-red-600">Login</a>
                </p>
            </div>
        </form>
    </div>
@endsection
