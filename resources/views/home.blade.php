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

    <div>
        <form method="POST" action="/blogs">
            @csrf
            <div class="form-control w-full">
                <textarea class="textarea border focus:border-amber-50/50 w-full resize-none pl-2 pr-2 pt-1 pb-1" placeholder="What's on your mind?" name="" rows="4"></textarea>
            </div>
        </form>
    </div>

    <h1 class="container text-3xl pb-8 font-medium text-center underline">Blogs</h1>
    <div class="blog-container flex gap-8 flex-col mb-4 items-center">
        @forelse ($blogs as $blog)
            <x-blog :blog="$blog"/>
        @empty
            <p class="text-gray-900">No Blogs yet. Be the first to post blogs!</p>
        @endforelse
    </div>
</x-layout>
