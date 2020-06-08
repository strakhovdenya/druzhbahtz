@extends('app.layouts.app')

@section('content')
    <h1 class="container text-center bg-custom-blue text-white">@lang('titles.events')</h1>

    <div class="container">

        <div class="row">
            @livewire('events.event')
        </div>
    </div>

@endsection

