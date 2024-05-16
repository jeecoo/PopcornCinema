<?php
    include 'connect.php';
?>

<!doctype html>
<html lang="en">
    <head>
        <title>PopcornCinema</title>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
       
        
        <link rel="stylesheet" href="css\admin_header.css" />
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
                    <!-- <div class="menu" class="collapse navbar-collapse" id="collapsibleNavId">
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
                        </li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li> -->
                        <!-- </ul>
                    </div> -->
                    <div class="all-btn">
                        <a href="movie.php"><div class="movie_btn" id="movie_btn">Movies</div></a>
                        <a href="tables.php"><div class="movie_btn" id="movie_btn">Tables</div></a>
                        <a href="statistics.php"><div class="movie_btn" id="movie_btn">Statistics</div></a> 
                        <a href="charts.php"><div class="movie_btn" id="movie_btn">Charts</div></a>   
                    </div> 
                    <div> 
                    <a href="index.php"><div class="exit_btn" id="exit_btn">
                    <ion-icon name="exit" style="font-size: 20px;"></ion-icon></div>
                   </a>
                </div>
            </nav>
      </header>
</body>
</html>