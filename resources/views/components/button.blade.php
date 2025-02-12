@props(['tag', 'size' => 'base'])
@php
  $classes = 'hover:bg-white/20 bg-white/10 rounded-full';
  if ($size === 'small') {
      $classes .= ' text-2xs px-2 py-1';
  } elseif ($size === 'base') {
      $classes .= ' text-sm px-5 py-1';
  }
@endphp

<a href="/tags/{{ $tag->name }}" class="{{ $classes }}">{{ $tag->name }}</a>
