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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<div class="main-container">
  
    <div class="container">
      <a href="admin_dashboard.php"><span class="icon-close">
      <ion-icon name="close" style="font-size: 20px;"></ion-icon>
      </span></a>
            <div style="width: 100%; margin: auto">
                <h1 style="color: #020307;text-align: center;margin:20px;font-weight:bold;font-size:25px;">Pie Chart of Genre Distribution</h1>
                <canvas id="genreChart"></canvas>
            </div>
    </div>          

            <script>
        document.addEventListener('DOMContentLoaded', function() {
            <?php
                include 'connect.php';

                $genreDistributionQuery = "SELECT genre, COUNT(*) as count FROM tblmovie WHERE isDeleted = 0 GROUP BY genre";
                $genreDistributionResult = $connection->query($genreDistributionQuery);

                $genreLabels = [];
                $genreCounts = [];
                while ($row = $genreDistributionResult->fetch_assoc()) {
                    $genreLabels[] = $row['genre'];
                    $genreCounts[] = $row['count'];
                }

                echo "var genreLabels = " . json_encode($genreLabels) . ";\n";
                echo "var genreCounts = " . json_encode($genreCounts) . ";\n";
            ?>

            // Chart.js code
            var ctx = document.getElementById('genreChart').getContext('2d');
            var myPieChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: genreLabels,
                    datasets: [{
                        data: genreCounts,
                        backgroundColor: [
                            'rgba(255, 99, 133, 0.7)',
                            'rgba(54, 162, 235, 0.7)',
                            'rgba(255, 206, 86, 0.7)',
                            'rgba(75, 192, 192, 0.7)',
                            'rgba(153, 102, 255, 0.7)',
                            'rgba(255, 159, 64, 0.7)',
                            'rgba(231, 233, 237, 0.7)',
                            'rgba(58, 189, 125, 0.7)',
                            'rgba(220, 53, 69, 0.7)',
                            'rgba(113, 128, 147, 0.7)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(231, 233, 237, 1)',
                            'rgba(58, 189, 125, 1)',
                            'rgba(220, 53, 69, 1)',
                            'rgba(113, 128, 147, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    title: {
                        display: true,
                        text: 'Movie Genre Distribution'
                    }
                }
            });
        });
    </script>
           
</body>
</html>



<?php
    require_once 'footer.php';
?>
