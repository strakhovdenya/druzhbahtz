@extends('app.layouts.app')

@section('content')
    <h1 class="container text-center bg-custom-blue text-white shadow">@lang('titles.training_places')</h1>
    <div class="content-maps" align="center">
        <h2 id="base_width">@lang('titles.addresses.htz')</h2>
        <iframe id="stadium_htz" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2566.951697324302!2d36.348236615713475!3d49.956008579410216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41270bba0e2c3ec1%3A0xafb628825b35ad2a!2z0JzQvtGB0LrQvtCy0YHQutC40Lkg0L_RgNC-0YHQvy4sIDI0NC8xLCDQpdCw0YDRjNC60L7Qsiwg0KXQsNGA0YzQutC-0LLRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgNjEwMDA!5e0!3m2!1sru!2sua!4v1553360700298" frameborder="0" style="border: 0px; width: 734px; height: 450px;" allowfullscreen="">
        </iframe>
        <h2>@lang('titles.addresses.palace_of_sports')</h2>
        <iframe id="palace_sport" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2566.723432239509!2d36.314517815245495!3d49.960290330442916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41270a50ff52ab5d%3A0xd4e47a19cb335772!2z0L_RgNC-0YHQv9C10LrRgiDQn9C10YLRgNCwINCT0YDQuNCz0L7RgNC10L3QutC-LCAyLCDQpdCw0YDRjNC60L7Qsiwg0KXQsNGA0YzQutC-0LLRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgNjEwMDA!5e0!3m2!1sru!2sua!4v1553360813060" frameborder="0" style="border: 0px; width: 734px; height: 450px;" allowfullscreen="">
        </iframe>
        <h2>@lang('titles.addresses.saltiv_ice')</h2>
        <iframe id="saltov_ice" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2565.1507104970697!2d36.3371569152466!3d49.989783828331994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41270a20629ad3f7%3A0x351e9c27561e3dc2!2sSaltovs%CA%B9kyy+Lid!5e0!3m2!1sru!2sua!4v1553631148047" frameborder="0" style="border: 0px; width: 734px; height: 450px;" allowfullscreen="">

        </iframe>
    </div>
@endsection
