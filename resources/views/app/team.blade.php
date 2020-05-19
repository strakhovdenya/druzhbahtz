@extends('app.layouts.app')

@section('content')
    <h1 class="container text-center bg-custom-blue text-white">КОММАНДА</h1>

    @php($chunkItems = 5)

    @forelse ($team as $group)
        <h2 class="container text-center bg-custom-red text-white mt-3 mb-1">- - - - {{$group->first()->position}} - - - -</h2>
        <div class="container">
            @forelse ($group->chunk($chunkItems) as $chunk)
                <div class="card-deck pt-1">
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
        </div>
    @empty

    @endforelse

@endsection
