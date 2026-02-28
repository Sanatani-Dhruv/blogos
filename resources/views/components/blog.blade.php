@props(['blog'])

<div class="card p-4 bg-gradient-to-r from-cyan-500 to-blue-500 w-4/5 lg:w-200 rounded shadow shadow-xl shadow-black/20 scale-100 hover:scale-105 hover:cursor-pointer transition-all duration-200 z-0 flex gap-4 ">
    <div class="avatar-box w-10 rounded-full">
        <img class="rounded-full mt-2" src="https://avatars.laravel.cloud/{{ urlencode(($blog->user) ? $blog->user->name : 'Anonymous') }}" alt="{{ ($blog->user ? $blog->user->name : 'Anonymous') . "'s Avatar" }}">
    </div>
    <div class="w-full">
        <h2 class="text-2xl font-semibold pb-1">
            {{ $blog->user ? $blog->user->name : 'Anonymous' }}
        </h2>
        <p class="text-md font-medium text-base-content/10">
            {{ $blog->message }}
        </p>
        <div class="text-sm text-gray-200/100 font-bold pt-1 text-right text-base-content/10">
            - {{ $blog->created_at->diffForHumans() }}
        </div>
    </div>
</div>

