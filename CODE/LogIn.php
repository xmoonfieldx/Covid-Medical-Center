
<!DOCTYPE html>
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

 $conn = mysqli_connect("localhost", "root", "", "COVID_MEDICAL_CENTER");
 if (!$conn) {
 die("Connection failed: " . $conn->connect_error);
 }

$sql = "SELECT * FROM LOGIN WHERE USERNAME=? AND PASSWORD=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $Name, $Password);
$stmt->execute();
$result = $stmt->get_result(); // get the mysqli result
if (mysqli_num_rows($result) > 0) {
  header("Location: http://localhost/patient.php");
  exit();
} else {
    // Display the alert box
    echo "<script>
    alert('You may have entered wrong values!');
    window.location.href='http://localhost/loginpage.html';
    </script>";
}
  ?>
 </body>
</html>
