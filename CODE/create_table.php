<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Creating the database</title>
    <meta charset="utf-8" />
  </head>
  <body>
    <?php
    //Check if the connection was succesfully done
    $conn = mysqli_connect("localhost", "root", "", "COVID_MEDICAL_CENTER");
    if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
    }
    else {
      echo "We did it";
    }

    $sql = "CREATE TABLE HEALTH_WORKER(DID VARCHAR(5) PRIMARY KEY, NAME VARCHAR(40), TYPE VARCHAR(10), CONTACT BIGINT(10), EXPERIENCE INT)";
    $result = mysqli_query($conn, $sql);

    $sql = "CREATE TABLE PATIENT(PID VARCHAR(10) PRIMARY KEY, NAME VARCHAR(40), GENDER VARCHAR(2), DID VARCHAR(5), CONTACT BIGINT(10), ADDRESS VARCHAR(100), FOREIGN KEY(DID) REFERENCES HEALTH_WORKER(DID))";
    $result = mysqli_query($conn, $sql);

    $sql = "CREATE TABLE DETAILS(PID VARCHAR(10), COVID BOOLEAN, ADMITTED DATE, DISCHARGED DATE, FOREIGN KEY(PID) REFERENCES PATIENT(PID))";
    $result = mysqli_query($conn, $sql);

    $sql = "CREATE TABLE RECORDS(PID VARCHAR(10), HISTORY VARCHAR(100), DIAGNOSIS VARCHAR(100), FOREIGN KEY(PID) REFERENCES PATIENT(PID))";
    $result = mysqli_query($conn, $sql);

    $sql = "CREATE TABLE ROOMS(RID VARCHAR(10), PID VARCHAR(10) REFERENCES PATIENT(PID), ROOM_TYPE INT)";
    $result = mysqli_query($conn, $sql);

    $sql = "CREATE TABLE TREATMENT(PID VARCHAR(10), TTYPE VARCHAR(20), MEDBILL INT(6), RESULT VARCHAR(30), FOREIGN KEY(PID) REFERENCES PATIENT(PID))";
    $result = mysqli_query($conn, $sql);

    $sql = "CREATE TABLE MEDICINE(CODE VARCHAR(12) PRIMARY KEY, PRICE INT)";
    $result = mysqli_query($conn, $sql);

    $sql = "CREATE TABLE BILL(BID INT PRIMARY KEY, PID VARCHAR(10), ROOM_BILL INT(6), DRBILL INT(6), MEDBILL INT(6), TOTAL_BILL INT(6), PAID INT(6), REMAINING INT(6), FOREIGN KEY(PID) REFERENCES PATIENT(PID))";
    $result = mysqli_query($conn, $sql);

    $sql = "CREATE TABLE LOGIN(USERNAME VARCHAR(50) PRIMARY KEY, PASSWORD VARCHAR(50))";
    $result = mysqli_query($conn, $sql);

    $sql = "CREATE TABLE DEATHS(PID VARCHAR(10), DEATH_DATE DATE, FOREIGN KEY(PID) REFERENCES PATIENT(PID))";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    ?>
  </body>
</html>
