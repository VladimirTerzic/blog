<form action="{{ $formAction }}" method="POST" class="m-auto grid gap-6 bg-gray-300 p-10">
    @csrf
    <div class="grid bg-white p-2">
        <input id="title" name="title" placeholder="title" type="text"
            value="@if (isset($isEditPost)) {{ $post->title }} @else{{ old('title') }} @endif">
        @error('title')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror
    </div>
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
