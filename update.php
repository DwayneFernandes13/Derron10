<?php
include "conn.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
  $id = $_POST['id'];
   $title = $_POST['title'];
   $description = $_POST['description'];
   $status = $_POST['status'];
   $created_at = $_POST['created_at'];

  $sql = "UPDATE tasks SET title = $title, status = $status WHERE id = $id";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: index.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

?>
