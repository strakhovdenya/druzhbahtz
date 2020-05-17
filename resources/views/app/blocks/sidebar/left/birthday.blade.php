@if(!$bornsToday->isEmpty()|| !$borns->isEmpty())
    <div class="container">
        <h3 class="row bg-custom-red align-items-center">
            <div class="col-1 p-0">
                <img class="img-fluid" src="/image/cake_PNG13125.png" alt="">
            </div>
            <div class="col-10 p-0 text-center text-white">ДЕНЬ РОЖДЕНИЯ</div>
            <div class="col-1 p-0">
                <img class="img-fluid" src="/image/vozdushnyye-shary.png" alt="">
            </div>
        </h3>

        @if(!$bornsToday->isEmpty())
            @foreach ($bornsToday as $oneBornToday)
                <div class="row p-2">
                    <a class="text-decoration-none" href="{{route('employees')}}/{{$oneBornToday->id}}">
                        <div class="container">
                            <div class="row">

                                <div class="col p-1">
                                    <img alt="no foto"
                                         class="img-fluid img-thumbnail"
                                         src="/storage/images/{{$oneBornToday->image?? 'empty_foto-min.jpg'}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-center bg-custom-blue">
                                    <h5 class="mb-0 text-white">{{$oneBornToday->name}}</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        @endif
        @if(!$borns->isEmpty())

            <div class="row p-2">
                <div class="col">
                    <h4 class="text-center">... скоро</h4>
                </div>
            </div>
            @foreach ($borns as $oneBorn)
                <div class="row p-2">
                    <a class="text-decoration-none" href="{{route('employees')}}/{{$oneBorn->id}}">
                        <div class="container">
                            <div class="row">
                                <div class="col-2 pr-1">
                                    <i class="fas fa-hockey-puck"></i>
                                </div>
                                <div class="col-10 pl-1 date"><span
                                        class="border rounded border-custom-blue ">{{$oneBorn->born}}</span></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="mb-0">{{$oneBorn->name}}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        @endif
    </div>
@endif


