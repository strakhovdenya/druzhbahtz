<div>
    @include('livewire.events.search')
    @if(empty($events)===false)
        @foreach($events as $event)
            <div class="card border-0 mb-2">
                <div class="row">
                    <div class="col-sm-3 d-flex">
                        <div class="row pl-4 align-items-center">
                            <div class="col-5 p-0">
                                <img class="logo-position-team img-fluid" src="/storage/images/teams/logo-color.png"
                                     alt="main-logo">
                            </div>
                            <div class="col-2 p-0">
                                <img class="logo-position-team img-fluid" src="/storage/images/teams/vs.png"
                                     alt="main-logo">
                            </div>
                            <div class="col-5 p-0">
                                <img class="logo-position-team img-fluid"
                                     src="/storage/images/teams/{{$event->image_competitor}}" alt="main-logo">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="card-block">
                            <div class="card-header pb-1 d-flex justify-content-between">
                                @if($event->type_event === 1)
                                    <h4 class="mb-1"><i class="text-success fas fa-bus-alt fa-1x"></i> {{$event->title}}</h4>
                                @else
                                    <h4 class="mb-1"><i class="text-warning fas fa-home fa-1x"></i> {{$event->title}}</h4>
                                @endif

                                <div class="float-right">{{$event->date_event}}</div>
                            </div>
                            {!! Str::limit($event->text,200) !!}
                            <br>
                            <a href="#" class="mr-2 btn btn-primary btn-sm float-right">@lang('buttons.read_more')</a>
                        </div>
                    </div>

                </div>
            </div>
            @if ($loop->last !== true)
                <hr class="mb-1 mt-1 bg-custom-blue" style="height: 2px">
            @endif
        @endforeach
    @endif
</div>
