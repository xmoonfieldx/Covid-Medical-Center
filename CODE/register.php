<!DOCTYPE html>
<!-- popcorn3.php - Processes the form described in
 popcorn3.html
 -->
<html lang = "en">
 <head>
 <title> Process the popcorn3.html form </title>
<meta charset = "utf-8" />
 <style type = "text/css">
 td, th, table {border: thin solid black;}
 </style>
 </head>
 <body>
 <?php
// Get form data values
 $Name = $_POST["Username"];
 $Password = $_POST["Password"];

// If any of the quantities are blank, set them to zero
 //if ($Name == "")
 //alert("")
 //if ($Username == "")

 $conn = mysqli_connect("localhost", "root", "", "COVID_MEDICAL_CENTER");
 if (!$conn) {
 die("Connection failed: " . $conn->connect_error);
 }

$sql = "INSERT INTO LOGIN VALUES(?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $Name, $Password);
$stmt->execute();
$result = $stmt->get_result(); // get the mysqli result
  header("Location: http://localhost/patient.php");
  exit();
?>
 </body>
</html>
