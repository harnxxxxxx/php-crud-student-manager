<?php include("config.php"); ?>
<?php
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit Student</title>
</head>
<body>
  <h2>Edit Student</h2>
  <form method="POST">
    Name: <input type="text" name="name" value="<?= $row['name'] ?>"><br>
    Email: <input type="email" name="email" value="<?= $row['email'] ?>"><br>
    Course: <input type="text" name="course" value="<?= $row['course'] ?>"><br>
    <button type="submit" name="submit">Update</button>
  </form>

<?php
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $course = $_POST['course'];
  mysqli_query($conn, "UPDATE students SET name='$name', email='$email', course='$course' WHERE id=$id");
  header("Location: index.php");
}
?>
</body>
</html>
