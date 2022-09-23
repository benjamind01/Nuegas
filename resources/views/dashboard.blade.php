<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuegas</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-row w-screen h-screen">
    @include('layouts.navbar')
    @include('layouts.main')
    <div id="informations" class="w-3/12 bg-black">
        
    </div>
</body>
</html>