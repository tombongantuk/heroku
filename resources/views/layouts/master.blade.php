<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <title>@yield('title')</title>

    <!--boostrap core CSS-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('summernote/summernote-bs4.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    
    <header>
        <!--Fixed navigation bar-->
        @include('shared.header')
    </header>

    <!--begin page content-->
    <main role="main" class="container">
        <div class="container"></div>
        <br>
        <br>
        @yield('content')    
    </main>

    <!--footer-->
    <footer class="footer">
        <div class="container">
            @yield('text')
        </div>
    </footer>
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('summernote/summernote-bs4.min.js') }}"></script>
</body>
</html>