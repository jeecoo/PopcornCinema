<?php
    // Include database connection file
    require_once 'connect.php';

    // Start session
    session_start();

    // Handle registration
    if(isset($_POST['btnRegister'])){		
        // retrieve data from form and save the value to a variable
        // for tbluserprofile
        $fname = $_POST['txtfirstname'];		
        $lname = $_POST['txtlastname'];
       // $gender = $_POST['txtgender'];
            
        //for tbluseraccount
        $email = $_POST['txtemail'];		
        // $uname = $_POST['txtusername'];
        $pword = $_POST['txtpassword'];
        $mnumber = $_POST['txtmobilenumber'];


        $sql2 = "SELECT * FROM tbluseraccount WHERE emailadd = '$email'";
        $result = mysqli_query($connection, $sql2);
        $row = mysqli_num_rows($result);
        
        if($row == 0){
            //save data to tbluserprofile			
            $sql1 = "INSERT INTO tbluserprofile (firstname, lastname) VALUES ('$fname', '$lname')";
            mysqli_query($connection, $sql1);
        
            //Check tbluseraccount if email is already existing. Save info if false. Prompt msg if true.
            $sql = "INSERT INTO tbluseraccount (emailadd, password, mobilenumber) VALUES ('$email', '$pword','$mnumber')";
            mysqli_query($connection, $sql);

            echo "<script language='javascript'>
                        alert('New record saved.');
                  </script>";
            //header("location: index.php");
        } else {
            echo "<script language='javascript'>
                        alert('Email already exists.');
                  </script>";
        }    
    }
    header("Location: index.php");  
?>
