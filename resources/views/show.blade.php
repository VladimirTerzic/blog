<x-layouts>
    <div class="flex max-w-xl flex-col gap-4 p-4">
        <div class="bg-gray-200 p-4 shadow-sm">
            <h2 class="text-xl font-semibold">
                {{ $post->title }}
            </h2>
            <p>
                {{ $post->description }}
            </p>
        </div>
        @auth
            <hr>
            <form action="/post/{{ $post->id }}/comments" method="POST">
                @csrf
                <label for="body">comment here</label>
                <textarea class="border-2 rounded-md p-2 w-full" name="body" id="body"></textarea>
                <button class="border-2 rounded-md p-2 bg-red-300" type="submit">post</button>
            </form>
        @endauth
        <hr>
        <section class="space-y-5">
            @foreach ($post->comments as $comment)
                <x-post-comment :comment="$comment" />
            @endforeach
        </section>
    </div>
</x-layouts>
