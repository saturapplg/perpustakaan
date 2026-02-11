<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Library</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800">

<nav class="bg-white border-b">
    <div class="max-w-7xl mx-auto px-6 py-4 font-semibold">
        📚 Library
    </div>
</nav>

<main>
    @yield('content')
</main>

</body>
</html>
