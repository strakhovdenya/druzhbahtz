@extends('app.layouts.app')

@section('content')
    <h1 class="container text-center bg-custom-blue text-white shadow">{{$galleryHead->name}}</h1>
    <div class="container">
        <div class="row">
            @foreach($galleryHead->galleryItems as $photo)
                <div class="col-lg-3 col-md-6 col-sm-6" data-toggle="modal" data-target="#modal">
                    <a href="#lightbox" data-slide-to="{{$loop->index}}">
                        <img src="/storage/images/galleries/{{$photo->folder}}/thumb/{{$photo->image}}"
                             class="img-thumbnail my-3">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="Lightbox Gallery by Bootstrap 4"
         aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div id="lightbox" class="carousel slide" data-ride="carousel" data-interval="5000"
                         data-keyboard="true">
                        <ol class="carousel-indicators gallery-custom">
                            @foreach($galleryHead->galleryItems as $photo)
                                <li data-target="#lightbox" data-slide-to="{{$loop->index}}"></li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner">
                            @foreach($galleryHead->galleryItems as $photo)
                                <div class="carousel-item
                                @if($loop->index === 0)
                                    active
                                @endIf
                                    ">
                                    <img
                                        src="/storage/images/galleries/{{$photo->folder}}/{{$photo->image}}"
                                        class="w-100 img-fluid"
                                        alt="aaaa">
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev carousel-control-prev-custom" href="#lightbox" role="button" data-slide="prev">
                            <span><i class="fa fa-angle-left fa-3x" aria-hidden="true" style="color:red;"></i></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next carousel-control-next-custom" href="#lightbox" role="button" data-slide="next">
                            <span><i class="fa fa-angle-right fa-3x" aria-hidden="true" style="color:red;"></i></span>
                            <span class="sr-only">Next</span>
                        </a>
{{--                        <a class="carousel-control-prev" href="#lightbox" role="button" data-slide="prev"><span--}}
{{--                                class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>--}}
{{--                        <a class="carousel-control-next" href="#lightbox" role="button" data-slide="next"><span--}}
{{--                                class="carousel-control-next-icon" aria-hidden="true"></span><span--}}
{{--                                class="sr-only">Next</span></a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

