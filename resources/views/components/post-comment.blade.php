@props(['comment'])
<article class="flex bg-gray-100 gap-3 space-x-2">
    <div>
        <img src="https://i.pravatar.cc/100" alt="alrt">
    </div>

    <div>
        <header>
            <h3 class="font-bold">
                {{ $comment->title }}
            </h3>
            <p class="text-xs">
                posted
                <time>{{ $comment->created_at->diffForHumans() }}</time>
            </p>
        </header>
        <p>
            {{ $comment->body }}
        </p>
    </div>
</article>
