@extends('app.layouts.app')

@section('content')
    <h1 class="container text-center bg-custom_blue text-white">КОММАНДА</h1>
    <table class="table">
        <thead>
        <tr>
            <th class="text-center" colspan="2">ГРАВЕЦЬ</th>
            <th class="text-center">НОМЕР</th>
            <th class="text-center">ПОЗИЦІЯ НА ПОЛІ</th>
            <th class="text-center">ХВАТ КЛЮЧКИ</th>
            <th class="text-center">ВАГА</th>
            <th class="text-center">ЗРІСТ</th>
            <th class="text-center">ДАТА НАРОДЖЕННЯ</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <img data-toggle="modal" data-target="#exampleModalCenter1"
                     class="onePlayerImg img-fluid img-thumbnail"
                     src="/image/empty_foto-min.jpg" alt="!">
                @include('app.blocks.modal',
                    ['id'=>'1', 'name'=>'Коцура Руслан', 'src'=>"/image/empty_foto-min.jpg"])
            </td>
            <td><a href="{{route('employees')}}/1">Коцура Руслан</a></td>
            <td>1</td>
            <td>воротар</td>
            <td>лівий</td>
            <td>53 кг</td>
            <td>159 см</td>
            <td>28.11.2006</td>
        </tr>
        <tr>
            <td>
                <img data-toggle="modal" data-target="#exampleModalCenter2"
                     class="onePlayerImg img-fluid img-thumbnail"
                     src="/image/empty_foto-min.jpg" alt="!">
                @include('app.blocks.modal',['id'=>'2', 'src'=>"/image/empty_foto-min.jpg", 'name'=>'Москаленко Арсен', 'options'=>'!!!'])
            </td>
            <td><a href="{{route('employees')}}/9">Москаленко Арсен</a></td>
            <td>9</td>
            <td>захисник</td>
            <td>лівий</td>
            <td>43 кг</td>
            <td>156 см</td>
            <td>07.04.2006</td>
        </tr>
        <tr>
            <td>
                <img data-toggle="modal" data-target="#exampleModalCenter3"
                     class="onePlayerImg img-fluid img-thumbnail"
                     src="/image/empty_foto-min.jpg" alt="!">
                @include('app.blocks.modal',['id'=>'3', 'src'=>"/image/empty_foto-min.jpg", 'name'=>'Пелипенко Нікіта'])
            </td>
            <td><a href="{{route('employees')}}/51">Пелипенко Нікіта</a></td>
            <td>51</td>
            <td>захисник</td>
            <td>лівий</td>
            <td>55 кг</td>
            <td>165 см</td>
            <td>22.09.2006</td>
        </tr>
        </tbody>
    </table>
@endsection
