<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styles.css'); ?>">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!-- <script src="<?php echo base_url('assets/js/function.js'); ?>"></script> -->
</head>
<style>
</style>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form>
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="email" id="email" name="email" placeholder="Email" required="">
					<div class=""password-container>
						<input type="text" id="pass" name="pswd" placeholder="Password" required="">
						
					</div>
					<button id="sign">Sign up</button>
				</form>
			</div>

			<div class="login">
				<form>
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button>Login</button>
				</form>
			</div>
	</div>
	<script>
		$(document).ready(function(){
    $("#sign").click(function(){
        alert("Hello");
        var email = $("#email").val();
        var password = $("#pass").val();

        var fd = new FormData();
        fd.append('email', email);
        fd.append('password', password);

        $.ajax({
            url: '<?php echo base_url();?>Welcome/getSignDetails/',
            type: 'POST',
            data: fd,
            processData: false,
            contentType: false,
            success: function(response){
				console.log("Inserted successfully")
            },
            error: function(xhr,status,error){
				console.error('Error:', xhr.responseText);
            }
        })
    })
})
	</script>
</body>
</html>
