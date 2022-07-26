<!DOCTYPE html>
<head>
<meta charset="utf-8"/>
</head>
<body>
<?php
  $conn = mysqli_connect("localhost", "root", "", "COVID_MEDICAL_CENTER");
  $pid='22';
  $sql = 'SELECT P.PID, P.NAME, P.GENDER, P.DID, P.CONTACT, P.ADDRESS FROM PATIENT P WHERE P.PID=?';
  $stmt= $conn->prepare($sql);
  $stmt->bind_param("s", $pid);
  $stmt->execute();
  $result = $stmt->get_result(); // get the mysqli result
  //$user = $result->fetch_assoc(); // fetch the data
  ?>
  <br />
  <div id="usualDiv">
  <?php
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "pid: " . $row["PID"]. " - Name: " . $row["NAME"]. " " . $row["GENDER"]. " " . $row["DID"]." " . $row["CONTACT"]." " . $row["ADDRESS"];
    }
  } else {
    echo "0 results";
  }
?>
</body>
</html>








<!-- <?php
$pid = 500;
  $conn = mysqli_connect("localhost", "root", "", "COVID_MEDICAL_CENTER");

$sql = 'SELECT P.PID, P.NAME, P.GENDER, P.DID, P.CONTACT, P.ADDRESS FROM PATIENT P';
$result = mysqli_query($conn, $sql);
?>
<p>YEAS</p>
<div style="font-size:120%;">
<?php
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["PID"]. " - value: " . $row["NAME"]."<br>";
  }
} else {
  echo "0 results";
}		 
mysqli_close($conn);
?>
</body>
</html>

, D.COVID, D.ADMITTED, D.DISCHARGED FROM PATIENT P, DETAILS D WHERE P.PID=D.PID AND P.PID=?-->