<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Student</title>
</head>
<body>
  <h2>Add New Student</h2>
  <form method="POST">
    Name: <input type="text" name="name"><br>
    Email: <input type="email" name="email"><br>
    Course: <input type="text" name="course"><br>
    <button type="submit" name="submit">Save</button>
  </form>

<?php
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $course = $_POST['course'];
  mysqli_query($conn, "INSERT INTO students (name, email, course) VALUES ('$name','$email','$course')");
  header("Location: index.php");
}
?>
</body>
</html>
