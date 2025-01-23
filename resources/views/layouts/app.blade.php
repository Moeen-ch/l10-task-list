<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Larave 10-task-list</title>
    @yield('styles')
</head>

<body class="container mx-auto mt-10 mb-10 max-w-lg">
    <h1 class=" mb-4 text-2xl">@yield('title')</h1>

    @if (session()->has('success'))
        <div style="color: blue">{{ session('success') }}</div>     
    @endif

    <div>
        @yield('content')
    </div>
</body>

</html>
