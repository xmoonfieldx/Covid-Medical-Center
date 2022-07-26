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
      top: 30px;
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
      font-size: 120%;
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
      font-size: 120%;
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
    label {
      display: inline-block;
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
  <ul id="sidebar" style="margin-top:42px;">
      <pre id="fonter">
      <li id="add"  class="active" style="border-top: 2px solid #296870;"><a href="http://localhost/patient.php">Patient          &nbsp&nbsp&nbsp&nbsp<br /></a></li>
      <li id="add"><a href="http://localhost/record.php">Record              <br /></a></li>
      <li id="add"><a href="http://localhost/pharmacy.php">Pharmacy          <br /></a></li>
      <li id="add"><a href="http://localhost/book_a_room.php">Book a room       <br /></a></li>
      <li id="add"><a href="http://localhost/professional.php">Professionals     <br /></a></li>
      <li id="add"><a href="http://localhost/transfer_paper.php">Transfer papers  <br /></a></li>
      <li id="add"><a href="http://localhost/dischrge_paper.php">Discharge Papers <br /></a></li>
     </pre>
   </ul>
  <!-- end -->

    <!--$conn = mysqli_connect("localhost", "root", "", "COVID_MEDICAL_CENTER");-->
    <?php
  // Read from a file the new Patient ID
    $myfile = fopen("count.txt", "r") or die("Unable to open file!");
    $txt = fgets($myfile)+1;
    fclose($myfile);
    $myfile = fopen("count.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $txt);
      echo $txt;
  // End
  ?>

  <form action = "http://localhost/new_patient.php" method = "post" style="font-family: Comfortaa; font-size: 110%; letter-spacing: 1.5px;">
    <div class = "usualDiv">
    <table style="margin-top:65px;">
        <tr>
          <td style="font-size: 130%;"> Patient ID </td>
          <td style="font-size: 130%;"><?php print "$txt" ?></td>
        </tr>
        <tr>
          <td>Name</td>
          <td><input type = "text" name = "name" size = "30" /></td>
        </tr>
        <tr>
          <td>Gender:</td>
          <td style="margin-left:500px;">
            <input type="radio" id="html" name="gender" value="M"><label for="html">Male&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
            <input type="radio" id="css" name="gender" value="F"><label for="css">Female&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
            <input type="radio" id="javascript" name="gender" value="NB"><label for="javascript">Other</label>
        </td>
        </tr>
        <tr>
          <td>Contact</td>
          <td><input type = "text" name = "contact" size = "30" /></td>
        </tr>
        <tr>
          <td>Address</td>
          <td><input type = "text" name = "address" size = "30" /></td>
        </tr>
        <tr>
          <td></td>
          <td><input type = "submit" value = "Create" class = "koo"/></td>
       </tr>
     </table>
    </div>
    <!--$result = mysqli_query($conn, $sql);-->
  </body>
</html>
