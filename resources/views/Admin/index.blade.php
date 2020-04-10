<h1>Wellcome {{session('name')}}</h1>
<h3>Admin home</h3>
<table border="1pxd" style="text-align: center">
    <tr>
        <td><a href="{{route('admin.buses')}}">Buses List</a></td>
        <td><a href="">Add Bus</a></td>
        
    </tr>
    <tr>
        <td>Buses Schedule</td>
        <td>Add Bus Schedule</td>
        <td>Search Bus Schedule</td>
    </tr>
</table>