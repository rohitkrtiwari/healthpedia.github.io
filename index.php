
<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "sessionpractical";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    echo " Connection failed ";
}else{
    echo " Connected sucessfully ";
}

?>
