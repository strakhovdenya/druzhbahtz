<div class="calendar shadow bg-white p-2">
    @include('app.blocks.calendar.headOfCalendar')

    @include('app.blocks.calendar.weekDayName')

    <ol class="days list-unstyled">
        @foreach($beforePeriod as $day)
            <li class="outside text-center">
                <div class="date">{{$day->day}}</div>
            </li>
        @endforeach
        @for($dayNum = 1; $dayNum<= ($countDays); $dayNum++)
            <li>
                <div
                    data-toggle="modal" data-target="#modalLong{{$dayNum}}"
                    class="date date-cursor text-center {{$event[$dayNum]['event_isset']??''}} {{$event[$dayNum]['current']??''}}"
                >
                    {{$dayNum}}
                </div>
                @if(isset($event[$dayNum]['event_data']))
                    @include('app.blocks.calendar.modalOfCalendar', ['oneEvent'=>$event[$dayNum]['event_data']])
                @endif
            </li>
        @endfor
        @foreach($afterPeriod as $day)
            <li class="outside text-center">
                <div class="date">{{$day->day}}</div>
            </li>
        @endforeach
    </ol>
</div>
