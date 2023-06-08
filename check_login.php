<?php
  $username = $_POST['username'];
  $pass = $_POST['passwrd'];


  $con = mysqli_connect("localhost","root","","order_processing");

  if(mysqli_connect_error()){
    echo"Error: ".mysqli_connect_error();
    exit();
  }
  $sql = "SELECT username, pass FROM clients where username = '$username' AND pass= '$pass'";

    if($result = mysqli_query($con, $sql)){
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $count = mysqli_num_rows($result);
    
        if($count == 1){
            echo"Logged in successfully!";
            session_start();
            $username = $row['username'];
            $_SESSION['uname'] = $username;

            ?>
            <meta http-equiv="refresh" content="3, progress.php">
            <?php
        }
        else{
            echo"Username or password not correct";
        }    
    }else{
        echo"Not connected";
    }

    
