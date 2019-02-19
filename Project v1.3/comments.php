<!--
==========================================================================================
Author: Jandre Badenhorst                                                                 |
File name: comments.html                                                                  |
Date:                                                                                     |
Description: HTML page for entering COMMENTS                                              |
==========================================================================================
-->


<!DOCTYPE html>
<html>
  <head>
    <title>Submit Comments</title>
    <link rel="stylesheet" href="glow.css">
  </head>
  <body>
    <form class="textfield" action="connect.php" method="post">
      <fieldset>
        <legend>Submit comments</legend>
      <table align="center">
        <tr>
          <td><input type="text" name="name" placeholder="Name" required/></td>
        </tr>
        <tr>
          <td><input type="email" name="email" placeholder="Email" required/></td>
        </tr>
        <tr>
          <!--<td><input type="textarea" name="subject" placeholder="comment" rows="5" cols="33" wrap="hard" ></td>-->
          <td><textarea name="subject" rows="8" cols="80" placeholder="Comments" required/></textarea> </td>
        </tr>
        <tr>
          <td><input type="submit" name="submit" value="Submit"></td>
        </tr>
      </table>
      </fieldset>
    </form>

  </body>
</html>
