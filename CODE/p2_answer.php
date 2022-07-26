<!DOCTYPE html>
<html lang = "en">
   <head>
     <title> New Patient </title>
     <meta charset = "utf-8" />
   </head>
   <body>
   <?php
   $myfile = fopen("count.txt", "r") or die("Unable to open file!");
   $txt = fgetc($myfile);
   fclose($myfile);
   $myfile = fopen("count.txt", "w") or die("Unable to open file!");
   fwrite($myfile, $txt);

   $did = $_POST["did"];
   $name = $_POST["name"];
   $type = $_POST["type"];
   $contact = $_POST["contact"];
   $experience = $_POST["experience"];

   if ($name == "") $name = 0;
   if ($type == "") $type = 'Unknown';
   if ($experience == "") $experience = 0;

   $conn = mysqli_connect("localhost", "root", "", "COVID_MEDICAL_CENTER");
   $sql = "INSERT INTO HEALTH_WORKER VALUES('$did', '$name', '$type', $contact, $experience)";
   $result=mysqli_query($conn, $sql);
   if($result)
   {
     header("Location: http://localhost/professional.php");
   }
   ?>

  </body>
</html>
