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

  <h2>Yo, RJ<br /><br /><br /><br /></h2>
  <p style="margin-left:200px;">Hello</p>

  <form action = "http://localhost/p2_answer.php" method = "post">
    <table style="margin-top:300px;">
        <tr>
          <th> Professional ID </th>
          <td><input type = "text" name = "did" size = "30" /></td>
        </tr>
        <tr>
          <th>Name</th>
          <td><input type = "text" name = "name" size = "30" /></td>
        </tr>
        <tr>
          <label for="Type">Select the type of Professional:</label>
          <select name="type" size="10">
            <option value="Visiting">Visiting</option>
            <option value="Trainee">Trainee</option>
            <option value="Permanent">Permanent</option>
            <option value="Nurse">Nurse</option>
            <option value="Professor">Professor</option>
            <option value="Sanitation worker">Sanitation worker</option>
            <option value="Testing">Testing</option>
            <option value="Transportation">Transportation</option>
          </select><br>
        </tr>
        <tr>
          <th>Contact</th>
          <td><input type = "text" name = "contact" size = "30" /></td>
        </tr>
        <tr>
          <th>Experience</th>
          <td><input type = "text" name = "experience" size = "2" /></td>
        </tr>
        <tr>
          <th></th>
          <td><input type = "submit" value = "Add" class = "koo"/></td>
       </tr>
     </table>
    <!--$result = mysqli_query($conn, $sql);-->
  </body>
</html>
