@extends('layout')
@section('content')
    @include('partials._search')
    @include('partials._hero')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @unless (count($listings) == 0)
        @foreach ($listings as $listing)
        <x-listing-card :listing="$listing" />
        <x-flash-message />
        @endforeach

        <div>
            <span class="bg-blue-300 border-0"> {{ $listings->links() }} </span>
        </div>

        @else
            <p class="text-red-400 text-lg font-bold">No listing found</p>
        @endunless
    </div>
@endsection