<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Comments</title>
    <link rel="stylesheet" href="glow.css">
  </head>
  <body>
    <form method="post" action="comments.php">
      <fieldset>
        <legend>Comments</legend>
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

              //SELECT statement
              $sql = "SELECT * FROM comments";

              //prepare statement
              if ($stmt = $conn->prepare($sql)) {
                #execute
                $stmt->execute();
                #bind results
                $stmt->bind_result($id, $name, $email, $subject);
                while ($stmt->fetch()) {
                  //echo table rows
                  echo "<link rel='stylesheet' href='glow.css'>";
                  echo "<div class='comment-box'>";
                    echo $id . "<br/>". $name . " " . $email . "<br/>" . $subject . "<br/>";
                  echo "</div>";
                }
                //close connection
                $conn->close();
              }

            }

         ?>
          <input type="submit" name="submit" value="Back" onclick="">
      </fieldset>
    </form>
  </body>
</html>
