<?php
    include 'connect.php';
    require_once 'user_header.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css\user_dashboard.css" />
    <meta charset="UTF-8" />  
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- POPPINS FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <title>POPCORNCINEMA</title>
    <script src="script.js"></script> 
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </head>

    <body>
        <section class ="hero" style="min-height:10vh;margin-top:65px;">
        <div class="landing_page">
                <h1>WELCOME USER!!</h1>
            </div>
        </section>
    </body>
</html


<?php
    require_once 'footer.php';
?>


