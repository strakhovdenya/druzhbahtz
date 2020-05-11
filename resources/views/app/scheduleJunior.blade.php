@extends('app.layouts.app')

@section('content')
    <h1 class="container text-center bg-custom_blue text-white">РОЗКЛАД МОЛОДШI</h1>
    <table class="table-bordered container table-hover">
        @include('app.blocks.schedule.tableHead')
        <tbody>
        <tr>
            <td align="center"><font style="background-color: #ffcc99;" color="#FF0000">01.03.2020</font></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
        </tr>
        <tr>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">02.03.2020</font></td>
            <td align="center">22.00 - 23.00</td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">Палац спорту</font></td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">&nbsp;</font></td>
            <td align="center">21.00 Палац Спорту</td>
        </tr>
        <tr>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">03.03.2020</font></td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">&nbsp;</font></td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">&nbsp;</font></td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">17.00 - 18.30&nbsp;&nbsp;</font>
            </td>
            <td align="center">16.45 Манеж</td>
        </tr>
        <tr>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">04.03.2020</font></td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">&nbsp;21.30 - 22.30</font></td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">&nbsp;</font></td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">&nbsp;&nbsp;</font></td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">20.30 Палац
                    Спорту&nbsp;<br></font></td>
        </tr>
        <tr>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">05.03.2020</font></td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">&nbsp; 21.30 -
                    22.30&nbsp;</font></td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">Палац Спорту&nbsp;</font></td>
            <td align="center">&nbsp;</td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">20.30 Палац Спорту</font></td>
        </tr>
        <tr>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">06.03.2020</font></td>
            <td align="center">21.00 - 22.00</td>
            <td align="center">Палац Спорту</td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">&nbsp;</font></td>
            <td align="center">20.00&nbsp;Палац Спорту</td>
        </tr>
        <tr>
            <td align="center"><font style="background-color: #ffcc99;" color="#FF0000">07.03.2020</font></td>
            <td align="center"><font style="background-color: #ffcc99;" color="#FF0000">&nbsp;20.30 - 21.30&nbsp;</font>
            </td>
            <td align="center"><font style="background-color: #ffcc99;" color="#FF0000">&nbsp;Палац Спорту</font></td>
            <td align="center">&nbsp;</td>
            <td align="center"><font style="background-color: #ffcc99;" color="#FF0000">&nbsp;20.00 Палац Спорту</font>
            </td>
        </tr>
        <tr>
            <td align="center"><font style="background-color: #ffcc99;" color="#FF0000">08.03.2020</font></td>
            <td align="center"><font style="background-color: #ffcc99;" color="#FF0000">06.15 - 07.45</font></td>
            <td align="center"><font style="background-color: #ffcc99;" color="#FF0000">Салт. Лід</font></td>
            <td align="center">&nbsp;</td>
            <td align="center"><font style="background-color: #ffcc99;" color="#FF0000">06.00 Салт. Лід</font></td>
        </tr>
        <tr>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">09.03.2020</font></td>
            <td align="center">22.00 - 23.00</td>
            <td align="center">Палац Спорту</td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">&nbsp;</font></td>
            <td align="center">21.00 Палац Спорту</td>
        </tr>
        <tr>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">10.03.2020</font></td>
            <td align="center"><font color="#000000">&nbsp;</font></td>
            <td align="center">&nbsp;</td>
            <td align="center"><font color="#000000">17.00 - 18.30</font></td>
            <td align="center"><font color="#000000">16.45 Манеж&nbsp;</font></td>
        </tr>
        <tr>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">11.03.2020</font></td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">&nbsp;</font></td>
            <td align="center"><font color="#000000">&nbsp;</font></td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">17.00 - 18.30&nbsp;</font></td>
            <td align="center"><font color="#000000">16.45 Манеж&nbsp;</font></td>
        </tr>
        <tr>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">12.03.2020</font></td>
            <td align="center"><font color="#000000">&nbsp;21.30 - 22.30</font></td>
            <td align="center"><font color="#000000">&nbsp;Палац Спорту</font></td>
            <td align="center">&nbsp;</td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">20.30 Палац Спорту</font></td>
        </tr>
        <tr>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">13.03.2020</font></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">12.00 - 14.30&nbsp;</font></td>
            <td align="center">11.45 Манеж</td>
        </tr>
        <tr>
            <td align="center"><font style="background-color: #ffcc99;" color="#FF0000">14.03.2020</font></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">12.00 - 14.30</td>
            <td align="center"><font style="background-color: #ffcc99;" color="#FF0000">&nbsp;11.45 Манеж</font></td>
        </tr>
        <tr>
            <td align="center"><font style="background-color: #ffcc99;" color="#FF0000">15.03.2020</font></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">08.15 - 09.45&nbsp;</td>
            <td align="center"><font style="background-color: #ffcc99;" color="#FF0000">08.00 Манеж<br></font></td>
        </tr>
        <tr>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">16.03.2020</font></td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">&nbsp;&nbsp;</font></td>
            <td align="center">&nbsp;</td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">10.00 - 12.30&nbsp;</font></td>
            <td align="center">09.45&nbsp;24 школа</td>
        </tr>
        <tr>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">17.03.2020</font></td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">&nbsp;</font></td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">&nbsp;</font></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
        </tr>
        <tr>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">18.03.2020</font></td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">&nbsp;</font></td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">Карантин&nbsp;</font></td>
            <td align="center">12.00</td>
            <td align="center">Дома</td>
        </tr>
        <tr>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">19.03.2020</font></td>
            <td align="center">&nbsp;</td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">Карантин&nbsp;</font></td>
            <td align="center">12.00</td>
            <td align="center">Дома</td>
        </tr>
        <tr>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">20.03.2020</font></td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">&nbsp;</font></td>
            <td align="center">&nbsp;Карантин</td>
            <td align="center">12.00</td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">&nbsp;Дома</font></td>
        </tr>
        <tr>
            <td align="center"><font style="background-color: #ffcc99;" color="#FF0000">21.03.2020</font></td>
            <td align="center">&nbsp;</td>
            <td align="center">Карантин&nbsp;</td>
            <td align="center">&nbsp;12.00</td>
            <td align="center">Дома&nbsp;</td>
        </tr>
        <tr>
            <td align="center"><font style="background-color: #ffcc99;" color="#FF0000">22.03.2020</font></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;Карантин</td>
            <td align="center">&nbsp;12.00</td>
            <td align="center">&nbsp;Дома</td>
        </tr>
        <tr>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">23.03.2020</font></td>
            <td align="center">&nbsp;</td>
            <td align="center">Карантин&nbsp;</td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">&nbsp;12.00&nbsp;</font></td>
            <td align="center">Дома</td>
        </tr>
        <tr>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">24.03.2020</font></td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">&nbsp;&nbsp;</font></td>
            <td align="center">Карантин&nbsp;</td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">&nbsp;12.00&nbsp;</font></td>
            <td align="center">Дома</td>
        </tr>
        <tr>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">&nbsp;25.03.2020&nbsp;</font>
            </td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">&nbsp;</font></td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">Карантин&nbsp;</font></td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">12.00&nbsp;&nbsp;</font></td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">&nbsp;Дома</font></td>
        </tr>
        <tr>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">26.03.2020</font></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;Карантин</td>
            <td align="center">12.00</td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">&nbsp; &nbsp;Дома</font></td>
        </tr>
        <tr>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">27.03.2020</font></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;Карантин</td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">12.00&nbsp;</font></td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">&nbsp;Дома</font></td>
        </tr>
        <tr>
            <td align="center"><font style="background-color: #ffcc99;" color="#FF0000">28.03.2020</font></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;Карантин</td>
            <td align="center">&nbsp;12.00</td>
            <td align="center">Дома</td>
        </tr>
        <tr>
            <td align="center"><font style="background-color: #ffcc99;" color="#FF0000">29.03.2020</font></td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;Карантин</td>
            <td align="center">&nbsp;12.00</td>
            <td align="center">Дома&nbsp;</td>
        </tr>
        <tr>
            <td align="center">30.03.2020</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;Карантин</td>
            <td align="center">&nbsp;12.00</td>
            <td align="center">Дома</td>
        </tr>
        <tr>
            <td align="center">&nbsp;31.03.2020&nbsp;</td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">&nbsp;</font></td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">&nbsp;Карантин</font></td>
            <td align="center"><font style="background-color: #ffffff;" color="#000000">&nbsp;12.00&nbsp;</font></td>
            <td align="center">&nbsp;Дома</td>
        </tr>
        </tbody>
    </table>
@endsection
