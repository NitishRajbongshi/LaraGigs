@props(['listing'])
<div class="border-0 rounded p-6 bg-white shadow-sm">
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{ $listing->logo ? asset('storage/'. $listing->logo) : asset('images/not_found.png') }}" alt="photo" />
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{ $listing->id }}">{{ $listing->title }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>
            <x-listing-tags :tagCsv="$listing->tags" />
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot text-blue-300"></i> {{ $listing->location }}
            </div>
        </div>
    </div>
</div>