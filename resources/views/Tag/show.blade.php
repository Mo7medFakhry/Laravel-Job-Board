<x-layout :title="$pageTitle">

    <h2>Tag: {{ $tag->title }}</h2>

    <h3>Related Post</h3>
    <ul>
        @forelse($tag->posts as $post)
            <li>
                <strong>{{ $post->title }}</strong>
                <p>Author {{ $post->author }}</p>
                <a href="{{ route('blogs.show', $post->id) }}">View Full Post</a>
            </li>
        @empty
            <li>No Post Found</li>
        @endforelse
    </ul>
</x-layout>
