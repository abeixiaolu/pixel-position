@props(['label', 'name'])
@php
  $defaults = [
    'type' => 'checkbox',
    'id' => $name,
    'name' => $name,
    'value' => old($name)
  ];
@endphp

<x-form.field :$label :$name>
  <div class="focus-visible:outline-none border px-5 py-4 border-white/15 bg-white/5 rounded-2xl w-full">
    <input {{ $attributes($defaults) }}>
    <span class="pl-1">{{ $label }}</span>
  </div>
</x-form.field>