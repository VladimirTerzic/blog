<x-layouts>
    <form action="#" method="get" class="flex">
        <x-search></x-search>
        <div class="p-5">
            <select class="p-3 cursor-pointer" name="category" id="category">
                <option value="{{null}}">all</option>
                @foreach ($categories as $category)
                    <option 
                        value="{{$category->slug}}"
                        {{-- {{ request('category') === $category->slug ? 'selected' : '' }} --}}
                        @if (request('category') === $category->slug) selected @endif
                    >
                        {{$category->name}}
                    </option>
                @endforeach
            </select>
        </div>
    </form>
    <x-posts.list :posts="$posts"></x-posts.list>
</x-layouts>
