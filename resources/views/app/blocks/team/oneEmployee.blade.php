{{--<div class="card position-relative">--}}
{{--    <a class="text-decoration-none" href="{{route('employees')}}/{{$oneEmployee->id}}">--}}
{{--        <img class="img-fluid card-img-top" src="/storage/images/employees/{{$oneEmployee->image}}" alt="Card image cap">--}}
{{--        <div class="card-body p-1">--}}
{{--            <div class="container p-0">--}}
{{--                <div class="row m-0 position-relative">--}}
{{--                    <div class="col-2 p-0">--}}
{{--                        <img class="logo-position-team img-fluid" src="/image/logo-color.png" alt="main-logo">--}}
{{--                    </div>--}}
{{--                    <div class="col-8 p-0">--}}
{{--                        @php--}}
{{--                            $nameArray = explode(" ", $oneEmployee->name);--}}
{{--                            if($oneEmployee->game_number < 10){--}}
{{--                                $oneEmployee->game_number = '0'.$oneEmployee->game_number;--}}
{{--                            }--}}
{{--                        @endphp--}}
{{--                        <h6 class="card-title text-center m-0">{{$nameArray[0]}}</h6>--}}
{{--                        <h6 class="card-title text-center m-0">{{$nameArray[1]}}</h6>--}}
{{--                        <h6 class="card-title text-center m-0">{{$nameArray[2]}}</h6>--}}
{{--                    </div>--}}
{{--                    <div class="col-2 p-0">--}}
{{--                    </div>--}}
{{--                    <h6 class="number-in-team position-absolute rounded-circle p-1 bg-custom-yellow text-dark card-title text-center m-0">{{$oneEmployee->game_number}}</h6>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--        </div>--}}
{{--    </a>--}}
{{--</div>--}}

@php
    $nameArray = explode(" ", $oneEmployee->name);
    if($oneEmployee->game_number < 10){
        $oneEmployee->game_number = '0'.$oneEmployee->game_number;
    }
@endphp

<div class="card position-relative m-1 property-card-main">
    <div class="property-card card-body p-0">
        <a class="text-decoration-none" href="{{route('employees')}}/{{$oneEmployee->id}}">
            <div class="property-image"
                 style="background-image: url('/storage/images/employees/{{$oneEmployee->image}}');">
                <div class="property-image-title">

                    <!-- Optional <h5>Card Title</h5> If you want it, turn on the CSS also. -->
                </div>
            </div>
        </a>
        <div class="property-description">

            <h6 class="card-title text-center m-0">{{$nameArray[0]}}</h6>
            <h6 class="card-title text-center m-0">{{$nameArray[1]}}</h6>
            <h6 class="card-title text-center m-0">{{$nameArray[2]}}</h6>

        </div>
        <a href="#">
            <div class="property-social-icons">
                <img class="logo-position-team img-fluid" src="/image/logo-color.png" alt="main-logo">
                <!-- I would usually put multipe divs inside here set to flex. Some people might use Ul li. Multiple Solutions -->
            </div>
        </a>
    </div>
</div>
