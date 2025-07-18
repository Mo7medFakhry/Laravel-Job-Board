<x-layout :title="$pageTitle">

    @foreach ($posts as $post)

        <h1 class="text-2xl">{{ $post->title }}</h1>

        <p>{{ $post->body }}</p>

        <ul>
            @foreach ($post->comments as $comment)

                <li>{{ $comment->content }} , {{ $comment->author }}</li>

            @endforeach
        </ul>


    @endforeach

{{ $posts->links() }}
</x-layout>
