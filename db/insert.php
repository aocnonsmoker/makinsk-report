<?php
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
if (!empty($username) || !empty($password) || !empty($email)) {
	$host = "srv-pleskdb23.ps.kz";
	$dbUsername = "rahme_login";
	$dbPassword = "nonsmoker123";
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
			echo "Вы успешно зарегистрировались";
		} else {
			echo "Пользователь с таким именем уже зарегистрирован, пожалуйста введите другое имя";
		}
		$stmt->close();
		$conn->close();
	}
} else {
	echo "Необходимо заполнить все поля";
	die();
}
?>