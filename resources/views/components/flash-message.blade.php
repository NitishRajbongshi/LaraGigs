@if (session()->has('message')) 
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="fixed right-3 top-12 opacity-80 text-white text-sm bg-red-500 rounded-lg">
        <p class="px-6 py-2">{{ session('message') }}</p>
    </div>
@endif
