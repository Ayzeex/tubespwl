<!DOCTYPE html>
<html lang="id-ID">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles / Scripts -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body x-init="console.log(`ALPINE INITIALIZE`)" class="min-w-full max-w-full w-full tracking-[-0.085em] min-h-[200vh] h-fit bg-white text-black overflow-visible relative">
    <x-header></x-header>
    <main class="min-w-full max-w-full w-full min-h-screen h-auto bg-white text-black overflow-hidden px-5 xs:px-15 sm:px-30 md:px-40 lg:px-50">
        {{ $slot }}
    </main>

    <x-footer></x-footer>
</body>
</html>
