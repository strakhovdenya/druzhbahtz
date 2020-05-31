<div class="modal fade" id="modalLong{{$dayNum}}" tabindex="-1" role="dialog" aria-labelledby="modalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-custom" role="document">
        <div class="modal-content">
            <div class="modal-header {{$event[$dayNum]['event_isset']}}">
                <h4 class="modal-title" id="modalLongTitle{{$dayNum}}">{{$oneEvent->title}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! $oneEvent->text !!}
{{--                <img--}}
{{--                     class="img-fluid img-thumbnail"--}}
{{--                     src="/image/empty_foto-min.jpg">--}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
