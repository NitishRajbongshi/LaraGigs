@extends('layout')
@section('content')
    @include('partials._search')
    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <div class="bg-white border-0 p-10 rounded shadow-sm">
            <div class="flex flex-col md:flex-row items-start justify-center text-center">
                <div class="w-full md:w-[40%] flex flex-col justify-center items-center">
                    <div>
                        <img class="w-40 mr-6 mb-6 shadow-md" src="{{ $listing->logo ? asset('storage/'. $listing->logo) : asset('images/not_found.png') }}" alt="photo" />
                    </div>
    
                    <div>
                        <h3 class="text-2xl mb-2">{{ $listing->title }}</h3>
                        <h2 class="text-xl font-bold mb-4">{{ $listing->company }}</h2>
                    </div>
    
                    <div>
                        <x-listing-tags :tagCsv="$listing->tags" />
                    </div>
                        
                    <div class="text-lg my-4">
                        <i class="fa-solid fa-location-dot text-blue_200"></i> {{ $listing->location }}
                    </div>
                </div>
                

                <div class="w-full md:w-[60%]">
                    <h3 class="text-2xl mb-4">
                        Job Description
                    </h3>
                    <div class="text-lg space-y-6 max-w-[100%] md:max-w-[60%] mx-auto text-justify md:text-start">
                        <p>{{ $listing->description }}</p>

                        <a href="mailto:{{ $listing->email }}"
                            class="block bg-blue-200 text-dark mt-6 py-2 rounded-sm w-full md:w-full mx-auto px-5 hover:opacity-80 text-center text-sm"><i
                                class="fa-solid fa-envelope"></i>
                            Contact Employer</a>

                        <a href="https://{{ $listing->website }}" target="_blank"
                            class="block bg-blue-200 text-black py-2 rounded-sm w-full md:w-full mx-auto hover:opacity-80 text-center text-sm"><i
                                class="fa-solid fa-globe"></i> Visit
                            Website</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
