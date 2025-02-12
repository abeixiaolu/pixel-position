@props(['name', 'label'])

<div>
  @if ($label)
    <div class="inline-flex items-center gap-x-2">
    <span class="w-2 h-2 bg-white inline-block"></span>
    <label class="font-bold" for="{{ $name }}">{{ $label }}</label>
    </div>
  @endif

  <div class="mt-1">
    {{ $slot }}

    @if ($errors->has($name))
    <p class="text-sm text-red-500 mt-1">{{ $errors->first($name) }}</p>
  @endif
  </div>
</div>