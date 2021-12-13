@props(['active' => false])

@php
    $classes = "block text-left px-3 appearance-none text-sm leading-6 hover:bg-blue-300 focus:bg-blue-300 hover:text-white focus:text-white w-full";
    if($active) $classes .= " bg-blue-300 text-white";
@endphp

<a {{$attributes(['class' => $classes])}}>
    {{$slot}}
</a>