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
  background-attachment: fixed;
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

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}


.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 9px 11px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */


</style>
</head>
<body>
<div class="bg-img">
<div class="navbar">
  <a href="adminMenu.php">Back To Main Page</a>
  
 

</div>


<h3 align="center">WELCOME TO TERENGGANU APPLICATION</h3>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registerpds";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
//create and execute query
$sql = "SELECT * FROM user";
$result = $conn->query($sql);
//check if records were returned
if ($result->num_rows > 0) {
//create a table to display the record
echo '<table cellpadding=1 cellspacing=0 border=1 align="center" style="background-color:rgba(0, 0, 0, 0.5); color: white;">';
echo '<tr><td align="center"><b>BIL</b></td><br>



<td align="center"><b>NAME</b></td>
<td align="center"><b>IC</b></td>
<td align="center"><b>CONTACT</b></td>
<td align="center"><b>GENDER</b></td>
<td align="center"><b>AGE</b></td>
<td align="center"><b>STATUS</b></td>
<td align="center"><b>NATION</b></td>
<td align="center"><b>RELIGION</b></td>
<td align="center"><b>ADDRESS</b></td>
<td align="center"><b>CITY</b></td>
<td align="center"><b>ZIPCODE</b></td>
<td align="center"><b>STATE</b></td>
<td align="center"><b>EMAIL</b></td>
<td><a type="button" href="searchRecord.php" class="button">Search</a></li></button></td>
<td><a type="button" href="deleteList.php" class="button">Delete</a></li></button></td>

</tr>';

// output data of each row
while($row = $result->fetch_assoc()) {
echo '<tr>';
echo '<td align="center">'.$row["bil"].'</td>';
echo '<td align="center">'.$row["Name"].'</td>';
echo '<td align="center">'.$row["IC"].'</td>';
echo '<td align="center">'.$row["contact"].'</td>';
echo '<td align="center">'.$row["gender"].'</td>';
echo '<td align="center">'.$row["age"].'</td>';
echo '<td align="center">'.$row["status"].'</td>';
echo '<td align="center">'.$row["nation"].'</td>';
echo '<td align="center">'.$row["religion"].'</td>';
echo '<td align="center">'.$row["address"].'</td>';
echo '<td align="center">'.$row["city"].'</td>';
echo '<td align="center">'.$row["zipcode"].'</td>';
echo '<td align="center">'.$row["state"].'</td>';
echo '<td align="center">'.$row["email"].'</td>';
}
}
else {
echo "0 results"; //if no record found in the database
}
//close connection
$conn->close();

?>






</body>
</html>