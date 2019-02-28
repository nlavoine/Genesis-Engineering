<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="SJ3, Multimédia, matériel,informatique, pc, photo">
        <title>S3J Multimédia</title>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
              crossorigin="anonymous">
        
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