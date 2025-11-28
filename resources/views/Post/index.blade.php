<x-layout :title="$pageTitle">

    @if (session('success'))
        <div class="bg-green-50 px-3 py-2">
            {{ session('success') }}
        </div>
    @endif
    <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="/blogs/create"
            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</a>
    </div>
    @foreach ($posts as $post)
        <div class="flex justify-between items-center border border-b-cyan-950 my-2 px-4 py-6" >
            <div>

                <h1 class="text-2xl">
                    <a href="/blogs/{{ $post->id }}">{{ $post->title }}</a>
                </h1>
                <p class="text-1xl">{{ $post->author }}</p>
            </div>

            <div>
            <a href="/blogs/{{ $post->id }}/edit" class="text-sm font-semibold text-shadow-indigo-800">Edit</a>
            <form method="POST" action="/blogs/{{ $post->id }}" onsubmit="return confirm('Are You Sure, this delete item?')">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-700">Delete</button>
            </form>
            </div>
        </div>
    @endforeach
    <br>
    {{ $posts->links() }}
    </x-layout>
