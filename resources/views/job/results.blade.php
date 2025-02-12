<x-layout>
  <x-panel-title>
    Search Results
    @if ($tag)
      for #{{ $tag->name }}
    @endif
  </x-panel-title>

  <div class="space-y-6">
    @foreach ($jobs as $job)
      <x-job-wide-card :job="$job"></x-job-wide-card>
    @endforeach
  </div>
</x-layout>
