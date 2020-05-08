@extends('app.layouts.app')

@section('content')
    <h1 class="container text-center bg-primary text-white">Галерея</h1>
    @include('app.blocks.gallery.galleryCardRow')
    @include('app.blocks.gallery.galleryCardRow')
    @include('app.blocks.gallery.galleryCardRow')
    @include('app.blocks.gallery.galleryCardRow')
    @include('app.blocks.gallery.galleryCardRow')
@endsection

