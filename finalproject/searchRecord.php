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
background-image: url("");



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
  <a href="adminMenu.php">Back To Main Menu</a>
  
 

</div>


<div style="background-image: url(flower.jpg);"><br>
    <img src="logojata.png" alt="Trulli" width="250" height="150" class="center"><br>
    <style>
    img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    }
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    }
    table.center {
    margin-left: auto; 
    margin-right: auto;
    }
    th {text-align: center;}
    </style> 
   
<table style="width:40%" class="center" >
<tr style="background-color: rgb(223, 222, 222);">

<th><br><p style="color:rgb(241, 9, 9)">Search Information<br></p>
<form action="displayRecord.php" method="post">


  NAME : <input name="name" type="text" size="30" >
<input type="submit" name="Submit" value="Search">
<br><br><br><BR><BR>     
  
</tr>
</table>
<br><br><br><br><br><br><br><br><br><BR><BR><br>

</body>
</html>