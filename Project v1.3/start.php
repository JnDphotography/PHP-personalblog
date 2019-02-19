<!--
==========================================================================================
Author: Jandre Badenhorst                                                                 |
File name: start.php                                                                      |
Date:                                                                                     |
Description: Start page. You can choose to either enter your login credentials            |
or register as a new user                                                                 |
==========================================================================================
-->
<?php
  session_start();
  $_SESSION['username'] = "";
  $_SESSION['Email'] = "";
 ?>
<!DOCTYPE html>
<html >
  <head>
    <title>Start</title>
    <link rel="stylesheet" href="glow.css"/>
  </head>
  <form   method="post">

    <body>
      <fieldset>
        <legend>Start</legend>
      <table>
        <tr>
          <td>Already a user? click here</td>
          <td><input type="submit" name="Login" value="Login" formaction="login.html"> </td>
        </tr>

        <tr>
          <td>New to this site? click here</td>
          <td><input type="submit" name="Register" value="Register" formaction="register.html"></td>
        </tr>

      </table>
    </fielset>
    </body>
  </form>
</html>
