@extends('app.layouts.app')
@section('content')
    <div class="container">
        <h3 class="row bg-custom-blue justify-content-center text-white shadow">@lang('titles.news')</h3>
        <div class="row shadow">
            <div class="container p-0">
                @isset($news)
                    @foreach ($news as $oneNews)
                        @include('app.blocks.news.oneNewsMain',$oneNews)
                        @if ($loop->last !== true)
                            <hr class="row mb-1 mt-1 mr-0 ml-0">
                        @endif
                    @endforeach
                @endisset
            </div>
        </div>
        <div class="d-flex justify-content-center">{{ $news->links() }}</div>
    </div>

@endsection
