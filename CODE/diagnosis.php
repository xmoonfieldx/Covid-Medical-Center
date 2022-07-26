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
      font-size: 150%;
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
    <script>
    function showHint(str) {
    if (str.length == 0) {
      document.getElementById("txtHint").innerHTML = "";
      return;
    }
    else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
          }
        }
      xmlhttp.open("GET", "gethint.php?q="+str, true);
      xmlhttp.send();
      }
    }
    function showHt(str) {
    if (str.length == 0) {
      document.getElementById("txt").innerHTML = "";
      return;
    }
    else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txt").innerHTML = this.responseText;
          }
        }
      xmlhttp.open("GET", "getht.php?q="+str, true);
      xmlhttp.send();
      }
    }
    </script>
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


  <form id = "login" action = "http://localhost/diagnosis_answer.php" method = "post">
    <div class = "usualDiv">
      <table style="margin-top:40px;">
         <tr>
           <td> Patient ID: </td>
           <td><input type = "text" name = "pid" size = "10" /></td>
         </tr>
         <tr>
           <td> History: </td>
           <td><input type = "text" name = "history" size = "100" id="txt1" onkeyup="showHint(this.value)"/></td>
         </tr>
         <tr>
           <td style="font-size:120%;">(suggestions- <span id="txtHint"></span>)</td>
         </tr>
         <tr>
           <td> Symptoms: </td>
           <td><input type = "text" name = "diagnosis" size = "100" id="txt2" onkeyup="showHt(this.value)"/></td>
         </tr>
         <tr>
           <td style="font-size:120%;">(suggestions- <span id="txt"></span>)</td>
         </tr>
         <tr>
           <td></td>
           <td><input type = "submit" value = "Enter" class = "koo"/></td>
        </tr>
       </table>
     </div>
   </form>
  </body>
</html>
