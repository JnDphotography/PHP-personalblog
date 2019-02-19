<!--
==========================================================================================
Author: Jandre Badenhorst                                                                 |
File name: add.php                                                                        |
Date:                                                                                     |
Description: Add data to the users database. Data is entered on the registration page     |
==========================================================================================
-->

<?php
    session_start();


/*creates table and connects to db*/
  $conn = mysqli_connect("localhost", "ODBC", "", "ODBC");

  #check connection
  if (mysqli_connect_errno()) {
    echo "Unable to connect" . mysqli_connect_error() ;
    exit();
  }else {
    #connection successful
  //  echo "successfully connected" . "<br/>";


  }

//INSERT statement
$sql = "INSERT INTO users VALUES(NULL, ?, ?, ?, ?, ?, ?, ?)";

//Initialize statement
$stmt = mysqli_stmt_init($conn);

//prepare statement
if (mysqli_stmt_prepare($stmt, $sql)){
  //bind the parameters


//sets and execute parameters

    $name = ($_POST['name']);
    $surname = ($_POST['surname']);
    $gender = ($_POST['radioButton']);
    $dob = ($_POST['dob']);
    $email = ($_POST['email']);
    $cell = ($_POST['cell']);
    $password = rand(1000,9999);
    $_SESSION['email'] = $email;
    $_SESSION['username'] = $name;
    mysqli_stmt_bind_param($stmt, 'sssssss', $name, $surname, $gender, $dob, $email, $cell, $password);
    mysqli_stmt_execute($stmt);



  $stmt->close();

  //echo "values added";
  header('location:view_details.php');
  //echo "<script>location.href='indexx.php'</script>";
  exit();
  $conn->close();
}
else{
//  echo "Failed to add values";
}
?>
