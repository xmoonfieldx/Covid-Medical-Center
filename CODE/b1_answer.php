<html lang="en">
<head>
  <title>COVID Medical Center</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="homepages.css">
    <style>
    .usualDiv{
      position: relative;
      height: 900px;
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
      top: 70px;
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
      margin-top: 20px;
      padding: 25px 10px 0px 25px;
      color: #EFFAFF;
    }
    td{
      margin-top: 100px;
      padding: 25px 10px 0px 25px;
      color: #EFFAFF;
      font-size: 150%;
      font-family: Comfortaa;
      letter-spacing: 2px;
    }
    table{
      margin-left: 40px;
      margin-right: 100px;
      padding-bottom: 10px;
    }
    input[type=text], input[type=password], .b {
      background-color: #025861;/*#025861;#03717d;*/
      border: 1.5px solid #EFFAFF;
      color: white;
      margin-top: 80px;
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

    #b:hover{
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
    <li><a href="#news"><pre id="fonter">Complaint   </pre></a></li>
    <li><a href="#news"><pre id="fonter">Contact     </pre></a></li>
  <!--<li style="float:right"><a class="active" href="#about">About</a></li>-->
  </ul>
  <!-- Horizontal Navbar ends-->

  <!-- Sidebar -->
  <ul id="sidebar" style="margin-top:64px;">
      <pre id="fonter">
      <li id="add"><a href="http://localhost/patient.php">Patient          &nbsp&nbsp&nbsp&nbsp<br /></a></li>
      <li id="add"><a href="http://localhost/record.php">Record              <br /></a></li>
      <li id="add"><a href="http://localhost/pharmacy.php">Pharmacy          <br /></a></li>
      <li id="add" class="active"><a href="http://localhost/book_a_room.php">Book a room       <br /></a></li>
      <li id="add"><a href="http://localhost/professional.php">Professionals     <br /></a></li>
      <li id="add"><a href="http://localhost/transfer_paper.php">Transfer papers  <br /></a></li>
      <li id="add"><a href="http://localhost/dischrge_paper.php">Discharge Papers <br /></a></li>
     </pre>
   </ul>
  <!-- end -->

  <div class="usualDiv">
  <?php
    $conn = mysqli_connect("localhost", "root", "", "COVID_MEDICAL_CENTER");
    $rid = $_POST["rid"];
    $pid = $_POST["pid"];
    $sql = "UPDATE ROOMS SET PID = ? WHERE RID = ?";
    $stmt= $conn->prepare($sql);
    $stmt->bind_param("ss", $pid, $rid);
    $result= $stmt->execute();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
  ?>
  <p>The room is booked</p>
   <form action = "http://localhost/book_a_room.php" method = "post">
     <table style="margin-top:100px;">
         <tr>
           <th> Room ID </th>
           <td><?php echo $rid; ?></td>
         </tr>
         <tr>
           <th>Patient ID</th>
           <td><?php echo $pid; ?></td>
         </tr>
         <tr>
           <th></th>
           <td><input type = "submit" id = "b" value = "Okay" class = "koo"/></td>
        </tr>
      </table>
    </div>
   </body>
 </html>
