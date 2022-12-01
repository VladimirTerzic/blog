<x-layouts>
    <h1 class="text-lg">
    {{$category->name}}
</h1>
<ol class="flex flex-col">
    @foreach ($category->posts as $post)
        <li>
            {{$post->title}}
        </li>
    @endforeach
</ol>
</x-layouts>
