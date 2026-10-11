<!doctype html>
<html class="bg-[#F6F7F9]" lang="{{config('app.locale')}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    @livewireStyles
    @vite([
    'resources/css/app.css',
    'resources/js/app.js'
])
</head>
<body>
<body>
@unless (request()->routeIs('login', 'register'))
    <x-navigation.sidebar/>
@endunless

<main @class(['min-h-screen', 'pl-68 pt-4' => ! request()->routeIs('login', 'register')])>
    {{ $slot }}
</main>
</body>
</body>
</html>
