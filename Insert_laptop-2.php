<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="fallstyle.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	

</head>
<body>
	<?php
	$id = $_POST["id"];
	$username = 'FALL1';
	$password = 'qqqqqq1!';
	$hostname = '10.1.10.24';
	$dbName = 'TestDB1';

	$serverName = "10.1.10.24\\FALL1";

	$connectionInfo = array( "Database"=>$dbName, "UID" => $username, "PWD" => $password);
	$conn = sqlsrv_connect( $hostname, $connectionInfo);

	
// $sql = "SELECT * FROM student";
// $sql = "SELECT * FROM student WHERE name LIKE 'John' ";


	$sql = "INSERT INTO laptop(id,SN,CPU,inches,MSOFFICE,StudentId,available) values(?,?,?
	,?,?,?,?)";

	$params = array(
		$_POST["txtId"],
		$_POST["txtSN"],
		$_POST["txtCPU"],
		$_POST["txtInches"],
		$_POST["txtMSOFFICE"],
		$_POST["txtStudentId"],
		$_POST["txtAvailable"]
	);
	$stmt = sqlsrv_query($conn,$sql,$params);

	if( $stmt === false ) {

	//die(print("error"))
		die( print_r( "Record insert fail"));

	}

	else
	{
		echo "Record insert successfully";

	}

	?>
</body>
</html>