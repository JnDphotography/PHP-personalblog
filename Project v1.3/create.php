<!--
==========================================================================================
Author: Jandre Badenhorst                                                                 |
File name: create.php                                                                     |
Date:                                                                                     |
Description: This PHP script creates the users table                                      |
==========================================================================================
-->
<?php

/*creates table and connects to db*/
  $conn = mysqli_connect("localhost", "ODBC", "", "ODBC");

  #check connection
  if (mysqli_connect_errno()) {
    echo "Unable to connect" . mysqli_connect_error() ;
    exit();
  }else {
    #connection successful
    echo "successfully connected" . "<br/>";
    #if exists drop table

    $sql = 'DROP TABLE IF EXISTS users' ;

    if ($conn->query($sql) === true) {
      echo "Dropping table". "<br/>";
    }else {
      echo $sql. " " . $conn->error;
    }

    #sql to create new table

    $sql = 'CREATE TABLE users('.
    'user_id INT(10) NOT NULL AUTO_INCREMENT,'.
    'name char(100),'.
    'surname CHAR(100),'.
    'gender CHAR(6),'.
    'dob DATE,'.
    'email CHAR(100),'.
    'cell VARCHAR(10),'.
    'password VARCHAR(100),'.
    'PRIMARY KEY (user_id))';

    if ($conn->query($sql) === true) {
      echo "Table created successfully". "<br/>";
    }else {
      echo $sql. " " . $conn->error;
    }

  }
?>
