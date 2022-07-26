<!DOCTYPE html>
<html lang="en">
<head>
  <title>COVID Medical Center</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="homepages.css">
    <style>
    .usualDiv{
      position: relative;
      height: 700px;
      width: 1340px;
      margin-top: 0px;
      margin-right: 100px;
      margin-bottom: 0px;
      margin-left: 170px;
      <!--display: flex;-->
      <!--align-items: center;-->
      justify-content: center;
      background-size: 50%;
    }

    .usualDiv::before{
      content: "";
      position: absolute;
      top: 0px;
      right: 10px;
      bottom: 5px;
      left: 0px;
      background-color: rgba(0,0,0,0.25);
      z-index:-1;
      display: inline-block;
      border-radius: 50px;
      /*box-shadow: 2px 2px 2px gray;*/
    }

    table, th, td{
      margin-top: 250px;
      padding: 25px 10px 0px 25px;
      color: #EFFAFF;
    }
    table{
      margin-left: 40px;
      margin-right: 100px;
      padding-bottom: 10px;
    }
    td{
      margin-top: 100px;
      padding: 25px 10px 0px 25px;
      color: #EFFAFF;
      font-size: 110%;
      font-family: Comfortaa;
      letter-spacing: 2px;
    }
    input[type=text], input[type=password], .b {
      background-color: #025861;/*#025861;#03717d;*/
      border: 1.5px solid #EFFAFF;
      color: white;
      margin-top: 50px;
      margin-left:200px;
      margin-right:100px;
      padding-top: 7px;
      padding-bottom:5px;
      text-decoration: none;
      cursor: pointer;
      border-radius: 50px;
      width: 300px;
      height: 30px;
      font-size: 150%;
      font-family: Comfortaa;
      letter-spacing: 2px;
    }
    .c{
      background-color: #025861;/*#025861;#03717d;*/
      border: 1.5px solid #EFFAFF;
      color: white;
      margin-top: 40px;
      margin-left: 200px;
      margin-right: 100px;
      padding-top: 7px;
      padding-bottom:5px;
      text-decoration: none;
      cursor: pointer;
      border-radius: 50px;
      width: 300px;
      height: 80px;
      font-size: 150%;
      font-family: Comfortaa;
      letter-spacing: 2px;
    }

    .sticky {
      position: fixed;
      top: 0;
      width: 100%;
    }
    input[type=submit]:hover {
      background-color: #ccefff;
      color: #025861;/*#025861;#2fced6;*/
    }
    </style>
</head>
<body>
  <!-- Horizontal Navbar begins -->
    <ul id="sticky">
      <li><img src="shorts_logo.png" alt="logo" style="width:30%; right: 150px; margin-top:15px;" /></li>
      <li><a href="loginpage.html"><pre id="fonter">Sign Out     </pre></a></li>
      <li><a href="http://localhost/complaint.php"><pre id="fonter">Complaint   </pre></a></li>
      <li><a href="http://localhost/contact.php"><pre id="fonter">Contact     </pre></a></li>
    <!--<li style="float:right"><a class="active" href="#about">About</a></li>-->
    </ul>
    <!-- Horizontal Navbar ends-->

    <!-- Sidebar -->
    <ul id="sidebar" style="margin-top:0px;">
        <pre id="fonter">
        <li id="add" style="border-top: 2px solid #296870;"><a href="http://localhost/patient.php">Patient          &nbsp&nbsp&nbsp&nbsp<br /></a></li>
        <li id="add"><a href="http://localhost/record.php">Record              <br /></a></li>
        <li id="add"><a href="http://localhost/pharmacy.php">Pharmacy          <br /></a></li>
        <li id="add"><a href="http://localhost/book_a_room.php">Book a room       <br /></a></li>
        <li id="add"><a href="http://localhost/professional.php">Professionals     <br /></a></li>
        <li id="add"><a href="http://localhost/transfer_paper.php">Transfer papers  <br /></a></li>
        <li id="add" class="active"><a href="http://localhost/dischrge_paper.php">Discharge Papers <br /></a></li>
       </pre>
     </ul>

<?php
$name=0;
$gender=0;
$contact=0;
$history=0;
$diagnosis=0;
$conn = mysqli_connect("localhost", "root", "", "COVID_MEDICAL_CENTER");
$pid = $_POST["pid"];
$date = $_POST["date"];
$sql = "UPDATE DETAILS SET DISCHARGED=? WHERE PID = ?";
$stmt= $conn->prepare($sql);
$stmt->bind_param("ss", $date, $pid);
$stmt->execute();
$yes=0;

$to_email = $_POST["email"];
$body = "<img src='https://img.wattpad.com/714bd83347191575c48ad096ca12830283a5baed/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f776174747061642d6d656469612d736572766963652f53746f7279496d6167652f4452616e77314d6b3266435533773d3d2d33392e313639316239656436623930623065663435363637353438383035352e6a7067?s=fit&w=400&h=400'/><br>";
$body .= "We are happy that you are getting discharged! Take care and eat healthy.";
$body .= "<br/>Regards, Flowerhill Medical Center";

$headers = implode("\r\n", [
  "MIME-Version: 1.0",
  "Content-type: text/html; charset=utf-8"
]);

$subject = "Thank you for staying strong.";
$headers .= "From: flowerhill.medical.center@gmail.com";
if (mail($to_email, $subject, $body, $headers)) {
    $yes=1;
} else {
    echo "Email sending failed...";
}
?>

<form id = "login" action = "http://localhost/patient.php" method = "post">
  <div class = "usualDiv">
    <table style="margin-top:70px; font-family:Comfortaa; font-size:150%; letter-spacing: 2px;">
       <tr>
         <td> Patient ID </th>
         <td><?php print $pid ?></td>
       <tr>
         <td><?php if($yes) echo "The mail was sent." ?></th>
       </tr>
       <tr>
         <td></td>
         <td><input type = "submit" value = "Okay" class = "koo" style="font-size:90%;"/></td>
      </tr>
    </table>
</div>
</form>
</body>
</html>
