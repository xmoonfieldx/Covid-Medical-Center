<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Creating the database</title>
    <meta charset="utf-8" />
  </head>
  <body>
    <?php
    $conn = mysqli_connect("localhost", "root", "");
    // Check connection
    if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
    }
    else {
      echo "We did it";
    }

    // Create database
    $sql = "CREATE DATABASE COVID_MEDICAL_CENTER";
    $result = mysqli_query($conn, $sql);
    if($result==0)
    printf($result);
    $conn->close();
    ?>
  </body>
  </html>
