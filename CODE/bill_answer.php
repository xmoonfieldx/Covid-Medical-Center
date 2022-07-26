<!DOCTYPE html>
<html lang="en">
<head>
  <title>COVID Medical Center</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="homepages.css">
    <style>
    .usualDiv{
      position: relative;
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
      font-size: 150%;
      font-family: Comfortaa;
      letter-spacing: 2px;
    }
    input[type=text], input[type=password], .b {
      background-color: #025861;/*#025861;#03717d;*/
      border: 1.5px solid #EFFAFF;
      color: white;
      margin-top: 40px;
      margin-left:200px;
      margin-right:100px;
      padding-top: 7px;
      padding-bottom:5px;
      text-decoration: none;
      cursor: pointer;
      border-radius: 50px;
      width: 300px;
      height: 30px;
      font-size: 100%;
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
          <br/>    <br/>
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
     <!--end-->

  <?php
    $conn = mysqli_connect("localhost", "root", "", "COVID_MEDICAL_CENTER");
    $pid = $_POST["pid"];
    $bid = $_POST["bid"];
    $room_bill = $_POST["room_bill"];
    $doctor_bill = $_POST["doctor_bill"];
    $medbill = $_POST["medbill"];
    $total_bill = $room_bill+ $doctor_bill + $medbill;
    $paid = $_POST["paid"];
    $remaining = $total_bill - $paid;
    $sql = "UPDATE BILL SET ROOM_BILL=ROOM_BILL+?, DRBILL=DR_BILL+?, MEDBILL=MEDBILL+?, TOTAL_BILL=TOTAL_BILL+?, PAID=PAID+?, REMAINING=REMAINING+? WHERE PID=?";
    $stmt= $conn->prepare($sql);
    $stmt->bind_param("iiiiiis", $room_bill, $doctor_bill, $medbill, $total_bill, $paid, $remaining, $pid);
    $result= $stmt->execute();
  ?>

  <form id = "login" action = "http://localhost/billing.php" metdod = "post">
    <div class = "usualDiv">
      <table style="margin-top:100px;">
        <tr>
          <td> Bill ID: </td>
          <td><?php echo $bid; ?></td>
        </tr>
        <tr>
         <td> Patient ID: </td>
         <td><?php echo $pid; ?></td>
       </tr>
       <tr>
         <td> Room_bill: </td>
         <td><?php echo $room_bill; ?></td>
       </tr>
       <tr>
        <td> Doctor Bill: </td>
        <td><?php echo $doctor_bill; ?></td>
      </tr>
      <tr>
        <td>Medical Bill: </td>
        <td><?php echo $medbill; ?></td>
      </tr>
      <tr>
        <td> Total Bill: </td>
        <td><?php echo $total_bill; ?></td>
      </tr>
     <tr>
       <td> Paid: </td>
       <td><?php echo $paid; ?></td>
     </tr>
     <tr>
      <td> Remaining: </td>
      <td><?php echo $remaining; ?></td>
    </tr>
    <tr>
      <td></td>
      <td><input type = "submit" value = "Okay" class = "koo"/></td>
    </tr>
       </table>
     </div>
   </form>
  </body>
</html>
