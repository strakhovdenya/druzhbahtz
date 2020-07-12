
@php
    $nameArray = explode(" ", $oneEmployee->name);
    if($oneEmployee->game_number < 10){
        $oneEmployee->game_number = '0'.$oneEmployee->game_number;
    }
@endphp

<div class="card position-relative m-1 property-card-main">
    <div class="property-card card-body p-0">
        <a class="text-decoration-none" href="{{route('employees',['id'=>$oneEmployee->id])}}">
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
