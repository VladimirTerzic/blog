<form action="{{ $formAction }}" method="POST" class="m-auto grid gap-6 bg-gray-300 p-10">
    @csrf
    <label for="name">name</label>
    <div class="grid bg-white p-2">
        <input id="title" name="title" placeholder="title" type="text"
            value="@if (isset($isEditPost)) {{ $post->title }} @else{{ old('title') }} @endif">
        @error('title')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror
    </div>
    <label for="slug">slug</label>
    <div class="grid bg-white p-2">
        <input id="slug" name="slug" placeholder="slug" type="text"
            value="@if (isset($isEditPost)) {{ $post->slug }} @else{{ old('slug') }} @endif">
        @error('title')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror
    </div>
    <label for="desc">desc</label>
    <div class="grid bg-white p-2">
        {{-- {{ $isEditPost ? $post->description :  old('description') }} --}}
        {{--  --}}
        <textarea id="description" name="description" placeholder="description" type="text"
            value="@if (isset($isEditPost)) {{ $post->description }} @else{{ old('description') }} @endif">
            @if (isset($isEditPost))
{{ $post->description }} @else{{ old('description') }}
@endif
        </textarea>
        @error('description')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror
    </div>
    <button class="bg-white p-2 shadow-xl active:shadow-none" type="submit">SUbmit</button>
</form>
