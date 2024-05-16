<?php
    include 'connect.php';
    require_once 'admin_header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css\movie.css" />
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
    <div class="container">
        <a href="admin_dashboard.php"><span class="icon-close">
        <ion-icon name="close" style="font-size: 20px;"></ion-icon>
        </span></a>

        <h2>List of Movies</h2>
        <br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Genre</th>
                    <th>Duration</th>   
                    <th>Release Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include 'connect.php';

                if($connection->connect_error){
                    die("Connection failed: " . $connection->connect_error);
                }

                $sql = "SELECT * FROM tblmovie WHERE isDeleted = 0";
                $result = $connection->query($sql);
                
                if(!$result){
                    die("Invalid query: " . $connection->error);
                }

                while($row = $result->fetch_assoc()){
                    echo "
                    <tr>
                    <td>{$row['movieid']}</td>
                    <td>{$row['title']}</td>
                    <td>{$row['genre']}</td>
                    <td>{$row['duration']}</td>
                    <td>{$row['releasedate']}</td>
                    <td>
                        <a class='btn btn-sm btn-primary' href='/popcorncinema/view.php?id={$row['movieid']}'>View</a>
                        <a class='btn btn-sm btn-primary' href='/popcorncinema/edit.php?id={$row['movieid']}'>Edit</a>
                        <a class='btn btn-sm btn-danger' href='/popcorncinema/delete.php?id={$row['movieid']}'>Delete</a>
                    </td>
                    </tr>
                    ";
                }
            ?>
            </tbody>
        </table>

        <a class="btn btn-primary" href="/popcorncinema/create.php" role="button">Add Movie</a>
    </div>
</body>
</html>


<?php
    require_once 'footer.php';
?>
