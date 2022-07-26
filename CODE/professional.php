<!DOCTYPE html>
<html lang="en">
<head>
  <title>COVID Medical Center</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="homepages.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <style>
    .usualDiv{
      position: relative;
      height: 1000px;
      width: 1380px;
      margin-top: 0px;
      margin-right: 100px;
      margin-bottom: 0px;
      margin-left: 150px;
      <!--display: flex;-->
      <!--align-items: center;-->
      justify-content: center;
      background-size: 50%;
    }

    .usualDiv::before{
      content: "";
      position: absolute;
      top: -30px;
      right: 10px;
      bottom: 5px;
      left: 0px;
      background-color: rgba(0,0,0,0.2);
      z-index:-1;
      display: inline-block;
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
      font-size: 130%;
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
    input[type=radio]{
      font-size:150%;
    }
    </style>
</head>
<body ng-app="">
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
  <ul id="sidebar" style="margin-top:-37px;">
      <pre id="fonter">
      <li id="add"><a href="http://localhost/patient.php">Patient          &nbsp&nbsp&nbsp&nbsp<br /></a></li>
      <li id="add"><a href="http://localhost/record.php">Record              <br /></a></li>
      <li id="add"><a href="http://localhost/pharmacy.php">Pharmacy          <br /></a></li>
      <li id="add"><a href="http://localhost/book_a_room.php">Book a room       <br /></a></li>
      <li id="add" class="active"><a href="http://localhost/professional.php">Professionals     <br /></a></li>
      <li id="add"><a href="http://localhost/transfer_paper.php">Transfer papers  <br /></a></li>
      <li id="add"><a href="http://localhost/dischrge_paper.php">Discharge Papers <br /></a></li>
     </pre>
   </ul>
  <!-- end -->
  <div ng-switch="myVar" style="margin-top:83px; margin-left:100px;">
  <div ng-switch-when="Trainee">
     <img src="Trainee.png" style="height:99.9%; width:99.9%;">
  </div>
  <div ng-switch-when="Permanent">
     <img src="Permanent.png" style="height:99.9%; width:99.9%;">
  </div>
  <div ng-switch-when="Nurse">
     <img src="Nurse.png" style="height:99.9%; width:99.9%;">
  </div>
  <div ng-switch-when="Sanitation">
     <img src="Sanitation.png" style="height:99.9%; width:99.9%;">
  </div>
  <div ng-switch-when="Testing">
     <img src="Testing.png" style="height:99.9%; width:99.9%;">
  </div>
  <div ng-switch-when="Transportation">
     <img src="Transportation.png" style="height:99.9%; width:99.9%;">
  </div>
  </div>

  <div class="usualDiv">
    <br/>
    <form action = "http://localhost/p2_answer.php" method = "post">
      <table style="margin-top:-70px;">
          <tr>
            <td> Professional ID </td>
            <td><input type = "text" name = "did" size = "30" /></td>
          </tr>
          <tr>
            <td>Name</td>
            <td><input type = "text" name = "name" size = "30" /></td>
          </tr>
          <tr>
            <td>Select the type of Professional<br/></td>
          </tr>
          <tr>
            <td>
            <input type="radio" ng-model="myVar" value="Trainee" name="type">Trainee&nbsp&nbsp&nbsp
            <input type="radio" ng-model="myVar" value="Permanent" name="type">Permanent&nbsp&nbsp&nbsp
            <input type="radio" ng-model="myVar" value="Nurse" name="type">Nurse
            </td>
            <td>
            <input type="radio" ng-model="myVar" value="Sanitation" name="type">Sanitation Worker&nbsp&nbsp&nbsp
            <input type="radio" ng-model="myVar" value="Testing" name="type">Testing&nbsp&nbsp&nbsp
            <input type="radio" ng-model="myVar" value="Transportation" name="type">Transportation
          </td>
          </tr>
          <tr>
            <td>Contact</td>
            <td><input type = "text" name = "contact" size = "30" /></td>
          </tr>
          <tr>
            <td>Experience</td>
            <td><input type = "text" name = "experience" size = "2" /></td>
          </tr>
          <tr>
            <th></th>
            <td><input type = "submit" value = "Add" class = "koo"/></td>
         </tr>
       </table>
  </div>
  </body>
</html>
