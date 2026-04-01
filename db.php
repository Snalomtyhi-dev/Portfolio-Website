<?php
$conn = mysqli_connect("localhost", "root", "", "student_app");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>