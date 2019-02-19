<!--
==========================================================================================
Author: Jandre Badenhorst                                                                 |
File name: connect.php                                                                    |
Date:                                                                                     |
Description: The PHP script is used to add comments to the database                       |
==========================================================================================
-->


<?php
  $conn = mysqli_connect("localhost", "ODBC", "", "ODBC");

  #check connection
    if (mysqli_connect_errno()) {
      echo "Unable to connect" . mysqli_connect_error() ;
      exit();
    }else {
      #connection successful
       echo "successfully connected" . "<br/>";

       //INSERT statement
       $sql = "INSERT INTO comments VALUES(NULL, ?, ?, ?)";

       //Initialize statement
       $stmt = mysqli_stmt_init($conn);

       //prepare statement
       if (mysqli_stmt_prepare($stmt, $sql)){
         //bind the parameters


       //sets and execute parameters

           $name = ($_POST['name']);
           $email = ($_POST['email']);
           $subject = ($_POST['subject']);
           mysqli_stmt_bind_param($stmt, 'sss', $name, $email, $subject);
           mysqli_stmt_execute($stmt);



         $stmt->close();

         echo "values added";
         header('location:comments_view.php');
         //echo "<script>location.href='indexx.php'</script>";
         exit();
         $conn->close();
       }
       else{
         echo "Failed to add values";
       }

    }



 ?>
