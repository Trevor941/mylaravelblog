<script type="text/javascript">
    $("#addCustomer").submit(function(e){
        e.preventDefault();
        var id;
        var message = $("#message").val();
        var _token = $("input[_token]").val();

        $.ajax({
            url: "/sendmsg"/+id,
            type: "POST",
            data:{
                receiver_id:receiver_id,
                message:message,
                _token: '{{csrf_token()}}'
            },
            success:function(response)
            {
                if(response)
                {
                   // $("#customerList tbody").append('<tr><td>'+response.id+'<td>'+response.name+'</td><td>'+response.phone+'</td><td>'+response.email+'</td><td>'+response.address+'</td><td>'+"<a href='javascript:void(0)' onclick='editCustomer("+response.id+")'class='btn btn-primary'>Edit</a><a href='' class='btn btn-danger'>Delete</a>"+'</td></tr>');
                    $("#messages li").append(response.message);
                    $("#addCustomer")[0].reset();
                    $("#customerModal").modal('hide');
                }
            }
        });

    });
</script>