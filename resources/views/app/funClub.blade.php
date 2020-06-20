@extends('app.layouts.app')

@section('content')
    <h1 class="container text-center bg-custom-blue text-white shadow">@lang('titles.fan_club')</h1>
    <div class="container">
            @livewire('fun-club')
    </div>
@endsection
