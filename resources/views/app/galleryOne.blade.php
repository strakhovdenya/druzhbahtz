@extends('app.layouts.app')

@section('content')
    <h1 class="container text-center bg-custom-blue text-white shadow">{{$galleryHead->name}}</h1>
    <div class="container">
        <div class="row pb-5 mb-4">
            @foreach($galleryHead->galleryItems as $photo)
                <div class="col-lg-4 col-md-6 mb-4 mx-auto">
                    <div class="card profilebox">
                            <img class="card-img"
                                 src="/storage/images/galleries/{{$photo->folder}}/thumb/{{$photo->image}}"
                                 alt="Card image cap">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

