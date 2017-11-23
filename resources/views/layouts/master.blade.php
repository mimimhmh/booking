<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/justified-nav.css') }}" rel="stylesheet">

</head>
<body>
<div id="app" class="container">

    @include('layouts.nav')

    <main role="main">

        @yield('content')

    </main>

    <!-- Site footer -->
    <footer class="footer">
        <p>&copy; Company 2017</p>
    </footer>

</div> <!-- /container -->

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
