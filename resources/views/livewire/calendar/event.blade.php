<div class="calendar shadow bg-white p-2">
    @include('app.blocks.calendar.headOfCalendar')

    @include('app.blocks.calendar.weekDayName')

    <ol class="days list-unstyled">
        @foreach($beforePeriod as $day)
            <li class="outside text-center">
                <div class="date">{{$day->day}}</div>
            </li>
        @endforeach
        @for($i = 1; $i<= ($countDays); $i++)
            <li>
                <div wire:click="addEvent({{$i}})"
                     class="date date-cursor text-center {{$event[$i]['event']??''}} {{$event[$i]['current']??''}}">{{$i}}</div>
            </li>
        @endfor
        @foreach($afterPeriod as $day)
            <li class="outside text-center">
                <div class="date">{{$day->day}}</div>
            </li>
        @endforeach

        {{--        <li>--}}
        {{--            <div wire:click="addEvent(2)" class="date {{$event[2]??''}}">2</div>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <div class="date">3</div>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <div class="date">4</div>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <div class="date">5</div>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <div class="date">6</div>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <div class="date">7</div>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <div class="date">8</div>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <div class="date">9</div>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <div class="date">10</div>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <div class="date">11</div>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <div class="date">12</div>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <div class="date">13</div>--}}
        {{--                    <div class="event all-day begin span-2 bg-warning">Event Name</div>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <div class="date">14</div>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <div class="date">15</div>--}}
        {{--            --}}{{--                    <div class="event all-day end bg-success">Event Name</div>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <div class="date">16</div>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <div class="date">17</div>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <div class="date">18</div>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <div class="date">19</div>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <div class="date">20</div>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <div class="date">21</div>--}}
        {{--            --}}{{--                    <div class="event bg-primary">Event Name</div>--}}
        {{--            --}}{{--                    <div class="event bg-success">Event Name</div>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <div class="date">22</div>--}}
        {{--            --}}{{--                    <div class="event bg-info">Event with Longer Name</div>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <div class="date">23</div>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <div class="date">24</div>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <div class="date">25</div>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <div class="date">26</div>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <div class="date">27</div>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <div class="date">28</div>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <div class="date">29</div>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <div class="date">30</div>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <div class="date">31</div>--}}
        {{--        </li>--}}
        {{--        <li class="outside">--}}
        {{--            <div class="date">1</div>--}}
        {{--        </li>--}}
        {{--        <li class="outside">--}}
        {{--            <div class="date">2</div>--}}
        {{--        </li>--}}
        {{--        <li class="outside">--}}
        {{--            <div class="date">3</div>--}}
        {{--        </li>--}}
        {{--        <li class="outside">--}}
        {{--            <div class="date">4</div>--}}
        {{--        </li>--}}
        {{--        <li class="outside">--}}
        {{--            <div class="date">5</div>--}}
        {{--        </li>--}}
        {{--        <li class="outside">--}}
        {{--            <div class="date">6</div>--}}
        {{--        </li>--}}
        {{--        <li class="outside">--}}
        {{--            <div class="date">7</div>--}}
        {{--        </li>--}}
    </ol>
</div>
