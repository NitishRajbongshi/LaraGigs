@extends('layout')
@section('content')
    <div class="bg-blue-100 shadow-md p-10 rounded max-w-full mx-auto mt-2 md:mt-24 md:max-w-3xl">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Update Gig</h2>
            <p class="mb-4">Update the GIG carefully</p>
        </header>

        <form method="POST" action="/listings/{{ $listing->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2">Company Name</label>
                <input type="text" class="rounded p-2 w-full focus:outline-none focus:shadow-sm" placeholder="My Company" name="company"
                    value="{{ $listing->company }}" />

                @error('company')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Job Title</label>
                <input type="text" class=" rounded p-2 w-full focus:outline-none focus:shadow-sm" name="title"
                    placeholder="Senior Laravel Developer" value="{{ $listing->title }}" />

                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Job Location</label>
                <input type="text" class=" rounded p-2 w-full focus:outline-none focus:shadow-sm" name="location"
                    placeholder="Remote, Boston MA, etc" value="{{ $listing->location }}" />

                @error('location')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">
                    Contact Email
                </label>
                <input type="text" class=" rounded p-2 w-full focus:outline-none focus:shadow-sm" placeholder="mycompany@company.com" name="email"
                    value="{{ $listing->email }}" />

                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="website" class="inline-block text-lg mb-2">
                    Website/Application URL
                </label>
                <input type="text" class=" rounded p-2 w-full focus:outline-none focus:shadow-sm" placeholder="mycompany.com" name="website"
                    value="{{ $listing->website }}" />

                @error('website')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input type="text" class=" rounded p-2 w-full focus:outline-none focus:shadow-sm" name="tags"
                    placeholder="Laravel, Backend, Postgres, etc" value="{{ $listing->tags }}" />

                @error('tags')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Company Logo
                </label>
                <input type="file" class=" rounded p-2 w-full focus:outline-none focus:shadow-sm" name="logo" />

                <div class="my-10">
                    <img class="" src="{{ $listing->logo ? asset('storage/'. $listing->logo) : asset('images/not_found.png') }}" alt="photo" height="auto" width="250rem"/>
                </div>

                @error('logo')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Job Description
                </label>
                <textarea class=" rounded p-2 w-full focus:outline-none focus:shadow-sm" name="description" rows="10"
                    placeholder="Include tasks, requirements, salary, etc">{{ $listing->description }}</textarea>

                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-black">
                    Update Gig
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </div>
@endsection
