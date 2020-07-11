@extends('app.layouts.app')

@section('content')
    <h1 class="container text-center bg-custom-blue text-white shadow">@lang('titles.gallery')</h1>
    <div class="container">
        <div class="row pb-5 mb-4">
            @foreach($galleries as $gallery)
                <div class="col-lg-4 col-md-6 mb-4 mx-auto">
                    <div class="card profilebox">
                        @if($gallery->galleryItems->count()===1)
                            <img class="card-img"
                                 src="/storage/images/galleries/{{$gallery->galleryItems->first()->folder}}/thumb/{{$gallery->galleryItems->first()->image}}"
                                 alt="Card image cap">
                        @else
                            <img class="card-img" src="/storage/images/employees/empty_foto-min.jpg"
                                 alt="Card image cap">
                        @endif
                        <div class="card-img-overlay d-flex align-items-end justify-content-center profileInfo">
                            <a href="#" class="btn btn-primary">{{$gallery->name}}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

