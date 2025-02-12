@props(['name', 'label'])

@php
  $defaults = [
    'id' => $name,
    'name' => $name,
    'type' => 'text',
    'value' => old($name),
    'class' => 'focus-visible:outline-none border px-5 py-4 border-white/15 bg-white/5 rounded-2xl w-full'
  ]
@endphp

<x-form.field :$name :$label>
  <input {{ $attributes($defaults) }}>
</x-form.field>