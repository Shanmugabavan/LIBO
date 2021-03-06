<?php
include("server.php");

include("fheader.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-33">
						Register a student account
                    </span>
                    
                    <div class= "validate-input" data-validate = "Firstname is required">
						<input class="form-control" type="text" name="firstname" placeholder="First Name">
						
                    </div>
                    <div class= "validate-input" data-validate = "Lastname is required">
						<input class="form-control" type="text" name="lastname" placeholder="Last Name">
						
                    </div>
                    <div class= "validate-input" data-validate = "Username is required">
						<input class="form-control" type="text" name="username" placeholder="User Name">
						
                    </div>
                    <div class= "validate-input" data-validate = "Enrollment number is required">
						<input class="form-control" type="text" name="nic" placeholder="School ID">
						
                    </div>
                    

					<div class= "validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="form-control" type="text" name="email" placeholder="Email">
						
					</div>

					<div class="rs1 validate-input" data-validate="Password is required">
						<input class="form-control" type="password" name="pass" placeholder="Password">
					
                    </div>
                    <div class="rs1 validate-input" data-validate="Password is required">
						<input class="form-control" type="password" name="copass" placeholder="Retype Password">
					
                    </div>
                   

					<div class="container-login100-form-btn m-t-20">
						<input class="login100-form-btn" type="submit" name="submit" value="Register">
	
					</div>

					

				
				</form>
			</div>
		</div>
	</div>
	

	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>