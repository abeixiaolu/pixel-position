<x-layout>
    <section class="mb-12">
        <x-section-head>Top Jobs</x-section-head>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
            <x-job-card></x-job-card>
            <x-job-card></x-job-card>
            <x-job-card></x-job-card>
        </div>
    </section>

    <section class="mb-12">
        <x-section-head>Tags</x-section-head>
        <div class="flex gap-2">
            <x-button>Frontend</x-button>
            <x-button>Frontend</x-button>
            <x-button>Frontend</x-button>
        </div>
    </section>

    <section class="mb-12">
        <x-section-head>Find Jobs</x-section-head>
        <div class="flex flex-col space-y-4">
            <x-job-list-item></x-job-list-item>
            <x-job-list-item></x-job-list-item>
            <x-job-list-item></x-job-list-item>
            <x-job-list-item></x-job-list-item>
            <x-job-list-item></x-job-list-item>
        </div>
    </section>
</x-layout>