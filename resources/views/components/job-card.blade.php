@props(['job'])

<x-panel class="flex-col items-center">
  <span class="text-sm self-start text-white/80">{{ $job->employer->name }}</span>
  <div class="text-xl font-medium text-center group-hover:text-blue-600">{{ $job->title }}</div>
  <p class="text-sm text-white/70">{{ $job->schedule }} - From {{ $job->salary }}</p>
  <div class="flex items-end justify-between w-full mt-auto">
    <div class="flex gap-2 flex-wrap">
      @foreach ($job->tags as $tag)
      <x-button :$tag size="small">{{ $tag }}</x-button>
    @endforeach
    </div>
    <div class="size-12 overflow-hidden rounded-md shrink-0">
      <x-employer-logo width="48" />
    </div>
  </div>
</x-panel>