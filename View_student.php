<?php
include "db.php";
$result = mysqli_query($conn, "SELECT * FROM students");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>

<h2 style="text-align:center;">Registered Students</h2>

<table>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Course</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)){
    echo "<tr>
            <td>{$row['first_name']}</td>
            <td>{$row['last_name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['course']}</td>
          </tr>";
}
?>

</table>

<a href="Register.php">Register New Student</a>
<a href="Index.html">Back Home</a>

</body>
</html>