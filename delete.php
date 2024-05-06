<?php
    include 'connect.php';

    if($connection->connect_error){
        die("Connection failed: " . $connection->connect_error);
    }

    if(isset($_GET['id'])) {
        $movieId = $_GET['id'];
        $sql = "DELETE FROM tblmovie WHERE movieid = $movieId";
        
        if ($connection->query($sql) === TRUE) {
            echo "Record deleted successfully";
            // Redirect back to the movie list page
            header("Location: /popcorncinema/movie.php");
            exit();
        } else {
            echo "Error deleting record: " . $connection->error;
        }
    } else {
        echo "Movie ID not provided";
    }
?>
