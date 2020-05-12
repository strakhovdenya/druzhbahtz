@extends('app.layouts.app')

@section('content')
    <h1 class="container text-center bg-custom_blue text-white">{{$oneEmployee->name ??'Имя не передано'}}</h1>
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
               aria-controls="nav-home" aria-selected="true">Игрок</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
               aria-controls="nav-profile" aria-selected="false">Oсобисті дані</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="container container-fluid mt-1 pr-0 pl-0">
                <table class="table-striped">
                    <tbody>
                    <tr>
                        <th class="tg-031e" rowspan="10">
                            <a class="gallery" rel="group" title="10.07.2012"
                               href="/storage/images/{{$oneEmployee->image ?? 'empty_foto-min.jpg'}}">
                                <img width="350px" alt="no foto"
                                     class="img-fluid img-thumbnail"
                                     src="/storage/images/{{$oneEmployee->image?? 'empty_foto-min.jpg'}}"></a>
                        </th>
                        <th class="tg-031e">Дата рождения:<strong>{{$oneEmployee->born?? '2000-01-01'}}</strong></th>
                    </tr>
                    <tr>
                        <td class="tg-031e">Место рождения:<strong>{{$oneEmployee->place_born??'Харьков'}}</strong></td>
                    </tr>
                    <tr>
                        <td class="tg-031e">Место учебы:<strong>{{$oneEmployee->place_study??'Харьков'}}</strong></td>
                    </tr>
                    <tr>
                        <td class="tg-031e">Дата начала тренировок:<strong>{{$oneEmployee->start_training?? '2000-01-01'}}</strong>
                        </td>
                    </tr>
                    <tr>
                        <td class="tg-031e">Позиция на поле:<strong>{{$oneEmployee->position?? 'Защитник'}}</strong></td>
                    </tr>
                    <tr>
                        <td class="tg-031e">Номер в команде:<strong>{{$oneEmployee->number??'10'}}</strong></td>
                    </tr>
                    <tr>
                        <td class="tg-031e">Хват клюшки: <strong>{{$oneEmployee->hand??'Левый'}}</strong></td>
                    </tr>
                    <tr>
                        <td class="tg-031e">Рост:<strong>{{$oneEmployee->height??'120'}}</strong></td>
                    </tr>
                    <tr>
                        <td class="tg-031e">Вес:<strong>{{$oneEmployee->weight??'30'}}</strong></td>
                    </tr>
                    <tr>
                        <td class="tg-031e">Любимая команда:<strong>{{$oneEmployee->fav_team??'омманда №1'}}</strong></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="container container-fluid mt-1 pr-0 pl-0">
                {!! $oneEmployee->additional_info??'<h3>нет инфо</h3>' !!}

            </div>
        </div>
    </div>





@endsection
