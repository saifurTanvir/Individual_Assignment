<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
<h1>These are Buses...</h1>
{{session('updateBus')}}
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
                + "<th>" + "Company" + "</th>"
            + "</tr>"
            + "<tr>"
                + "<td>" +response.success[0]['operation']+ "</td>"
                + "<td>" +response.success[0]['name']+ "</td>"
                + "<td>" +response.success[0]['location']+ "</td>"
                + "<td>" +response.success[0]['seat_row']+ "</td>"
                + "<td>" +response.success[0]['seat_column']+ "</td>"
                + "<td>" +response.success[0]['company']+ "</td>"
            + "</tr>";


            $("#table").append(data);
            },
            error: function(error){
                alert(error.status);
            }
        });
       
    }  

    function f2(id){
        
        
        if (confirm("After dalete it can't be restore!")) {
            $.ajax({
            type: 'delete',
            url: "/system/buses/"+id+"/delete",
             data : {
                       "_token": "{{ csrf_token() }}"  
                    },
                    datatype : 'html',
            success: function(response){
                //alert("Come back");
                window.location = response;
            },
            error: function(error){
                alert(error.status);
            }
        });
        } else {
            
        } 
    }
</script>
 

<table id="table"  border="1px" style="text-align:center;"></table>


<table border="1px" style="text-align:center;">
    <tr>
        <td><input type="text" id="searchBus1"></td> 
        <td colspan="2"><button type="button" onclick="f1()">Search Bus</button></td>
    </tr>   
    <tr>
        <th>Operator</th>
        <th>Manager</th>
        <th>Name</th>
        <th>Location</th>
        <th>Seat_row</th>
        <th>Seat_column</th>
        <th>Company</th>
        <th>Action</th>
    </tr>

    @foreach ($buses as $bus)
        <tr>
            <td>{{$bus['operator']}}</td>
            <td>{{session('name')}}</td>
            <td>{{$bus['name']}}</td>
            <td>{{$bus['location']}}</td>
            <td>{{$bus['seat_row']}}</td>
            <td>{{$bus['seat_column']}}</td>
            <td>{{$bus['company']}}</td>
            <td>
                <a href="/system/buses/{{$bus['busId']}}/edit">Edit</a> | 
                <button type="button" onclick="f2({{$bus['busId']}})">Delete</button>
            </td>
        </tr>
    @endforeach
    <tr>
        <td><a href="{{route("admin.index")}}">Back</a></td>
        <td colspan="6"></td>
        <td><a href="{{route("logout")}}">Logout</a></td>
    </tr>
</table>