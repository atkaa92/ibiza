<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Iiza | ADMIN</title>
        {{--  <link rel="icon" href="{{ url('images/logo.png') }}" sizes="32x16">  --}}
        <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('css/jquery-ui.min.css') }}" rel="stylesheet">
        <link href="{{ url('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ url('css/style.css') }}" rel="stylesheet">
        <link href="{{ url('css/fancybox.css') }}" rel="stylesheet">
        <script src="{{ url('/js/jquery.min.js') }}"></script>
        <script src="{{ url('/js/fancybox.js') }}"></script>
        @stack('stylesheets')
    </head>
    <body>
        <div class="body">
            @include('admin/includes/header')
            @include('admin/includes/messages')
            <div style="margin-bottom: 50px;overflow: hidden">
                @yield('content')
            </div>
            @include('admin/includes/footer')
        </div>
        <script src="{{ url('/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('/js/main.js') }}"></script>
        @stack('scripts')
    </body>
</html>