@extends('app.layouts.app')

@section('content')
    <h1 class="container text-center bg-custom_blue text-white">{{$name??'Имя не передано'}}</h1>
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
                            <a class="gallery" rel="group" title="10.07.2012" href="/image/empty_foto-min.jpg">
                                <img width="350px" alt="no foto"
                                     class="img-fluid img-thumbnail"
                                     src="/image/empty_foto-min.jpg"></a>
                        </th>
                        <th class="tg-031e">Дата рождения:<strong>10.07.2012</strong></th>
                    </tr>
                    <tr>
                        <td class="tg-031e">Место рождения:<strong>м. Харків</strong></td>
                    </tr>
                    <tr>
                        <td class="tg-031e">Место учебы:<strong>школа радості Олени Чернявської</strong></td>
                    </tr>
                    <tr>
                        <td class="tg-031e">Дата начала тренировок:<strong></strong></td>
                    </tr>
                    <tr>
                        <td class="tg-031e">Позиция на поле:<strong>захисник</strong></td>
                    </tr>
                    <tr>
                        <td class="tg-031e">Номер в команде:<strong> {{$id}}</strong></td>
                    </tr>
                    <tr>
                        <td class="tg-031e">Хват клюшки: <strong>лівий</strong></td>
                    </tr>
                    <tr>
                        <td class="tg-031e">Рост:<strong>124</strong></td>
                    </tr>
                    <tr>
                        <td class="tg-031e">Вес:<strong>23</strong></td>
                    </tr>
                    <tr>
                        <td class="tg-031e">Любимая команда:<strong></strong></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="container container-fluid mt-1 pr-0 pl-0">
                <table class="table-striped">
                    <tbody>
                    <tr>
                        <td>УЛЮБЛЕНЕ ЗАНЯТТЯ</td>
                        <td>Немає нікого, хто любив би самий біль, хто б шукав його чи хотів би його зазнавати тільки
                            через
                            те, що він - біль...
                        </td>
                    </tr>
                    <tr>
                        <td>УЛЮБЛЕНИЙ МУЛЬТФІЛЬМ</td>
                        <td>Немає нікого, хто любив би самий біль, хто б шукав його чи хотів би його зазнавати тільки
                            через
                            те, що він - біль..."
                        </td>
                    </tr>
                    <tr>
                        <td>УЛЮБЛЕНА КНИГА</td>
                        <td>Немає нікого, хто любив би самий біль, хто б шукав його чи хотів би його зазнавати тільки
                            через
                            те, що він - біль..."
                        </td>
                    </tr>
                    <tr>
                        <td>УЛЮБЛЕНИЙ ФРУКТ</td>
                        <td>Немає нікого, хто любив би самий біль, хто б шукав його чи хотів би його зазнавати тільки
                            через
                            те, що він - біль..."
                        </td>
                    </tr>
                    <tr>
                        <td>УЛЮБЛЕНИЙ КОЛІР</td>
                        <td>Немає нікого, хто любив би самий біль, хто б шукав його чи хотів би його зазнавати тільки
                            через
                            те, що він - біль..."
                        </td>
                    </tr>
                    <tr>
                        <td>ЩО БІЛЬШЕ ЗА ВСЕ ПОДОБАЄТЬСЯ У ХОКЕЇ?</td>
                        <td>Немає нікого, хто любив би самий біль, хто б шукав його чи хотів би його зазнавати тільки
                            через
                            те, що він - біль..."
                        </td>
                    </tr>
                    <tr>
                        <td>КИМ ХОЧЕШ СТАТИ У МАЙБУТНЬОМУ?</td>
                        <td>Немає нікого, хто любив би самий біль, хто б шукав його чи хотів би його зазнавати тільки
                            через
                            те, що він - біль..."
                        </td>
                    </tr>
                    <tr>
                        <td>МРІЯ</td>
                        <td>Немає нікого, хто любив би самий біль, хто б шукав його чи хотів би його зазнавати тільки
                            через
                            те, що він - біль..."
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>





@endsection
