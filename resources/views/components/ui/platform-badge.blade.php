@props(['type'])

@php
    $classes = match (strtolower($type)) {
        'pc' => 'bg-[#4CD7F626]/25 text-[#4CD7F6]',
        'ps5' => 'bg-[#4CD7F626]/25 text-[#B7A6FF]',
        'xbox' => 'bg-[#4CD7F626]/25 text-[#7ED957]',
        'switch' => 'bg-[#4CD7F626]/25 text-[#DF8F8A]',
        default => 'bg-[#282A30] text-[#CBC3D7]',
    };
@endphp

<span class="rounded-lg px-2 py-1 text-xs font-semibold {{ $classes }}">
    {{ strtoupper($type) }}
</span>
