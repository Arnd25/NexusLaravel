@props(['title', 'subtitle','href','link'])
<div class="flex items-center justify-between mb-2">
    <div class="">
        <h2 class="text-xl font-bold text-gray-800">{{$title}}</h2>
        <p class="text-sm text-gray-600 mt-0.5">{{$subtitle}}</p>
    </div>
    <a class="inline-flex items-center gap-2 rounded-lg bg-indigo-600 px-4 py-2.5"
       href="{{$href}}">
        {{$link}}
    </a>
</div>
