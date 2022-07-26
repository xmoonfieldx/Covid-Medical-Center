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
	       $(location).attr('href', 'http://localhost/b1.php')
      });
      $("#b2").click(function(){
 	      $(location).attr('href', 'http://localhost/b2.php')
      });
      $("#b3").click(function(){
  	      $(location).attr('href', 'http://localhost/b3.php')
      });
      $("#b4").click(function(){
  	      $(location).attr('href', 'http://localhost/b4.php')
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
      margin-top: 250px;
      margin-left: 200px;
      margin-right: 100px;
      padding-top: 7px;
      padding-bottom:5px;
      text-decoration: none;
      cursor: pointer;
      border-radius: 50px;
      width: 300px;
      height: 100px;
      font-size: 150%;
      font-family: Comfortaa;
      letter-spacing: 2px;
    }
    .bi{
      background-color: #025861;/*#025861;#03717d;*/
      border: 1.5px solid #EFFAFF;
      color: white;
      margin-top: 100px;
      margin-left: 200px;
      margin-right: 100px;
      padding-top: 7px;
      padding-bottom:5px;
      text-decoration: none;
      cursor: pointer;
      border-radius: 50px;
      width: 300px;
      height: 100px;
      font-size: 150%;
      font-family: Comfortaa;
      letter-spacing: 2px;
    }

    .sticky {
      position: fixed;
      top: 0;
      width: 100%;
    }
    input[type=submit]:hover, .c:hover, .bi:hover {
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
  <ul id="sidebar" style="margin-top:46px;">
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

 <!-- buttons -->
 <div class = "usualDiv">
    <button id="b1" class="c">Book an OR</button>
    <button id="b2" class="c" data-inline="true">Book an ICU</button>
    <br/>
    <button id="b3" class="bi">Book a Room</button>
    <button id="b4" class="bi" data-inline="true">Book a Suite</button>
    <br />
  </div>
  <!-- end -->
  </body>
</html>
