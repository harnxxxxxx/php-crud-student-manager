<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Student Records</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Student Record Manager</h2>
  <a href="create.php">Add New Student</a>
  <table>
    <tr>
      <th>ID</th><th>Name</th><th>Email</th><th>Course</th><th>Actions</th>
    </tr>
    <?php
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>
              <td>{$row['id']}</td>
              <td>{$row['name']}</td>
              <td>{$row['email']}</td>
              <td>{$row['course']}</td>
              <td>
                <a href='update.php?id={$row['id']}'>Edit</a> |
                <a href='delete.php?id={$row['id']}'>Delete</a>
              </td>
            </tr>";
    }
    ?>
  </table>
</body>
</html>
