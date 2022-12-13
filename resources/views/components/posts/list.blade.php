<div class="flex flex-col gap-4 max-w-xl p-4">
    @foreach ($posts as $post)
        <a href="post/{{ $post->id }}" class="p-4 bg-gray-200 shadow-sm">
            <h2 class="font-semibold text-xl">
                {{ $post->title }}
            </h2>
            <p>
                {{ \Illuminate\Support\Str::limit($post->description, 150, $end='...') }}
            </p>
        </a>
        <p>Cat: <a class="underline text-purple-500" href="/category/{{$post->category->slug}}">{{$post->category->name}}</a></p>
        <p>author:
            <a class="underline text-purple-500" href="/user-posts/{{$post->author->username}}">
                {{ $post->author->name }}
            </a>
        </p>
        <hr>
        @endforeach
        {{ $posts->links() }}
    
</div>
