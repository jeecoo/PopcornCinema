<?php
    // Start session
    session_start();

    // Include database connection file
    include 'connect.php';

    // Handle login
    if(isset($_POST['btnLogin'])){
        $email=$_POST['txtemail'];
        $pwd=$_POST['txtpassword'];

        // Check if the user is an admin or has the email "popcorncinema_admin@gmail.com"
        if($email == "admin@gmail.com" && $pwd == "admin") {
            echo "Admin login attempted";
            // Redirect admin to admin_dashboard.php
            header('location: admin_dashboard.php');
            exit();
        }

        // Check tbluseraccount if username is existing
        $sql = "SELECT * FROM tbluseraccount WHERE emailadd = '$email'";
        $result = mysqli_query($connection, $sql);
        $count = mysqli_num_rows($result);
        
		if($count == 1){
            $row = mysqli_fetch_array($result);
            if($row['password'] == $pwd) {
                // Password is correct, set session variables and redirect
                $_SESSION['email'] = $email;
                $_SESSION['userid'] = $row['userid'];
                header('location: user_dashboard.php');
                exit();
            } else {
                // Incorrect password, show alert
                echo "<script language='javascript'>
                        alert('Incorrect password');
                        window.location.href = 'index.php';
                      </script>";
            }
        } else {
            // Account does not exist, show alert
            echo "<script language='javascript'>
                    alert('Account does not exist');
                    window.location.href = 'index.php';
                  </script>"; 
        }
    }
?>