@props(['size' => 'base'])
@php
$classes = 'hover:bg-white/20 bg-white/10 rounded-full';
if($size === 'small') {
$classes .= ' text-2xs px-2 py-1';
} else if($size === 'base') {
$classes .= ' text-sm px-5 py-1';
}
@endphp

<a href="#" class="{{ $classes }}">{{ $slot }}</a>