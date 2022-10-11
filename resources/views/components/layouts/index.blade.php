<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/css/app.css')
</head>

<body class="flex h-full flex-col px-32">
    <x-header></x-header>
    <main class="grow">
        {{ $slot }}
    </main>
    <x-footer></x-footer>
</body>

</html>
