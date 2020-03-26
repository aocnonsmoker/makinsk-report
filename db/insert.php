<?php
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
if (!empty($username) || !empty($password) || !empty($email)) {
	$host = "https://195.210.46.100";
	$dbUsername = "rahme_login";
	$dbPassword = "Kazakhstan01";
	$dbname = "rahmetm1_login";

	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	if (mysqli_connect_error()) {
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	} else {
		$SELECT = "SELECT username From register Where username = ? Limit 1";
		$INSERT = "INSERT Into register (username, password, email) values(?, ?, ?)";

		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s", $username);
		$stmt->execute();
		$stmt->bind_result($username);
		$stmt->store_result();
		$rnum = $stmt->num_rows;
		if ($rnum == 0) {
			$stmt->close();
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("sss", $username, $password, $email);
			$stmt-> execute();
			echo "New record inserted succesfully";
		} else {
			echo "Someone already registered using this username";
		}
		$stmt->close();
		$conn->close();
	}
} else {
	echo "All field are required";
	die();
}
?>