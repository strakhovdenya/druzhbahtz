<tr>
    <td>
        <img data-toggle="modal" data-target="#exampleModalCenter{{$oneEmployee->id}}"
             class="onePlayerImg img-fluid img-thumbnail"
             src="/storage/images/{{$oneEmployee->image}}" alt="!">
        @include('app.blocks.team.modal',
            ['id'=>$oneEmployee->id, 'name'=>$oneEmployee->name, 'src'=>$oneEmployee->image])
    </td>
    <td><a href="{{route('employees')}}/{{$oneEmployee->id}}">{{$oneEmployee->name}}</a></td>
    <td>{{$oneEmployee->number}}</td>
    <td>{{$oneEmployee->position}}</td>
    <td>{{$oneEmployee->hand}}</td>
    <td>{{$oneEmployee->weight}} кг</td>
    <td>{{$oneEmployee->height}} см</td>
    <td>{{$oneEmployee->born}}</td>
</tr>
