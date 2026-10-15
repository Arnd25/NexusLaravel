<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title }}</title>
</head>
<body class="text-white bg-gray-200 flex max-w-full overflow-x-hidden">
    <div class="min-h-screen w-full flex">
        <aside class="bg-gray-800 p-5 h-screen text-lg max-w-sm w-full">
            <x-admin.navigation/>
        </aside>
        <main class="flex-1 py-5">
            <x-admin.container>
                {{ $slot }}
            </x-admin.container>
        </main>
    </div>
</body>
</html>
