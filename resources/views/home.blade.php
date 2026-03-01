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
            <h2 class="text-2xl font-normal md:w-165 w-auto m-auto mb-8">
                First Blog!
            </h2>
            <div class="form-control md:w-160 w-auto m-auto rounded bg-gray-100/100 p-4 text-right shadow-md mb-8">
                <textarea id="message" name="message" class="textarea border rounded bg-white m-auto w-full resize-none pl-2 pr-2 pt-1 pb-1" placeholder="What's on your mind?" name="" rows="4" required></textarea>
                <div class="flex justify-end">
                <button class="btn btn-primary bg-white p-1 pl-2 pr-2 rounded hover:opacity-90  transition-all" type="submit">Submit</button>
                </div>
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
