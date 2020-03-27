<?php

    $host = "srv-pleskdb23.ps.kz";
	$dbUsername = "rahme_login";
	$dbPassword = "nonsmoker123";
    $dbname = "rahmetm1_login";
    
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()) {
        echo "Did not connected"
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	} else {
        $result = mysqli_query($conn, "SELECT * FROM 'register'")
        echo "Name: $result['username'] <br/> Email: $result['email'] <br/>"
		$conn->close();
	}
?>