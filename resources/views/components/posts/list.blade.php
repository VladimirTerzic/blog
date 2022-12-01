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
        <p>Cat: <a class="underline text-purple-500" href="/category/{{$post->category->id}}">{{$post->category->name}}</a></p>
        <p>author:
            <a href="#">
                {{ $post->user->name }}
            </a>
        </p>
        <hr>
    @endforeach
</div>
