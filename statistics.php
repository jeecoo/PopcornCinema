<?php
    include 'connect.php';
    require_once 'admin_header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css\report.css" />
    <meta charset="UTF-8" />  
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- POPPINS FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <script src="script.js"></script> 
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Movies</title>
</head>
<body>
    <div class="main-container">
  
        <div class="container">
            <a href="admin_dashboard.php"><span class="icon-close">
            <ion-icon name="close" style="font-size: 20px;"></ion-icon>
            </span></a>

            <!--  Average Duration of Movies -->
            <div class="table" style="margin-bottom:80px;">
                <h2>Average Duration of Movies by Genre</h2>
                <br>
                <table>
                    <thead>
                        <tr>
                            <th>Genre</th>
                            <th>Average Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        include 'connect.php';

                        if($connection->connect_error){
                            die("Connection failed: " . $connection->connect_error);
                        }

                        $avgDurationByGenreQuery = "SELECT genre, AVG(TIME_TO_SEC(duration))/60 AS average_duration_minutes FROM tblmovie GROUP BY genre";
                        $avgDurationByGenreResult = $connection->query($avgDurationByGenreQuery);
                        
                        if(!$avgDurationByGenreResult){
                            die("Invalid query: " . $connection->error);
                        }

                        while($row = $avgDurationByGenreResult->fetch_assoc()){
                            $genre = $row['genre'];
                            $averageDurationMinutes = $row['average_duration_minutes'];
                          
                            $averageDurationHours = floor($averageDurationMinutes / 60);
                            $averageDurationMinutesRemainder = $averageDurationMinutes % 60;
                            
                            echo "
                            <tr>
                                <td>{$genre}</td>
                                <td>{$averageDurationHours} hours : {$averageDurationMinutesRemainder} minutes</td>
                            </tr>
                            ";
                        }
                    ?>
                    </tbody>
                </table>
            </div>


            <div class="table" style="margin-bottom:80px;">
            <h2>Longest Movies by Genre</h2>
            <br>
            <table>
                <thead>
                    <tr>
                        <th>Genre</th>
                        <th>Title</th>
                        <th>Duration</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include 'connect.php';

                    if($connection->connect_error){
                        die("Connection failed: " . $connection->connect_error);
                    }

                    $longestMoviesByGenreQuery = "SELECT genre, title, duration FROM tblmovie WHERE (genre, duration) IN (SELECT genre, MAX(duration) FROM tblmovie GROUP BY genre)";
                    $longestMoviesByGenreResult = $connection->query($longestMoviesByGenreQuery);
                    
                    if(!$longestMoviesByGenreResult){
                        die("Invalid query: " . $connection->error);
                    }

                    while($row = $longestMoviesByGenreResult->fetch_assoc()){
                        $genre = $row['genre'];
                        $title = $row['title'];
                        $duration = $row['duration'];
                        echo "
                        <tr>
                            <td>{$genre}</td>
                            <td>{$title}</td>
                            <td>{$duration}</td>
                        </tr>
                        ";
                    }
                ?>
                </tbody>
            </table>
        </div>




        <div class="table" style="margin-bottom:80px;">
            <h2>Shortest Movies by Genre</h2>
            <br>
            <table>
                <thead>
                    <tr>
                        <th>Genre</th>
                        <th>Title</th>
                        <th>Duration</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include 'connect.php';

                    if($connection->connect_error){
                        die("Connection failed: " . $connection->connect_error);
                    }

                    $longestMoviesByGenreQuery = "SELECT genre, title, duration FROM tblmovie WHERE (genre, duration) IN (SELECT genre, MIN(duration) FROM tblmovie GROUP BY genre)";
                    $longestMoviesByGenreResult = $connection->query($longestMoviesByGenreQuery);
                    
                    if(!$longestMoviesByGenreResult){
                        die("Invalid query: " . $connection->error);
                    }

                    while($row = $longestMoviesByGenreResult->fetch_assoc()){
                        $genre = $row['genre'];
                        $title = $row['title'];
                        $duration = $row['duration'];
                        echo "
                        <tr>
                            <td>{$genre}</td>
                            <td>{$title}</td>
                            <td>{$duration}</td>
                        </tr>
                        ";
                    }
                ?>
                </tbody>
            </table>
        </div>



        <div class="table" style="margin-bottom:80px;">
            <h2>Number of Movies Released Each Year</h2>
            <br>
            <table>
                <thead>
                    <tr>
                        <th>Release Year</th>
                        <th>Number of Movies</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include 'connect.php';

                    if($connection->connect_error){
                        die("Connection failed: " . $connection->connect_error);
                    }

                    $moviesReleasedPerYearQuery = "SELECT YEAR(releasedate) AS release_year, COUNT(*) AS num_movies FROM tblmovie GROUP BY YEAR(releasedate)";
                    $moviesReleasedPerYearResult = $connection->query($moviesReleasedPerYearQuery);
                    
                    if(!$moviesReleasedPerYearResult){
                        die("Invalid query: " . $connection->error);
                    }

                    while($row = $moviesReleasedPerYearResult->fetch_assoc()){
                        $releaseYear = $row['release_year'];
                        $numMovies = $row['num_movies'];
                        echo "
                        <tr>
                            <td>{$releaseYear}</td>
                            <td>{$numMovies}</td>
                        </tr>
                        ";
                    }
                ?>
                </tbody>
            </table>
        </div>




            <div class="table" style="margin-bottom:80px;">
            <h2>Total Number of Movies by Genre</h2>
            <br>
            <table>
                <thead>
                    <tr>
                        <th>Genre</th>
                        <th>Total Number</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include 'connect.php';

                    if($connection->connect_error){
                        die("Connection failed: " . $connection->connect_error);
                    }

                    $sql = "SELECT genre, COUNT(*) AS total FROM tblmovie GROUP BY genre";
                    $result = $connection->query($sql);
                    
                    if(!$result){
                        die("Invalid query: " . $connection->error);
                    }

                    while($row = $result->fetch_assoc()){
                        echo "
                        <tr>
                        <td>{$row['genre']}</td>
                        <td>{$row['total']}</td>
                        </tr>
                        ";
                    }
                ?>
                </tbody>
            </table>
            </div>  
        </div>
    </div>    
</body>
</html>



<?php
    require_once 'footer.php';
?>
