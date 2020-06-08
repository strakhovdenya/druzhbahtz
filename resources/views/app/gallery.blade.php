@extends('app.layouts.app')

@section('content')
    <h1 class="container text-center bg-custom-blue text-white shadow">@lang('titles.gallery')</h1>
    @include('app.blocks.gallery.galleryCardRow')
    @include('app.blocks.gallery.galleryCardRow')
    @include('app.blocks.gallery.galleryCardRow')
    @include('app.blocks.gallery.galleryCardRow')
    @include('app.blocks.gallery.galleryCardRow')
@endsection

