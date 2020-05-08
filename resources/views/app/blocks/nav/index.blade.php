<div class="row ">

    <nav class="container-fluid position-relative navbar navbar-expand-lg navbar-dark bg-nav mt-5 mb-5">
    <img class="position-absolute" src="/image/logo-color.png" alt="main-logo" width="100px">

        <!-- Brand -->
{{--        <div class="navbar-brand">Дружба ХТЗ</div>--}}
        <div class="container justify-content-center">

            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">@lang('navigation.about')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('setTo')}}">@lang('navigation.set_to')</a>
                </li>

                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        @lang('navigation.training')
                    </a>
                    <div class="dropdown-menu bg-dropdown-red nav-shadow">
                        <a class="dropdown-item-nav text-white" href="{{route('scheduleJunior')}}">@lang('navigation.schedule.junior_schedule')</a>
                        <a class="dropdown-item-nav text-white" href="{{route('scheduleSenior')}}">@lang('navigation.schedule.schedule_senior')</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item-nav text-white" href="{{route('trainingPlaces')}}">@lang('navigation.training_places')</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('team')}}">@lang('navigation.team')</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop1" data-toggle="dropdown">
                        @lang('navigation.competition')
                    </a>
                    <div class="dropdown-menu bg-dropdown-red nav-shadow">
                        <a class="dropdown-item-nav text-white" href="{{route('clubCup')}}">@lang('navigation.competition_type.club_cup')</a>
                        <a class="dropdown-item-nav text-white" href="{{route('tournaments')}}">@lang('navigation.competition_type.tournaments')</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('gallery')}}">@lang('navigation.gallery')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">@lang('navigation.events')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">@lang('navigation.contacts')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">@lang('navigation.fan_club')</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
