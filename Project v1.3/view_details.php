<!--
==========================================================================================
Author: Jandre Badenhorst                                                                 |
File name: view_details.php                                                                     |
Date:                                                                                     |
Description: Page to view your randomly generated password using sql statements           |
==========================================================================================
-->
<?php
  session_start();
 ?>

<!DOCTYPE html>
<html >
  <head>
    <title>User details</title>
    <link rel="stylesheet" href="glow.css"/>
  </head>
  <body>
    <form  action="viewsql.php" method="post">
      <fieldset>
        <legend>View details</legend>
      <table>
        <tr>
          <td><input type="text" name="email" value=<?php echo $_SESSION['email']; ?>> </td>
        </tr>
        <tr>
          <td><input type="submit" name="view" value="OK"></td>
        </tr>
      </table>
    </fieldset>
    </form>

  </body>
</html>
