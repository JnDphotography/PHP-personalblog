<!--
==========================================================================================
Author: Jandre Badenhorst                                                                 |
File name: updateUser.php                                                                 |
Date:                                                                                     |
Description: This PHP script will be used to update a users details                       |
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
    $pw = rand(1000,9999);
    $password = md5($pw);
    mysqli_stmt_bind_param($stmt, 'sssssss', $name, $surname, $gender, $dob, $email, $cell, $password);
    mysqli_stmt_execute($stmt);



  $stmt->close();

  //echo "values added";
  header('location:indexx.php');
  //echo "<script>location.href='indexx.php'</script>";
  exit();
  $conn->close();
}
else{
//  echo "Failed to add values";
}
?>
