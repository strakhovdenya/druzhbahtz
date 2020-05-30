<div class="container">
    <div class="row align-items-center">
        <div class="col-2 p-0">
            <i class="far fa-calendar-alt fa-3x"></i>
        </div>
        <div class="col-1 p-0 pointer-cursor">
            <i wire:click="subMonth()" class="fas fa-angle-left fa-3x"></i>
        </div>
        <div class="col-8 p-0 align-middle">
            <h3 class="month text-center font-weight-bold mb-0 text-uppercase">{{$monthYearText}}</h3>
        </div>
        <div class="col-1 p-0 pointer-cursor">
            <i wire:click="addMonth()" class="fas fa-angle-right fa-3x"></i>
        </div>
    </div>
</div>
<p class="font-italic text-muted mb-1">No events for this day.</p>


