<?php
    include 'connect.php';
   
?>

<?php
    require_once 'header.php';
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css\login.css" />
    <meta charset="UTF-8" />  
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- POPPINS FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <title>Login Page</title>
    <script src="script.js"></script> 
	<script>
		function redirectToIndex() {
			window.location.href = 'index.php';
		}
	</script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
	<body>
		<div class="container">
			<div class="wrapper" id="login-popup">
				<span class="icon-close" onclick="redirectToIndex()">
				<ion-icon name="close" style="font-size: 20px;"></ion-icon>
				</span>

				<div class="form-box login">	
					<h2>Log In</h2>
					<form method="post" action="login_user.php">
						<div class="input-box">
						<span class="icon"><ion-icon name="mail"></ion-icon></span>
						<input type="email" name ="txtemail" required>
						<label for="txtemail">Email</label>
						</div>
						<div class="input-box">
						<span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
						<input type="password" name ="txtpassword"  required>  
						<label for="txtpassword">Password</label>
						</div>	
						<button type="submit" name="btnLogin" class="loginbtn">Log In</button>
						<div class="login-register">	
						<p>Don't have an account?
							<a href="#" class="register-link">Register</a>
						</p>
						</div>
					</form>
				</div>
		


				<div class="form-box register">
					<h2>Register</h2>
					<form method="post" action="register_user.php">
						<div class="input-box">
						<span class="icon"><ion-icon name="mail"></ion-icon></span>
						<input type="email" name="txtemail" required>
						<label for="txtemail">Email</label>
						</div>
						<div class="input-box">
						<span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
						<input type="password" name="txtpassword" required>
						<label for="txtpassword">Password</label>
						</div>
						<div class="input-box">
						<span class="icon"><ion-icon name="person"></ion-icon></span>
						<input type="text" name="txtfirstname" required>
						<label for="txtfirstname">Firstname</label>
						</div>
						<div class="input-box">
						<span class="icon"><ion-icon name="person"></ion-icon></span>
						<input type="text" name="txtlastname" required>
						<label for="txtlastname">Lastname</label>
						</div>
						<div class="input-box">
						<span class="icon"><ion-icon name="call"></ion-icon></span>
						<input type="text" name="txtmobilenumber" required>
						<label for="txtmobilenumber">Mobile Number</label>
						</div>
						<button type="submit" name="btnRegister" class="loginbtn">Register</button>
						<div class="login-register">
						<p>Already have an account?
							<a href="#" class="login-link">Login</a>
						</p>
						</div>
					</form>
				</div>	
			</div>
		</div>			
	</body>
</html>

<?php
    require_once 'footer.php';
?>

