<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('/image/logo-color.png')}}" type="image/ico"/>

    <title>{{ __('Дружба') }} | @yield('title')</title>

    @include('admin.components.styles')

</head>

<body class="nav-md">

<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">

                    <a class="site_title" href="{{ url('/') }}">
                       <img width="15%" src="{{ URL::asset('/image/logo-color.png') }}"> {{ __('Дружба') }}
                    </a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
               @include('admin.components.menu-profile')
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                @include('admin.components.sidebar-menu')
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                @include('admin.components.footer-menu')
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
       @include('admin.components.top-navigation')
        <!-- /top navigation -->

        <!-- page content -->
        @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        @include('admin.components.footer')
        <!-- /footer content -->
    </div>
</div>


@include('admin.components.scripts')

</body>
</html>
