<?php
    include 'connect.php';
    require_once 'admin_header.php';
?>

<?php

    // Check if movie ID is provided in the URL
    if(isset($_GET['id'])) {
        $movie_id = $_GET['id'];
        
        // Retrieve movie details from the database based on the provided movie ID
        $sql = "SELECT * FROM tblmovie WHERE movieid = $movie_id";
        $result = $connection->query($sql);
        
        // Check if the movie exists
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $title = $row['title'];
            $genre = $row['genre'];
            $duration = $row['duration'];
            $releasedate = $row['releasedate'];
        } else {
            // Redirect back to the movie list if the movie does not exist
            header("Location: movie.php");
            exit();
        }
    } else {
        // Redirect back to the movie list if movie ID is not provided
        header("Location: movie.php");
        exit();
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Movie</title>
    <!-- Your CSS styles here -->
    <style>
        :root { 
            --main-color:  #FEBE10 ;
            --secondary-color: #cc0000;
            --text-color: white ;
            --background-color: #020307;
        }
        *{
            font-family: "Poppins", sans-serif;
            padding: 0;
            margin: 0;  
            font-size: 13px;
            box-sizing: border-box;
            font-weight: 500;  
            font-style: normal;
            scroll-padding-top: 2rem;
            scroll-behavior: smooth;
        }

        
        body {
            color: black;
            max-width: 100%;
            min-height: 100vh;
            justify-content: center;
            background-size: cover;
            background-position: center;
            background-color: var(--background-color);
        }

        .container {
            width: 500px;
            margin: 200px auto;
            padding: 50px;
            background-color: #fff;
            border: 5px solid var(--main-color);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1000000;
        }


        .container h2 {
            font-weight: bold;
            text-transform: uppercase;
            color: black;
            font-size: 24px;
            margin-bottom: 20px;
        }

       .container p {
            color: black;
            font-size: 16px;
            margin-bottom: 10px;
        }

        strong {
            font-weight: bold;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        .btn {
            padding: 10px 20px;
            background-color: var(--main-color);
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #F4BB44;
        }

        .btn-outline {
                text-decoration:none;
                background-color: #dc3545;
                border: 1px solid var(--secondary-color);
                color: var(--text-color);
            }

        .btn-outline:hover {
            background-color: #c82333;
            color: #fff;
        }

    </style>
</head>
<body>
    <div class="container">
        <h2><?php echo $title; ?></h2>
        <!-- Assuming you have other fields like rating, synopsis, director, and cast -->
        <p><strong>Rating:</strong></p>
        <p><strong>Duration:</strong></p>
        <p><strong>Synopsis:</strong> </p>
        <p><strong>Director:</strong> </p>
        <p><strong>Cast:</strong></p><br>
        <a class="btn btn-outline" href="movie.php" role="button">Back</a>
    </div>
</body>
</html>


<?php
    require_once 'footer.php';
?>
