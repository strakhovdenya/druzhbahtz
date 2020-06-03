@extends('app.layouts.app')

@section('content')
    <h1 class="container text-center bg-custom-blue text-white">
        @if($isJunior)
            @lang('navigation.is_junior')
        @else
            @lang('navigation.is_senior')
        @endif
    </h1>
    <table class="table-bordered container table-hover">
        @include('app.blocks.schedule.tableHead')
        <tbody>
        @foreach($schedule as $day)
            @ifWeekendSetTrRed($day->day)
            <th class="pl-2" scope="row">@ifToDay($day->day)  @formatToDate($day->day), @formatToWeekDay($day->day)</th>
            <td class="text-center">@formatToHourSMinutes($day->ice_start) - @formatToHourSMinutes($day->ice_end)</td>
            <td class="pl-2">{{$day->ice_place}}</td>
            <td class="text-center">@formatToHourSMinutes($day->ground_start) - @formatToHourSMinutes($day->ground_end)</td>
            <td class="pl-2">@formatToHourSMinutes($day->collecting_time)  {{$day->collecting_place}}</td>
        </tr>
        @endforeach

        </tbody>
    </table>
@endsection
