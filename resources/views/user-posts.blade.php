<x-layouts>
    <div>
        <h2 class="py-5 text-xl font-bold">
            {{ $user->name }} posts
        </h2>
        <ol class="list-decimal w-full">
            @foreach ($userPosts as $post)
                <li class="w-full odd:bg-gray-300 even:bg-red-300 hover:bg-transparent group">
                    <h5>
                        <a class="flex justify-between" href="/edit/post-{{ $post->id }}">
                            <span>
                                {{ $post->title }}
                            </span>
                            <span class="hidden group-hover:block">
                                <span>&#x1F449;</span>
                                <span>&#x1F517;</span>
                            </span>
                        </a>
                    </h5>
                </li>
            @endforeach
        </ol>
    </div>

</x-layouts>
