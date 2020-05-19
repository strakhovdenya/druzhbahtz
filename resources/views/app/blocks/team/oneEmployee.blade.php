<div class="card position-relative">
    <a class="text-decoration-none" href="{{route('employees')}}/{{$oneEmployee->id}}">
        <img class="img-fluid card-img-top" src="/storage/images/employees/{{$oneEmployee->image}}" alt="Card image cap">
        <div class="card-body p-1">
            <div class="container p-0">
                <div class="row m-0 position-relative">
                    <div class="col-2 p-0">
                        <img class="logo-position-team img-fluid" src="/image/logo-color.png" alt="main-logo">
                    </div>
                    <div class="col-8 p-0">
                        @php
                            $nameArray = explode(" ", $oneEmployee->name);
                            if($oneEmployee->game_number < 10){
                                $oneEmployee->game_number = '0'.$oneEmployee->game_number;
                            }
                        @endphp
                        <h6 class="card-title text-center m-0">{{$nameArray[0]}}</h6>
                        <h6 class="card-title text-center m-0">{{$nameArray[1]}}</h6>
                        <h6 class="card-title text-center m-0">{{$nameArray[2]}}</h6>
                    </div>
                    <div class="col-2 p-0">
                    </div>
                    <h6 class="number-in-team position-absolute rounded-circle p-1 bg-custom-yellow text-dark card-title text-center m-0">{{$oneEmployee->game_number}}</h6>
                </div>
            </div>


        </div>
    </a>
</div>
