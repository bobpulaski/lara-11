<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-page.base-head />

<body class="bg-zinc-200">
    <div class="container mx-auto px-4">
        <x-page.header />
        {{ $slot }}
    </div>
</body>

</html>
