@props(['name', 'label'])

@php
  $defaults = [
    'id' => $name,
    'name' => $name,
    'value' => old($name),
    'class' => 'focus-visible:outline-none border px-5 py-4 border-white/15 bg-white/5 rounded-2xl w-full'
  ]
@endphp

<x-form.field :$name :$label>
  <select {{ $attributes($defaults) }}>
    {{ $slot }}
  </select>
</x-form.field>