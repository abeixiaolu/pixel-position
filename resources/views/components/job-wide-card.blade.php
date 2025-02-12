@props(['job'])

<x-panel>
  <div class="size-[90px] overflow-hidden rounded-md shrink-0">
    <x-employer-logo width="90" :employer="$job->employer" />
  </div>
  <div class="flex flex-col items-start space-y-2 flex-1">
    <div class="flex items-center justify-between w-full">
      <span class="text-sm text-white/60">{{ $job->employer->name }}</span>
      <div class="flex gap-2">
        <x-tag>{{ $job->location }}</x-tag>
        <x-tag>{{ $job->schedule }}</x-tag>
      </div>
    </div>
    <div class="text-xl font-medium group-hover:text-blue-600 transition">{{ $job->title }}</div>
    <div class="flex items-center justify-between w-full mt-4">
      <p class="text-sm text-white/60">{{ $job->schedule }} - From {{ $job->salary }}</p>
      <div class="flex gap-2">
        @foreach ($job->tags as $tag)
          <x-button :$tag />
        @endforeach
      </div>
    </div>
  </div>
</x-panel>
