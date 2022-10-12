<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="flex h-full flex-col px-32" x-data={open:true}>
    <x-header></x-header>
    @if ($message = Session::get('message'))
        <div class="bg-green-300 flex justify-between p-4" x-show="open" x-init="setTimeout(() => open = false, 5000)">
            <p>{{ $message }}</p>
            <button type="button" x-on:click="open=false">×</button>
        </div>
    @endif

    <main class="flex grow flex-col">
        {{ $slot }}
    </main>

    <x-footer></x-footer>
</body>

</html>
