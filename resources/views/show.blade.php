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
    </div>
</x-layouts>