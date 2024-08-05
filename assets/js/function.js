$(document).ready(function(){
    $("#sign").click(function(){
        alert("Hello");
        var email = $("#email").val();
        var password = $("#pass").val();

        var fd = new FormData();
        fd.append('email', email);
        fd.append('password', password);

        $.ajax({
            url: '<?php echo base_url();?>Welcome/getSignDetails',
            type: 'POST',
            data: fd,
            processData: false,
            contentType: false,
            success: function(response){

            },
            error: function(xhr,status,error){

            }
        })
    })
})