<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Larave 10-task-list</title>
    @yield('styles')
</head>

<body>
    <h1>@yield('title')</h1>

    @if (session()->has('success'))
        <div style="color: blue">{{ session('success') }}</div>     
    @endif

    <div>
        @yield('content')
    </div>
</body>

</html>
