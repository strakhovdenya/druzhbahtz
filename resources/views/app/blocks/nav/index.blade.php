<div class="row ">

    <nav class="container-fluid position-relative navbar navbar-expand-lg navbar-dark bg-custom-blue mt-5 mb-5 menu">
    <img class="position-absolute" src="/image/logo-color.png" alt="main-logo" width="100px">

        <!-- Brand -->
{{--        <div class="navbar-brand">Дружба ХТЗ</div>--}}
        <div class="container justify-content-center">

            <!-- Links -->
            <ul class="navbar-nav menu__list">
                <li class="nav-item menu__group">
                    <a class="nav-link menu__link" href="{{route('about')}}">@lang('navigation.about')</a>
                </li>
                <li class="nav-item menu__group">
                    <a class="nav-link menu__link" href="{{route('setTo')}}">@lang('navigation.set_to')</a>
                </li>

                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link menu__link_group menu__link" href="#" id="navbardrop" data-toggle="dropdown">
                        @lang('navigation.training')
                    </a>
                    <div class="dropdown-menu bg-custom-red nav-shadow">
                        <a class="dropdown-item-nav text-white " href="{{route('scheduleJunior')}}">@lang('navigation.schedule.junior_schedule')</a>
                        <a class="dropdown-item-nav text-white" href="{{route('scheduleSenior')}}">@lang('navigation.schedule.schedule_senior')</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item-nav text-white" href="{{route('trainingPlaces')}}">@lang('navigation.training_places')</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link menu__link menu__link_group" href="#">@lang('navigation.team')</a>
                    <div class="dropdown-menu bg-custom-red nav-shadow">
                        <a class="dropdown-item-nav text-white" href="{{route('team')}}">@lang('navigation.team_all')</a>
                        <div class="dropdown-divider"></div>
                        @foreach($teams as $team)
                            <a class="dropdown-item-nav text-white" href="{{route('team_one',['id'=>$team->id])}}">{{$team->name}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link menu__link_group menu__link" href="#" id="navbardrop1" data-toggle="dropdown">
                        @lang('navigation.competition')
                    </a>
                    <div class="dropdown-menu bg-custom-red nav-shadow">
                        <a class="dropdown-item-nav text-white" href="{{route('clubCup')}}">@lang('navigation.competition_type.club_cup')</a>
                        <a class="dropdown-item-nav text-white" href="{{route('tournaments')}}">@lang('navigation.competition_type.tournaments')</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu__link" href="{{route('gallery')}}">@lang('navigation.gallery')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu__link" href="#">@lang('navigation.events')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu__link" href="#">@lang('navigation.contacts')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu__link" href="#">@lang('navigation.fan_club')</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
