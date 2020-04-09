<h1>These are Buses...</h1>
<table border="1px" style="text-align:center;">
    <tr>
        <th>Operator<th>
       <th>Manager<th>
        <th>Name<th>
        <th>Location<th>
       <th>Seat_row<th>
       <th>Seat_column<th>
        <th>Action<th>
    </tr>

    @foreach ($buses as $bus)
        <tr>
            <td>{{$bus['operation']}}<td>
            <td>{{session('name')}}<td>
            <td>{{$bus['name']}}<td>
            <td>{{$bus['location']}}<td>
            <td>{{$bus['seat_row']}}<td>
            <td>{{$bus['seat_column']}}<td>
            <td>
                <a href="{{route('')}}">Edit</a>
                <a href="{{route('')}}">Delete</a>
            <td>
        </tr>
    @endforeach
</table>