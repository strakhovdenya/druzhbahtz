<div class="d-flex justify-content-around mb-3">
    <div class="btn-group btn-group-toggle shadow" data-toggle="buttons">
        <label wire:click="getAll()" class="btn btn-primary {{$all}}">
            <input type="radio" name="options" id="option1" autocomplete="off" checked>@lang('buttons.all')
        </label>
        <label wire:click="getHome()" class="btn btn-primary {{$home}}">
            <input type="radio" name="options" id="option2" autocomplete="off"><i class="text-warning fas fa-home fa-1x"></i> @lang('buttons.home')
        </label>
        <label wire:click="getOnRoad()" class="btn btn-primary {{$onRoad}}">
            <input type="radio" name="options" id="option3" autocomplete="off"><i class="text-success fas fa-bus-alt"></i> @lang('buttons.on_road')
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

    <div class="btn-group btn-group-toggle shadow" data-toggle="buttons">
        <label wire:click="getFromUpToDown()" class="btn btn-primary {{$fromUpToDown}}"><i class="fas fa-long-arrow-alt-down"></i>
            <input type="radio" name="options" id="option7" autocomplete="off" checked>
        </label>
        <label wire:click="getFromDownToUp()" class="btn btn-primary {{$fromDownToUp}}">
            <input type="radio" name="options" id="option8" autocomplete="off"><i class="fas fa-long-arrow-alt-up"></i>
        </label>
    </div>
</div>
