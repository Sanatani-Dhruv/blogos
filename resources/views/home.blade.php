<x-layout>
    <x-slot:title>
        Home
    </x-slot:title>
    <div class="flex flex-col md:mt-30 mb-10 md:mb-15 items-center justify-center">
        <h1 class="mx-auto font-semibold text-3xl p-4 text-center">
            Welcome to Blogos!
        </h1>
        <p class="mx-auto font-medium text-xl p-4 text-center">
            Create, share and post your thoughts, theories, things...
        </p>
    </div>
    <h1 class="container text-3xl pb-8 font-medium text-center underline">Blogs</h1>
    <div class="blog-container flex gap-8 flex-col mb-4 items-center">
        @foreach ($blogs as $value)
            <div class="card p-4 bg-lime-500/30 w-4/5 lg:w-200 rounded shadow shadow-lg shadow-black/20 scale-100 hover:scale-105 hover:cursor-pointer transition-all duration-200">
                <h2 class="text-2xl font-semibold pb-1">
                    {{ $value['author'] }}
                </h2>
                <p class="text-md font-medium">
                    {{ $value['message'] }}
                </p>
                <div class="text-sm text-gray-600 pt-1 text-right">
                    - {{ $value['time'] }}
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
