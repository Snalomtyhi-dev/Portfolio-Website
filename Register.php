<!DOCTYPE html>
<html>
<head>
    <title>Register Student</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>

<div class="container">
<h2>Student Registration</h2>

<form action="Save_student.php" method="POST">

<input type="text" name="first_name" placeholder="First Name" required>
<input type="text" name="last_name" placeholder="Last Name" required>
<input type="email" name="email" placeholder="Email" required>

<select name="course">
    <option>Web Development</option>
    <option>Database Systems</option>
    <option>Mobile Development</option>
    <option>Networking</option>
</select>

<button type="submit">Register</button>

</form>

<a href="View_student.php">View Students</a>
<a href="Index.html">Back Home</a>

</div>

</body>
</html>