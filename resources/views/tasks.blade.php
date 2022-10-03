<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"  />
    <title>Nuegas</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-row w-screen h-screen  bg-gray-background">
    @include('layouts.navbar', ['page' => 'tasks'])
    @include('layouts.main.mainTasks')
</body>
</html>