<!DOCTYPE html>
<html lang="en">
<head>
  <title>COVID Medical Center</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="homepages.css">
    <style>
    h2{
      font-family:Comfortaa;
      letter-spacing:1px;
    }
    .usualDiv{
      position: relative;
      height: 2000px;
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
      margin-top: 80px;
      padding: 25px 10px 0px 25px;
      color: #EFFAFF;
    }
    td{
      margin-top: 200px;
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
      margin-top: 50px;
      margin-left:0px;
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
    input[type=submit]{
      background-color: #025861;/*#025861;#03717d;*/
      border: 1.5px solid #EFFAFF;
      color: white;
      margin-top: 40px;
      margin-left: 0px;
      margin-right: 100px;
      padding-top: 7px;
      padding-bottom:5px;
      text-decoration: none;
      cursor: pointer;
      border-radius: 50px;
      width: 400px;
      height: 60px;
      font-size: 130%;
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
    <li><a href="#news"><pre id="fonter">Complaint   </pre></a></li>
    <li><a href="#news"><pre id="fonter">Contact     </pre></a></li>
  <!--<li style="float:right"><a class="active" href="#about">About</a></li>-->
  </ul>
  <!-- Horizontal Navbar ends-->

  <!-- Sidebar -->
  <ul id="sidebar" style="margin-top:44px;">
      <pre id="fonter">
      <li id="add"><a href="http://localhost/patient.php">Patient          &nbsp&nbsp&nbsp&nbsp<br /></a></li>
      <li id="add" class="active"><a href="http://localhost/record.php">Record              <br /></a></li>
      <li id="add"><a href="http://localhost/pharmacy.php">Pharmacy          <br /></a></li>
      <li id="add"><a href="http://localhost/book_a_room.php">Book a room       <br /></a></li>
      <li id="add"><a href="http://localhost/professional.php">Professionals     <br /></a></li>
      <li id="add"><a href="http://localhost/transfer_paper.php">Transfer papers  <br /></a></li>
      <li id="add"><a href="http://localhost/dischrge_paper.php">Discharge Papers <br /></a></li>
     </pre>
   </ul>
  <!-- end -->
  <br /><br/>
  <div class="usualDiv">
  <?php
 $stage = $_POST["stage"];
 if (!IsSet($stage)) {
 ?>
<form method = "POST" action = "record.php" >
 <table>
   <tr>
     <td>Please enter your query:</td>
     <td><textarea rows = "2" cols = "80" name = "query"></textarea></td>
   </tr>
   <tr>
     <input type = "hidden" name = "stage" value = "1" />
     <td><input type = "submit" value = "Submit Request" /></td>
   </tr>
 </table>
</form>
 <?php
 } else {
  $conn = mysqli_connect("localhost", "root", "", "COVID_MEDICAL_CENTER");
  $query = $_POST['query'];
   trim($query);
   $query = stripslashes($query);
   $query_html = htmlspecialchars($query);
  // Execute the query
   $result = mysqli_query($conn, $query);
   print "<table><h2> QUERY RESULTS </h2>";
    print "<tr align = 'center'>";
   // Get the number of rows in the result
    $num_rows = mysqli_num_rows($result);
   // If there are rows in the result, put them in an HTML table
    if ($num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $num_fields = mysqli_num_fields($result);
   // Produce the column labels
    $keys = array_keys($row);
    for ($index = 0; $index < $num_fields; $index++)
    print "<th>" . $keys[$index] . "</th>";
    print "</tr>";
   // Output the values of the fields in the rows
    for ($row_num = 0; $row_num < $num_rows; $row_num++) {
      if($row_num%2==0)
      {
          echo '<tr bgcolor="#037682">';
      }
      else
     {
         echo '<tr bgcolor="#2fced6">';
     }
    $values = array_values($row);
    for ($index = 0; $index < $num_fields; $index++) {
    $value = htmlspecialchars($values[$index]);
    print "<td>" . $value . "</td>";
    } //* end of for ($index ...
    print "</tr>";
    $row = mysqli_fetch_assoc($result);
    } //* end of for ($row_num ...
    } //* end of if ($num_rows ...
    else {
    print "There were no such rows in the table <br />";
    }
    print "</table>";
    } // end of the else clause for if (!IsSet($stage...
    ?>
  </body>
</html>
