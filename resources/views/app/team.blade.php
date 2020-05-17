@extends('app.layouts.app')

@section('content')
    <h1 class="container text-center bg-custom-blue text-white">КОММАНДА</h1>

    @php($chunkItems = 5)

    @forelse ($team->chunk($chunkItems) as $chunk)
        <div class="card-deck pt-3">
            @foreach($chunk as $oneEmployee)
                @include('app.blocks.team.oneEmployee',$oneEmployee)
            @endforeach
            @if($chunk->count()<$chunkItems)
                @for($i = $chunk->count()+1;$i <=$chunkItems;$i++)
                    <div class="card border-0">
                        <div class="card-body p-1">
                        </div>
                    </div>
                @endfor
            @endif
        </div>
    @empty

    @endforelse

@endsection
