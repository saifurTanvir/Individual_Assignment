<script>
    function f2(){
        $data =  $('#searchBus1').val();
        $.ajax({
            type: 'post',
            url: "/system/buses/ajax/"+$data,
            data : {
                       "_token": "{{ csrf_token() }}"  
                    },
            datatype : 'html',
            success: function(response){
                //
            },
            error: function(error){
                alert(error.status);
            }
        });
       
    }
</script>
<script>

  var txt;
  var r = confirm("After delete it can't be retreive!");
  if (r == true) {
      var id = $("#id").html();
    alert(id);
    //f1();
  } else {
    f2();
  }
  alert(txt);

</script>

<p  id="id">{{$id}}</p>