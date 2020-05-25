@extends('app.layouts.app')

@section('content')
    <h1 class="container text-center bg-custom-blue text-white">РОЗКЛАД МОЛОДШI</h1>
    <table class="table-bordered container table-hover">
        @include('app.blocks.schedule.tableHead')
        <tbody>
        @foreach($schedule as $day)
        @ifWeekendSetTrRed($day->day)
            <th scope="row">@formatToDate($day->day), @formatToWeekDay($day->day)</th>
            <td>@formatToHourSMinutes($day->ice_start) - @formatToHourSMinutes($day->ice_end)</td>
            <td>{{$day->ice_place}}</td>
            <td>@formatToHourSMinutes($day->ground_start) - @formatToHourSMinutes($day->ground_end)</td>
            <td>@formatToHourSMinutes($day->collecting_time)  {{$day->collecting_place}}</td>
        </tr>
        @endforeach

        </tbody>
    </table>
@endsection
