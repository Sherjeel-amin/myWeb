<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$database = "user_info";

$conn = mysqli_connect($servername, $username, $password,$database);

if(!$conn){
    die ("Not connected");
}else{
    echo "Success! ";
}

?>