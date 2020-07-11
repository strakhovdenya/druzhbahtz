@extends('app.layouts.app')

@section('content')
    <h1 class="container text-center bg-custom-blue text-white shadow">@lang('titles.gallery')</h1>
    <div class="container">
        <div class="row pb-5 mb-4">
            @foreach($galleries as $gallery)
                <div class="col-lg-4 col-md-6 mb-4 mx-auto">
                    <div class="card profilebox">
                        <img class="card-img" src="/image/gallery.jpg" alt="Card image cap">
                        <div class="card-img-overlay d-flex align-items-end justify-content-center profileInfo">
                            <a href="#" class="btn btn-primary">{{$gallery->name}}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

