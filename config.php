<?php
    $host = "srv-pleskdb23.ps.kz";
	$dbUsername = "rahme_login";
	$dbPassword = "nonsmoker123";
    $dbname = "rahmetm1_login";
    
    $connection = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	} else {
        echo "Connected"
		$conn->close();
	}
?>