<!DOCTYPE html>
<head>
    <title>LaraDex - @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>

    <nav class="navbar navbar-dark bg-primary">
        <a href="#" class="navbar-brand">LaraDex</a>
    </nav>

    @yield('content')    
    
    <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>