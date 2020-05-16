@extends('app.layouts.app')

@section('content')
    <h1 class="container text-center bg-custom-blue text-white">КОММАНДА</h1>

    @forelse ($team->chunk(4) as $chunk)
        <div class="card-deck pt-3">
        @foreach($chunk as $oneEmployee)
            @include('app.blocks.team.oneEmployee2',$oneEmployee)
        @endforeach
        </div>
    @empty

    @endforelse

@endsection
