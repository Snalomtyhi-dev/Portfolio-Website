<?php
include "db.php";

$name = $_POST['course_name'];
$code = $_POST['course_code'];
$desc = $_POST['description'];
$credits = $_POST['credits'];

$sql = "INSERT INTO courses (course_name, course_code, description, credits)
        VALUES ('$name', '$code', '$desc', '$credits')";

if(mysqli_query($conn, $sql)){
    echo "Course added successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>

<a href="Courses.php">Back</a>