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
        @forelse ($blogs as $blog)
            <div class="card p-4 bg-gradient-to-r from-cyan-500 to-blue-500 w-4/5 lg:w-200 rounded shadow shadow-xl shadow-black/20 scale-100 hover:scale-105 hover:cursor-pointer transition-all duration-200 z-0">
                <h2 class="text-2xl font-semibold pb-1">
                    {{ $blog->user ? $blog->user->name : 'Anonymous' }}
                </h2>
                <p class="text-md font-medium">
                    {{ $blog->message }}
                </p>
                <div class="text-sm text-gray-200/100 font-bold pt-1 text-right">
                    - {{ $blog->created_at->diffForHumans() }}
                </div>
            </div>
        @empty
            <p class="text-gray-500">No Blogs yet. Be the first to post blogs!</p>
        @endforelse
    </div>
</x-layout>
