<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title }}</title>
</head>
<body class="bg-darkBg text-white flex overflow-x-hidden gap-10">
    <div class="min-h-screen flex">
        <aside class="bg-gray-800 p-5 h-screen fixed text-lg  max-w-sm">
            <x-admin.navigation/>
        </aside>
        <main class="flex-1">
            <x-admin.container>
                {{$slot}}
            </x-admin.container>
        </main>
    </div>

</body>
</html>
