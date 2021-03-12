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

    extract($_POST);

    // Attempt update query execution
    $sql = "UPDATE user SET name='".$Name."', IC='".$IC."', contact='".$contact."', gender='".$gender."', age='".$age."', status='".$status."', nation='".$nation."', 
    religion='".$religion."', address='".$address."', city='".$city."', zipcode='".$zipcode."', state='".$state."',
    email='".$email."' WHERE bil='".$bil."'";

    if(mysqli_query($conn, $sql)){
        echo "Records were updated successfully.</br></br>
        <a href='listrecord.php'>View Updated Record</a>";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
     
    // Close connection
    mysqli_close($conn);
    ?>