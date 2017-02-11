<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('includes.head')
</head>
<body>
    <div id="app">
        @include('includes.header')
    <div class="container" style="padding-top: 90px">
        @yield('content')
    </div>
    </div>

    <footer class="footer">
        <div class="container">
            @include('includes.footer')
        </div>
    </footer>


    @stack('scripts')
</body>

</html>
