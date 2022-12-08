<x-layouts>
    <h1 class="text-lg">
    {{$category->name}}
</h1>
<ol class="flex flex-col">
    @foreach ($category->posts as $post)
        <li>
            <h3>
                {{$post->title}}
            </h3>
            <p>
                {{ $post->description }}
            </p>
            <p>
                by: {{ $post->author->name }}
            </p>
        </li>
        <hr>
    @endforeach
</ol>
</x-layouts>
