<h1>Wellcome {{session('name')}}</h1> 
<h3>Admin home</h3>
{{session('insertBus')}}
<table border="1pxd" style="text-align: center">
    <tr>
        <td><a href="{{route('admin.buses')}}">Buses List</a></td>
        <td><a href="{{route('admin.addBus')}}">Add Bus</a></td>
        
    </tr>
    <tr>
        <td><a href="{{route('admin.busSchedule')}}">Bus ScheduleList</a></td>
        <td><a href="{{route('admin.addBus')}}">Add Bus</a></td>
    </tr>
</table>