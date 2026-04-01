<?php
include "db.php";
$result = mysqli_query($conn, "SELECT * FROM courses");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Courses</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2 style="text-align:center;">Available Courses</h2>

<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Code</th>
<th>Description</th>
<th>Credits</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)){
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['course_name']}</td>
            <td>{$row['course_code']}</td>
            <td>{$row['description']}</td>
            <td>{$row['credits']}</td>
          </tr>";
}
?>

</table>

<a href="courses.php">Add Course</a>
<a href="index.html">Back Home</a>

</body>
</html>