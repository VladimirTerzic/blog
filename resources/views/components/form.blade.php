<form action="/register-user" method="POST" class="m-auto grid gap-6 bg-gray-300 p-10">
    @csrf
    <div class="grid bg-white p-2">
        <input id="name" name="name" placeholder="name" type="text" value="{{ old('name') }}">
        @error('name')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror
    </div>
    <div class="grid bg-white p-2">
        <input id="email" name="email" placeholder="email" type="email" value="{{ old('email') }}">
        @error('email')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror
    </div>
    <div class="grid bg-white p-2">
        <input id="password" name="password" placeholder="password" type="password" value="{{ old('password') }}">
        @error('password')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror
    </div>
    <div class="grid bg-white p-2">
        <input id="password_confirmation" name="password_confirmation" placeholder="confirme password" type="password"
            value="{{ old('password_confirmation') }}">
        @error('password_confirmation')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror
    </div>

    <button class="bg-white p-2 shadow-xl active:shadow-none" type="submit">SUbmit</button>
</form>
