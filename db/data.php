<?php

require "dbconfig.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname'];
    $contact = $_POST['contact'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `myfrom` (`fname`, `contact`, `message`) VALUES ('$fname','$contact', '$message')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Submitted Succesfully!";
    } else{
        echo "Not submitted";
    }
}
else{
    echo "Bad Request";
}
