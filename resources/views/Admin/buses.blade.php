<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
<h1>These are Buses...</h1>
<script>
    function f1(){
        $data =  $('#searchBus1').val();
        $.ajax({
            type: 'post',
            url: "/system/buses/ajax/"+$data,
             data : {
                       "_token": "{{ csrf_token() }}"  
                    },
                    datatype : 'html',
            success: function(response){

           var data =  "<tr>"
                + "<th>" + "Operator" + "</th>"
                + "<th>" + "Name" + "</th>" 
                + "<th>" + "Location" + "</th>"
                + "<th>" + "Seat_row" + "</th>"
                + "<th>" + "Seat_column" + "</th>"
            + "</tr>"
            + "<tr>"
                + "<td>" +response.success[0]['operation']+ "</td>"
                + "<td>" +response.success[0]['name']+ "</td>"
                + "<td>" +response.success[0]['location']+ "</td>"
                + "<td>" +response.success[0]['seat_row']+ "</td>"
                + "<td>" +response.success[0]['seat_column']+ "</td>"
            + "</tr>";


            $("#table").append(data);
            },
            error: function(error){
                alert(error.status);
            }
        });
       
    }
</script>

<table id="table"  border="1px" style="text-align:center;"></table>


<table border="1px" style="text-align:center;">
    <tr>
        <td><input type="text" id="searchBus1"></td> 
        <td colspan="2"><button type="button" onclick="f1()">Search Bus</button></td>
    </tr>   
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
            <td>{{$bus['operator']}}<td>
            <td>{{session('name')}}<td>
            <td>{{$bus['name']}}<td>
            <td>{{$bus['location']}}<td>
            <td>{{$bus['seat_row']}}<td>
            <td>{{$bus['seat_column']}}<td>
            <td>
           
                <a href="/system/supportstaff/admin/bus/edit/{{$bus['busId']}}">Edit</a> | 
                <a href="#">Delete</a>
        
            <td>
        </tr>
    @endforeach
</table>