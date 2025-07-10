<x-layout :title="$pageTitle">

    @foreach ($comments as $comment)

        <h1 class="text-2xl">{{ $comment->content }}</h1>

        <p>{{ $comment->author }}</p>
        <a href="/blog/{{ $comment->post->id }}">{{ $comment->post->title }}</a>

    @endforeach
{{ $comments->links() }}

</x-layout>
