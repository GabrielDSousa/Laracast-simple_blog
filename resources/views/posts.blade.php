<x-layout>
    @foreach ($posts as $post)
        <article>
            <a href="/post/{{$post->slug}}">
                <h1>{!! $post->title !!}</h1>
            </a>

            <p>
                <a href="/categories/{{$post->category->slug}}">{{ $post->category->name }}</a>
            </p>

            <div>
                {!! $post->excerpt !!}
            </div>
        </article>
    @endforeach
</x-layout>