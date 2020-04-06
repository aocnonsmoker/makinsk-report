<?php
header("Location: ../meruert.php");
$date = $_POST['date'];
$name = $_POST['name'];
$telephone = $_POST['telephone'];
$list = $_POST['list'];
$amount = $_POST['amount'];
$priceEach = $_POST['priceEach'];
$conn = mysqli_connect("127.0.0.1", "root", "", "rahmet");
if (mysqli_connect_error()) {
  die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
} else {
  $INSERT = "INSERT INTO orders (name, telephone, date, product, amount, priceEach) VALUES('$name', '$telephone', '$date', '$list', '$amount', '$priceEach')";
  if (mysqli_query($conn, $INSERT)) {
  } else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
  }
}
$conn -> close();
?>