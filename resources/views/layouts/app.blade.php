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
@unless (request()->routeIs('login', 'register','password.request','password.reset'))
    <x-navigation.sidebar/>
@endunless

<main @class([
    'min-h-screen',
    'px-4 pt-16 md:pt-4 md:pl-68 md:pr-4' => ! request()->routeIs('login', 'register', 'password.request', 'password.reset'),])>
    {{ $slot }}
</main>
</body>
</html>
