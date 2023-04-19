@props(['tagCsv'])

@php
    $tags = explode(',', $tagCsv)
@endphp
<ul class="flex">
    @foreach ($tags as $tag)
        <li class="flex items-center justify-center bg-blue-100 rounded-md py-2 px-3 mr-2 text-xs">
            <a class="text-blue-400 hover:text-blue-600" href="/?tag={{$tag}}">{{ $tag }}</a>
        </li>
    @endforeach
</ul>