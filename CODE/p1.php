<!DOCTYPE html>
<html lang="en">
<head>
  <title>COVID Medical Center</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="homepages.css">
</head>
<body>
  <!--Navigation bar -->
    <ul>
      <li><img src="shorts_logo.png" alt="logo" style="width:30%;" /></li>
      <li><a href="#news"><pre>Sign In     </pre></a></li>
      <li><a href="#news"><pre>Complaint   </pre></a></li>
      <li><a href="#news"><pre>Contact     </pre></a></li>
    <!--<li style="float:right"><a class="active" href="#about">About</a></li>-->
    </ul>

  <!-- Sidebar -->
    <!--<ul id="sidebar">
      <pre>
      <li id="add" class="active"><a href="#news">New Patient      <br /></a></li>
      <li id="add"><a href="#news">Record           <br /></a></li>
      <li id="add"><a href="#news">Pharmacy         <br /></a></li>
      <li id="add"><a href="#news">Book a room      <br /></a></li>
      <li id="add"><a href="#news">Professionals    <br /></a></li>
      <li id="add"><a href="#news">Transfer papers  <br /></a></li>
      <li id="add"><a href="#news">Discharge Papers <br /></a></li>
     </pre>
   </ul> -->

  <!-- buttons -->
   <form action="http://localhost/view_single_record.php" method="post" >
    <button type="submit">View single record</button>
   </form>
   <form action="http://localhost/view_record.php" method="post" >
    <button type="submit">View all patient records</button>
   </form>
   <form action="http://localhost/details.php" method="post" >
    <button type="submit">Enter results</button>
   </form>
   <form action="http://localhost/assign_doctor.php" method="post" >
    <button type="submit">Assign doctor</button>
   </form>
  <!-- end -->

  <!-- sub buttons -->
    <form action="http://localhost/p1.php" method="post" >
     <button type="submit">View professionals on board</button>
    </form>
    <form action="http://localhost/p2.php" method="post" >
     <button type="submit">Add a professional</button>
    </form>
  <!-- end -->

  <?php
  $conn = mysqli_connect("localhost", "root", "", "COVID_MEDICAL_CENTER");

  $sql = "SELECT DID, NAME, TYPE, CONTACT, EXPERIENCE FROM HEALTH_WORKER GROUP BY TYPE";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "DID: " . $row["DID"]. " - Name: " . $row["NAME"]. " " . $row["TYPE"]. " " . $row["CONTACT"]." " . $row["EXPERIENCE"]." ";
    }
  } else {
    echo "0 results";
  }
  mysqli_close($conn);
  ?>

  </body>
</html>
