<div class="modal fade" id="exampleModalLong{{$dayNum}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-custom-blue">
                <h5 class="modal-title" id="exampleModalLongTitle{{$dayNum}}">{{$oneEvent->title}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{$oneEvent->text}}
                <img data-toggle="modal" data-target="#exampleModalCenter{{$dayNum}}"
                     class="img-fluid img-thumbnail"
                     src="/image/empty_foto-min.jpg">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
