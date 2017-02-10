<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('includes.head')
</head>
<body>
    <div id="app">
        @include('includes.header')

        @yield('content')
    </div>


<footer class="footer">
        <div class="container">
            @include('includes.footer')
        </div>
</footer>

    @stack('scripts')
</body>
</html>
