<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-page.head />

<body>
    <div class="container mx-auto px-4">
        <x-page.menu />
        {{ $slot }}
    </div>
</body>

</html>
