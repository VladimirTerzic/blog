<div class="flex flex-col gap-4 max-w-xl p-4">
    @foreach ($posts as $post)
        <a href="post/{{ $post->id }}" class="p-4 bg-gray-200 shadow-sm">
            <h2 class="font-semibold text-xl">
                {{ $post->title }}
            </h2>
            <p>
                {{ $post->description }}
            </p>
        </a>
    @endforeach
</div>
