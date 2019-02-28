<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @include('layout.header')
        @include('layout.menu')

        <div class="container">
            @yield('content')
        </div>

        @include('layout.footer')
    </body>
</html>