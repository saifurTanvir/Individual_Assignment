<h1>Wellcome {{session('name')}}</h1>
<h3>Manager home</h3>

<table border="1pxd" style="text-align: center">
    <tr>
        <td><a href="{{route('manager.buses')}}">Buses List</a></td>
    </tr>
    <tr>
        <td><a href="{{route('manager.busSchedule')}}">Bus ScheduleList</a></td>
        <td><a href="#">Add Bus Schedule</a></td>
    </tr>
</table>

