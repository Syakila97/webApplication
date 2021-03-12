<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.navbar {
  overflow: hidden;
  background-color: #333; 
}


.bg-img {
  /* The image used */
background-image: url("flower.jpg");



  min-height: 625px;


  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.subnav {
  float: left;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: red;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: red;
  width: 100%;
  z-index: 1;
}

.subnav-content a {
  float: left;
  color: white;
  text-decoration: none;
}

.subnav-content a:hover {
  background-color: #eee;
  color: black;
}

.subnav:hover .subnav-content {
  display: block;
}
</style>
</head>
<body>
<div class="bg-img">
<div class="navbar">
  <a href="home.html">HOME</a>
  <a href="searchRecord.php">Search Record</a>
  <a href="deleteList.php">Delete Record</a>
  <a href="logout.php">Log Out</a>
  <li style="float:right"><a class="active" href="home.html">STUDENT INFORMATION DATABASE WEB SYSTEM</a></li>
</div>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registerpds";
   
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); }

$bil=$_REQUEST['id'];
$query = "SELECT * from user where bil='".$bil."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">

<h1>Update Record</h1>

<div>
<form name="form" method="post" action="updateRecord.php"> 
<input type="hidden" name="new" value="1" />
<input name="bil" type="hidden" value="<?php echo $row['bil'];?>" />
<p><input type="text" name="Name" value="<?php echo $row['Name'];?>" /></p>
<p><input type="text" name="IC" value="<?php echo $row['IC'];?>" /></p>
<p><input type="text" name="contact" value="<?php echo $row['contact'];?>" /></p>
<p><input type="text" name="gender" value="<?php echo $row['gender'];?>" /></p>
<p><input type="text" name="age" value="<?php echo $row['age'];?>" /></p>
<p><input type="text" name="status" value="<?php echo $row['status'];?>" /></p>
<p><input type="text" name="nation" value="<?php echo $row['nation'];?>" /></p>
<p><input type="text" name="religion" value="<?php echo $row['religion'];?>" /></p>
<p><input type="text" name="address" value="<?php echo $row['address'];?>" /></p>
<p><input type="text" name="city" value="<?php echo $row['city'];?>" /></p>
<p><input type="text" name="zipcode" value="<?php echo $row['zipcode'];?>" /></p>
<p><input type="text" name="state" value="<?php echo $row['state'];?>" /></p>
<p><input type="text" name="email" value="<?php echo $row['email'];?>" /></p>

<p><input name="submit" type="submit" value="Update" /></p>
</form>

</div>
</div>
</body>
</html>





</body>
</html>