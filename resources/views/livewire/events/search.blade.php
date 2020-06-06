<div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label wire:click="getAll()" class="btn btn-primary {{$all}}">
        <input type="radio" name="options" id="option1" autocomplete="off" checked>@lang('buttons.all')
    </label>
    <label wire:click="getHome()" class="btn btn-primary {{$home}}">
        <input type="radio" name="options" id="option2" autocomplete="off"> @lang('buttons.home')
    </label>
    <label wire:click="getOnRoad()" class="btn btn-primary {{$onRoad}}">
        <input type="radio" name="options" id="option3" autocomplete="off"> @lang('buttons.on_road')
    </label>
</div>

<div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label wire:click="getAllDays()" class="btn btn-primary {{$allDays}}">
        <input type="radio" name="options" id="option4" autocomplete="off">@lang('buttons.all')
    </label>
    <label wire:click="getTodayAndBeyonds()" class="btn btn-primary {{$todayAndBeyond}}">
        <input type="radio" name="options" id="option5" autocomplete="off" checked>  @lang('buttons.today_and_beyond')
    </label>
    <label wire:click="getEarlier()" class="btn btn-primary {{$earlier}}">
        <input type="radio" name="options" id="option6" autocomplete="off"> @lang('buttons.earlier')
    </label>
</div>
