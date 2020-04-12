<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
<h1>These are Buses...</h1>



<table border="1px" style="text-align:center;">  
    <tr>
        <th>Operator<th>
       <th>Manager<th>
        <th>Name<th>
        <th>Location<th>
       <th>Route<th>
       <th>Fare<th>
       <th>deparature<th>
        <th>Arrival<th>
        <th>Action<th>
    </tr>

    
    @for($i = 0; $i < count($busSchedule); $i++)
        <tr>
            <td>{{$buses[$i]['operator']}}<td>
            <td>{{session('name')}}<td>
            <td>{{$buses[$i]['name']}}<td>
            <td>{{$buses[$i]['location']}}<td>
            <td>{{$busSchedule[$i]['route']}}<td>
            <td>{{$busSchedule[$i]['fare']}}<td>
            <td>{{$busSchedule[$i]['deparature']}}<td>
            <td>{{$busSchedule[$i]['arrival']}}<td>
            <td>
                <a href="#">Edit</a> | 
                <a href="#">Delete</a>
            <td>
        </tr>   
    @endfor

  
</table>