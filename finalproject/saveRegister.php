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

<div class="navbar">\
  <a href="home.html">HOME</a>

      
   </div>
    

  
<?php
$date = date("d-m-y");
extract($_POST)

?>

<h3>WEB APPLICATION FOR NON TERENGGANU CITIZEN</h3>
<table>
<tr><td>FULL NAME</td>
<td>:</td>
<td><b><?php print($adName) ?></b></td>
</tr>
<tr><td>IC NUMBER</td>
<td>:</td>
<td><b><?php print($IC) ?></b></td>
</tr>
<tr><td>CONTACT</td>
<td>:</td>
<td><b><?php print($member2) ?></b></td>
</tr>
<tr><td>GENDER</td>
<td>:</td>
<td><b><?php print($member3) ?></b></td>
</tr>
<tr><td>AGE</td>
<td>:</td>
<td><b><?php print($member4) ?></b></td>
</tr>
<tr><td>STATUS</td>
<td>:</td>
<td><b><?php print($member5) ?></b></td>
</tr>
<tr><td>NATION</td>
<td>:</td>
<td><b><?php print($member6) ?></b></td>
</tr>
<tr><td>RELIGION</td>
<td>:</td>
<td><b><?php print($member7) ?></b></td>
</tr>
<tr><td>ADDRESS</td>
<td>:</td>
<td><b><?php print($member8) ?></b></td>
</tr>
<tr><td>CITY</td>
<td>:</td>
<td><b><?php print($member9) ?></b></td>
</tr>
<tr><td>ZIPCODE</td>
<td>:</td>
<td><b><?php print($member10) ?></b></td>
</tr>
<tr><td>STATE</td>
<td>:</td>
<td><b><?php print($member11) ?></b></td>
</tr>
<tr><td>EMAIL</td>
<td>:</td>
<td><b><?php print($member12) ?></b></td>
</tr>
</table>

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
//create query
$sql = "INSERT INTO user (Name, IC, contact, gender, age, status, nation, religion, address, city, zipcode, state, email) 
VALUES ('$adName', '$IC', '$member2', '$member3', '$member4', '$member5', '$member6', 
'$member7', '$member8', '$member9', '$member10', '$member11', '$member12')";
//execute query
if ($conn->query($sql) === TRUE) {
echo "Your Application Has Been Saved Successfully. We Will Contact You For Further Action Within 3 Working Days.";
}
else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
//close connection
$conn->close();
?>
 <br>
 <form>
 <input type="button" name="printButton" onClick="window.print()" value="Print">
 </form>




   </body>
</html>