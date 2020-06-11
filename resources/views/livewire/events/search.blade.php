<div class="d-flex justify-content-around mb-3">
    <div class="btn-group btn-group-toggle shadow" data-toggle="buttons">
        <label wire:click="getAll()" class="btn btn-primary {{$all}}">
            <input type="radio" name="options" id="option1" autocomplete="off" checked>@lang('buttons.all')
        </label>
        <label wire:click="getHome()" class="btn btn-primary {{$home}}">
            <input type="radio" name="options" id="option2" autocomplete="off"><i
                class="text-warning fas fa-home fa-1x"></i> @lang('buttons.home')
        </label>
        <label wire:click="getOnRoad()" class="btn btn-primary {{$onRoad}}">
            <input type="radio" name="options" id="option3" autocomplete="off"><i
                class="text-success fas fa-bus-alt"></i> @lang('buttons.on_road')
        </label>
    </div>

    <div class="btn-group btn-group-toggle shadow" data-toggle="buttons">
        <label wire:click="getAllDays()" class="btn btn-primary {{$allDays}}">
            <input type="radio" name="options" id="option4" autocomplete="off">@lang('buttons.all')
        </label>
        <label wire:click="getTodayAndBeyonds()" class="btn btn-primary {{$todayAndBeyond}}">
            <input type="radio" name="options" id="option5" autocomplete="off"
                   checked> @lang('buttons.today_and_beyond')
        </label>
        <label wire:click="getEarlier()" class="btn btn-primary {{$earlier}}">
            <input type="radio" name="options" id="option6" autocomplete="off"> @lang('buttons.earlier')
        </label>
    </div>

    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                {{$currentCompetitor}}
            </button>
            <div class="dropdown-menu mt-2 shadow" aria-labelledby="btnGroupDrop1" style="width: 200px;">
                <div wire:click="getCompetitor(0)" class="container p-0">
                    <div class="row m-0 ">
                        <h4 class="col-12 pl-1 pr-1 d-flex justify-content-center align-items-center">Усi</h4>
                    </div>
                </div>
                @foreach($competitors as $competitor)

                    <div wire:click="getCompetitor({{$competitor->id}})" class="container p-0">
                        <div class="row m-0 ">
                            <img class="col-4 pl-3 pr-3 img-fluid " src="/storage/images/teams/{{$competitor->image}}"
                                 alt="">
                            <div
                                class="col-8 pl-1 pr-1 d-flex justify-content-start align-items-center">{{$competitor->name}}</div>
                        </div>
                    </div>


                @endforeach
            </div>
        </div>
    </div>

    <div class="btn-group btn-group-toggle shadow" data-toggle="buttons">
        <label wire:click="getFromUpToDown()" class="btn btn-primary {{$fromUpToDown}}"><i
                class="fas fa-long-arrow-alt-down"></i>
            <input type="radio" name="options" id="option7" autocomplete="off" checked>
        </label>
        <label wire:click="getFromDownToUp()" class="btn btn-primary {{$fromDownToUp}}">
            <input type="radio" name="options" id="option8" autocomplete="off"><i class="fas fa-long-arrow-alt-up"></i>
        </label>
    </div>
</div>
