<div class="modal fade" id="exampleModalCenter{{$id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle{{$id}}">{{ $name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img data-toggle="modal" data-target="#exampleModalCenter{{$id}}"
                     class="img-fluid img-thumbnail"
                     src="{{$src}}">
            </div>
        </div>
    </div>
</div>
