<div class="modal fade" id="modalLong{{$dayNum}}" tabindex="-1" role="dialog" aria-labelledby="modalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-custom" role="document">
        <div class="modal-content">
            <div class="modal-header {{$event[$dayNum]['bg_modal_title']}}">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-2 p-0">
                            @if($oneEvent->type_event === 1)
                                <h5 class="modal-title mr-2">На выезде: </h5>
                            @else
                                <h5 class="modal-title mr-2">Дома: </h5>
                            @endif
                        </div>
                        <div class="col-9 p-0">
                            <h4 class="modal-title" id="modalLongTitle{{$dayNum}}">{{$oneEvent->title}}</h4>
                        </div>
                        <div class="col-1 p-0">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-4 p-0">
                            <img class="logo-position-team img-fluid" src="/storage/images/teams/logo-color.png" alt="main-logo">
                        </div>
                        <div class="col-4 p-0">
                            <img class="logo-position-team img-fluid" src="/storage/images/teams/vs.png" alt="main-logo">
                        </div>
                        <div class="col-4 p-0">
                            <img class="logo-position-team img-fluid" src="/storage/images/teams/{{$oneEvent->image_competitor}}" alt="main-logo">
                        </div>
                    </div>

                    <div class="row align-items-center">
                        {!! $oneEvent->text !!}
                    </div>
                    <div class="row align-items-center">
                        {!! $oneEvent->text !!}
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
