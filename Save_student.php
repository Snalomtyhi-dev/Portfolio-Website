<?php
include "db.php";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$course = $_POST['course'];

$sql = "INSERT INTO students (first_name, last_name, email, course)
        VALUES ('$first_name', '$last_name', '$email', '$course')";

if(mysqli_query($conn, $sql)){
    echo "Student registered successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>

<a href="Register.php">Back</a>