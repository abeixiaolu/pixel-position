<x-layout>
    <div class="space-y-12">

        <section class="text-center mt-6 mb-14 outline-none ">
            <h1 class="font-bold text-3xl mb-6">Let's Find You A Great Job</h1>
            <form action="">
                <input class="focus-visible:outline-none border px-5 py-4 border-white/15 bg-white/5 rounded-2xl w-full max-w-2xl" type="text" placeholder="Search for jobs..." />
            </form>
        </section>

        <section>
            <x-section-head>Top Jobs</x-section-head>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
            </div>
        </section>

        <section>
            <x-section-head>Tags</x-section-head>
            <div class="flex gap-2">
                <x-button>Frontend</x-button>
                <x-button>Frontend</x-button>
                <x-button>Frontend</x-button>
            </div>
        </section>

        <section>
            <x-section-head>Find Jobs</x-section-head>
            <div class="flex flex-col space-y-4">
                <x-job-wide-card></x-job-wide-card>
                <x-job-wide-card></x-job-wide-card>
                <x-job-wide-card></x-job-wide-card>
                <x-job-wide-card></x-job-wide-card>
                <x-job-wide-card></x-job-wide-card>
            </div>
        </section>
    </div>
</x-layout>