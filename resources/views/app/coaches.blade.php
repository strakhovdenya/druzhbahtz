@extends('app.layouts.app')

@section('content')
    <h1 class="container text-center bg-custom-blue text-white shadow">@lang('titles.coaches')</h1>

    <div class="container">
        @foreach($coaches as $coach)
            <div class="row">
                <div class="col-md-6 mt-4 mx-auto">
                    <div class="card profile-card-5">
                        <div class="card-img-block">
                            <img class="card-img-top" src="/storage/images/coaches/{{$coach->image}}"
                                 alt="Card image cap">
                        </div>
                        <div class="card-body pt-0">
                            <h4 class="card-title text-center">{{$coach->first_name}} {{$coach->second_name}} {{$coach->middle_name}}</h4>
                            <h5 class="card-text text-center">{{$coach->type_coach}}</h5>
                            <p class="card-text text-center">{{$coach->phone}}</p>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
