@props(['type'])

@php
    $classes = match (strtolower($type)) {
        'pc' => 'bg-cyan text-cyan',
        'ps5' => 'bg-cyan text-[#B7A6FF]',
        'xbox' => 'bg-cyan text-[#7ED957]',
        'switch' => 'bg-cyan text-[#DF8F8A]',
        default => 'bg-[#282A30] text-main',
    };
@endphp

<span class="rounded-lg px-2 py-1 text-xs font-semibold {{ $classes }}">
    {{ strtoupper($type) }}
</span>
