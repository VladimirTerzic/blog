<header>
    <nav class="flex justify-between bg-red-300 p-5">
        <ul class="flex gap-4">
            <li>
                <a href="/">home</a>
            </li>
        </ul>
        <ul class="flex gap-4">
            @auth
                <li>
                    <a href="/{{ auth()->user()->name }}-account">Welcome {{ auth()->user()->name }}</a>
                </li>
                <li>
                    <a href="/logout">Logout</a>
                </li>
            @endauth
            @guest
                <li>
                    <a href="/login">login</a>
                </li>
                <li>
                    <a href="/register">register</a>
                </li>
            @endguest
        </ul>
    </nav>
</header>
