
<?php
    include 'connect.php';
?>

<!doctype html>
<html lang="en">
    <head>
        <title>PopcornCinema</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
       
        
        <link rel="stylesheet" href="css\header.css" />
        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <!-- POPPINS FONT -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

      <!-- scripts -->
      <script src="script.js"></script> 
      <script>
		function redirectToIndex() {
			window.location.href = 'index.php';
		}
	  </script>

      <!-- Icons -->
      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </head>

    <body>
            <nav class="navigation" class="navbar navbar-expand-sm navbar-dark bg-dark">
                <div class="header" class="container">
                    <img src="images\popcorn cinema logo.png" alt="Bootstrap" width="200" height="auto">
                    <button
                        class="navbar-toggler d-lg-none"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavId"
                        aria-controls="collapsibleNavId"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="menu" class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="nav justify-content-center">
                        <li class="nav-item active">
                            <a class="home" class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="movies-sched" class="nav-link" href="#">Movie Schedules</a>
                        </li>
                        <li class="nav-item">
                            <a class="coming soon" class="nav-link" href="#">Coming Soon</a>
                        </li>
                        <li class="nav-item">
                            <a class="about-us" class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="contact-us" class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li> -->
                        </ul>
                    </div>
                    <div class="all-btn">
                    <a><div class="login_btn" name="btnLogin" id="login_btn">Log In</div></a>
                    <!-- <a href="movie.php"><div class="movie_btn" id="movie_btn">Dashboard</div></a> -->
                    </div>  
                </div>
            </nav>
        
            
            <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius:50px;">    
                <div class="wrapper-container">
                    <div class="wrapper" id="login-popup">
                    <span class="icon-close">
                    <ion-icon name="close"></ion-icon>
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
                                    <a href="#" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" class="register-link">Register</a>
                                </p>
                                </div>
                            </form>
                        </div>
                    </div>    
                </div>
            </div>
            </div>
            </div>


            <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius:50px;">    
                <div class="wrapper-container">
                    <div class="wrapper" id="login-popup">
                    <span class="icon-close">
                    <ion-icon name="close"></ion-icon>
                    </span>
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
                                    <a href="#" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" class="login-link">Login</a>
                                </p>
                                </div>
                            </form>
                        </div>	
                    </div>    
                </div>
            </div>
            </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const registerBtn = document.getElementById('login_btn');

                    registerBtn.addEventListener('click', function() {
                        // Select the modal and show it
                        const modal = new bootstrap.Modal(document.getElementById('exampleModalToggle'));
                        modal.show();
                    });
                });
            </script>















            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const links = document.querySelectorAll('.nav-link');
                    
                    links.forEach(link => {
                        link.addEventListener('click', function(event) {
                            // Remove active class from all links
                            links.forEach(link => link.classList.remove('active'));
                            
                            // Add active class to the clicked link
                            event.target.classList.add('active');
                        });
                    });
                });
            </script>
            
        