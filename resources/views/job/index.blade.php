<x-layout>
  <div class="space-y-12">

    <section class="text-center mt-6 mb-14 outline-none ">
      <x-panel-title>Find Your Dream Job</x-panel-title>
      <x-form.form action="/search">
        <x-form.input name="q" :label="false" placeholder="Search for jobs..." />
      </x-form.form>
    </section>

    <section>
      <x-section-head>Top Jobs</x-section-head>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($featuredJobs as $job)
          <x-job-card :job="$job"></x-job-card>
        @endforeach
      </div>
    </section>

    <section>
      <x-section-head>Tags</x-section-head>
      <div class="flex gap-2">
        @foreach ($tags as $tag)
          <x-button :$tag />
        @endforeach
      </div>
    </section>

    <section>
      <x-section-head>Find Jobs</x-section-head>
      <div class="flex flex-col space-y-4">
        @foreach ($jobs as $job)
          <x-job-wide-card :job="$job"></x-job-wide-card>
        @endforeach
      </div>
    </section>
  </div>
</x-layout>
