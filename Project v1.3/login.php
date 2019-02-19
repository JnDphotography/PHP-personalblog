<!--
==========================================================================================
Author: Jandre Badenhorst                                                                 |
File name: login.php                                                                      |
Date:                                                                                     |
Description: Checks if the password entered on the login page is correct                  |
==========================================================================================
-->
<!--Checks whether the password entered on the login page is correct-->
<?php

  session_start();

  $emailp = ($_POST['email']);
  $pw = ($_POST['password']);
  $_SESSION['email'] = $emailp;
  /*creates table and connects to db*/
  $conn = mysqli_connect("localhost", "ODBC", "", "ODBC");

  #check connection
    if (mysqli_connect_errno()) {
      echo "Unable to connect" . mysqli_connect_error() ;
      exit();
    }else {
      #connection successful
      //  echo "successfully connected" . "<br/>";

      //SELECT statement
      $sql = "SELECT * FROM users WHERE email = '$emailp'";

      //prepare statement
      if ($stmt = $conn->prepare($sql)) {
        #execute
        $stmt->execute();
        #bind results
        $stmt->bind_result($user_id, $name, $surname, $gender, $dob, $email, $cell, $password);
        while ($stmt->fetch()) {
          //echo table rows
          if ($emailp == $email) {
            if ($pw == $password) {
              header('location:/Project v1.3/Blog1/blog.php');
              $_SESSION['username'] = $name;
            }else {
              echo "Please enter the correct password";
              header('location:login.html');
            }

          }else {
            echo "password/email don't match";
          }
        }
        //close connection
        $conn->close();
      }

    }

 ?>
