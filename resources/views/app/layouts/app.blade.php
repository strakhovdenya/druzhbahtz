<!doctype html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public/css/app.css">
    <title>Дружба ХТЗ @yield('title')</title>
</head>
<body>

<div class="container">

        @include('app.blocks.nav.index')
</div>

<div class="container">
    <div class="row">

        <div class="col-sm-3 pl-0 pr-0 border">
            <aside id="sticky-social">
                <ul>
                    <li><a href="#" class="entypo-facebook" target="_blank"><span>Facebook</span></a></li>
                    <li><a href="#" class="entypo-twitter" target="_blank"><span>Twitter</span></a></li>
                    <li><a href="#" class="entypo-gplus" target="_blank"><span>Google+</span></a></li>
                    <li><a href="#" class="entypo-linkedin" target="_blank"><span>LinkedIn</span></a></li>
                    <li><a href="#" class="entypo-instagrem" target="_blank"><span>Instagram</span></a></li>
                    <li><a href="#" class="entypo-stumbleupon" target="_blank"><span>StumbleUpon</span></a></li>
                    <li><a href="#" class="entypo-pinterest" target="_blank"><span>Pinterest</span></a></li>
                    <li><a href="#" class="entypo-flickr" target="_blank"><span>Flickr</span></a></li>
                    <li><a href="#" class="entypo-tumblr" target="_blank"><span>Tumblr</span></a></li>
                </ul>
            </aside>
            @include('app.blocks.sidebar.left.index')
        </div>
        <div class="col-sm-9 pr-0">
            @yield('slider')
            @yield('content')
        </div>
    </div>

</div>

@include('app.blocks.footer.index')
<script src="public/js/app.js"></script>
</body>
</html>
