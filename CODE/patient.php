<!DOCTYPE html>
<html lang="en">
<head>
  <title>COVID Medical Center</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="homepages.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $("#b1").click(function(){
	       $(location).attr('href', 'http://localhost/homepage.php')
      });
      $("#b2").click(function(){
 	      $(location).attr('href', 'http://localhost/view_single_record.php')
      });
      $("#b3").click(function(){
  	      $(location).attr('href', 'http://localhost/view_record.php')
      });
      $("#b4").click(function(){
   	     $(location).attr('href', 'http://localhost/details.php')
      });
      $("#b5").click(function(){
	       $(location).attr('href', 'http://localhost/assign_doctor.php')
      });
      $("#b6").click(function(){
 	      $(location).attr('href', 'http://localhost/diagnosis.php')
      });
      $("#b7").click(function(){
  	      $(location).attr('href', 'http://localhost/treatment.php')
      });
      $("#b8").click(function(){
   	     $(location).attr('href', 'http://localhost/bill.php')
      });
    });
    </script>
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
      top: 110px;
      right: 10px;
      bottom: 5px;
      left: 0px;
      background-color: rgba(0,0,0,0.25);
      z-index:-1;
      display: inline-block;
      border-radius: 50px;
      animation: transitionIn 0.5s;
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
    input[type=text], input[type=password], .b {
      background-color: #025861;/*#025861;#03717d;*/
      border: 1.5px solid #EFFAFF;
      color: white;
      margin-top: 180px;
      margin-left:200px;
      margin-right:100px;
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

    .b:hover, .c:hover {
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
    <li><a href="http://localhost/sign.php"><pre id="fonter">Sign Up   </pre></a></li>
    <li><a href="http://localhost/contact.php"><pre id="fonter">Contact     </pre></a></li>
  <!--<li style="float:right"><a class="active" href="#about">About</a></li>-->
  </ul>
  <!-- Horizontal Navbar ends-->

  <!-- Sidebar -->
  <ul id="sidebar" style="margin-top:42px;">
      <pre id="fonter">
      <li id="add" class="active" style="border-top: 2px solid #296870;"><a href="http://localhost/patient.php">Patient          &nbsp&nbsp&nbsp&nbsp<br /></a></li>
      <li id="add"><a href="http://localhost/record.php">Record              <br /></a></li>
      <li id="add"><a href="http://localhost/pharmacy.php">Pharmacy          <br /></a></li>
      <li id="add"><a href="http://localhost/book_a_room.php">Book a room       <br /></a></li>
      <li id="add"><a href="http://localhost/professional.php">Professionals     <br /></a></li>
      <li id="add"><a href="http://localhost/transfer_paper.php">Transfer papers  <br /></a></li>
      <li id="add"><a href="http://localhost/dischrge_paper.php">Discharge Papers <br /></a></li>
     </pre>
   </ul>
  <!-- end -->

 <!-- buttons -->
 <div class = "usualDiv">
    <button id="b1" class="b" data-inline="true" style="">New Patient</button>
    <button id="b2" class="b" data-inline="true">View single record</button>
    <br/>
    <button id="b3" class="c" data-inline="true">View all patient records</button>
    <button id="b4" class="c" data-inline="true">Enter Results</button>
    <br/>
    <button id="b5" class="c" data-inline="true" style="">Medical Certificate</button>
    <button id="b6" class="c" data-inline="true">Diagnosis</button>
    <br />
    <button id="b7" class="c" data-inline="true">Treatment</button>
    <button id="b8" class="c" data-inline="true">Bill</button>
  </div>
  <!-- end -->
  </body>
</html>
