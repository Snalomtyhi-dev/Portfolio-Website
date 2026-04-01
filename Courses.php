<!DOCTYPE html>
<html>
<head>
    <title>Courses</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>

<div class="container">
<h2>Course Management</h2>

<form action="Save_course.php" method="POST">

<input type="text" name="course_name" placeholder="Course Name" required>
<input type="text" name="course_code" placeholder="Course Code" required>
<input type="text" name="description" placeholder="Description" required>
<input type="number" name="credits" placeholder="Credits" required>

<button type="submit">Add Course</button>

</form>

<a href="View_courses.php">View Courses</a>
<a href="Index.html">Back Home</a>

</div>

</body>
</html>