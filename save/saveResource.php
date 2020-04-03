<?php
header("Location: ../meruert.php");
$name = $_POST['name'];
$count = $_POST['count'];
$conn = mysqli_connect("127.0.0.1", "root", "", "rahmet");
if (mysqli_connect_error()) {
  die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
} else {
  $INSERT = "INSERT INTO resources (name, count) VALUES('$name', '$count')";
  if (mysqli_query($conn, $INSERT)) {
  } else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
  }
}
$conn -> close();
?>