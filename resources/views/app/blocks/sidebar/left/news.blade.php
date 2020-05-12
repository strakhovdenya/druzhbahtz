<div class="container">
    <h3 class="row bg-custom-red justify-content-center text-white">НОВОСТИ</h3>
    @isset($news)
        @foreach ($news as $oneNews)
            @include('app.blocks.news.oneNews',$oneNews)
            @if ($loop->last !== true)
                <hr class="mb-1 mt-1">
            @endif
        @endforeach
    @endisset

</div>


