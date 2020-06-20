<!doctype html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
    <script src="https://kit.fontawesome.com/63531807ce.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.4.0/dist/alpine.min.js" defer></script>
    <livewire:styles>
    <title>Дружба ХТЗ @yield('title')</title>
</head>
<body>

<div class="container">

        @include('app.blocks.nav.index')
</div>

            @include('app.blocks.social')
<div class="container">
    <div class="row">

        <div class="col-sm-3 pl-0 pr-0">
            @include('app.blocks.sidebar.left.index')
        </div>
        <div class="col-sm-9 pr-0">
            @yield('slider')
            @yield('content')
        </div>
    </div>

</div>

@include('app.blocks.footer.index')
<script src="{{mix('/js/app.js')}}"></script>
<livewire:scripts>
</body>
</html>
