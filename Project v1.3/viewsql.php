<!--
==========================================================================================
Author: Jandre Badenhorst                                                                 |
File name: viewsql.php                                                                    |
Date:                                                                                     |
Description: This page echo's the passwordfrom the database                               |
==========================================================================================
-->

 <!DOCTYPE html>
 <html>
   <head>
     <title>View password</title>
     <link rel="stylesheet" href="glow.css"/>
   </head>
   <body>
      <form  action="/Project v1.3/Blog1/blog.php" method="post">
        <fieldset>
          <legend>Your Password</legend>
        <table>
          <tr>
            <td>Welcome, your login details are as follows: <br/> <?php

              session_start();
            $email = ($_POST['email']);

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
                  $sql = "SELECT * FROM users WHERE email = '$email'";

                  //prepare statement
                  if ($stmt = $conn->prepare($sql)) {
                    #execute
                    $stmt->execute();
                    #bind results
                    $stmt->bind_result($user_id, $name, $surname, $gender, $dob, $email, $cell, $password);
                    while ($stmt->fetch()) {
                      //echo table rows
                     echo  $email. "<br/> ". $password. "<br/>";
                    }
                    //close connection
                    $conn->close();
                  }

                }

             ?> </td>
            <td><input type="submit" name="submit" value="OK"> </td>
          </tr>
        </table>
      </fieldset>
      </form>
   </body>
 </html>
