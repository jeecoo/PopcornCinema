<?php
    // Start session
    session_start();

    // Include database connection file
    include 'connect.php';

    // Fetch the logged-in user's firstname from tbluserprofile
    if(isset($_SESSION['email'])) {
        $email = mysqli_real_escape_string($connection, $_SESSION['email']); // Sanitize the input to prevent SQL injection
        $sql_profile = "SELECT tbluserprofile.firstname 
                        FROM tbluserprofile 
                        JOIN tbluseraccount ON tbluserprofile.userid = tbluseraccount.accid
                        WHERE tbluseraccount.emailadd = '$email'";
        $result_profile = mysqli_query($connection, $sql_profile);

        if($result_profile && mysqli_num_rows($result_profile) > 0) {
            $row_profile = mysqli_fetch_assoc($result_profile);
        } else {
            echo "Error: Unable to fetch user profile."; // Output any SQL error for debugging purposes
        }
    } else {
        echo "Error: Email not set in session."; // Output an error message if email is not set in session
    }

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
       
        
        <link rel="stylesheet" href="css\user_dashboard.css" />
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
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
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
                    <!-- <div class="all-btn">
                    <a><div class="login_btn" name="btnLogin" id="login_btn">Log In</div></a>
                    </div>   -->
                    <div class="user-exit">
                        <div class="user_btn" id="user_btn">
                        <div class="profile-container">
                            <!-- Display the user's profile picture -->
                            <img src="images/profile_pic.jpg" alt="Profile Image" id="profile_image">
                        </div>
                        <?php 
                            // Check if the firstname exists
                            if(isset($row_profile)) { // Check if $row_profile is set
                                echo "<p><span>{$row_profile['firstname']}</span></p>"; 
                            }
                            ?>
                        </div>
                    
                    <a href="index.php"><div class="exit_btn" id="exit_btn">
                    <ion-icon name="exit" style="font-size: 20px;"></ion-icon></div>
                    </a>
                    </div>
                    
                </div>
            </nav>