<?php
session_start();
?>
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

	$sql = "UPDATE laptop SET 
	SN = ?,
	CPU = ?,
	inches = ?,
	MSOFFICE = ?,
	studentId = ?,
	returnDate = ?,
	available = ?
	WHERE id = ?";

	$params = array(
		$_POST["txtSN"],
		$_POST["txtCPU"],
		$_POST["txtInches"],
		$_POST["txtMSOFFICE"],
		$_POST["txtStudentId"],
		$_POST["txtReturnDate"],
		$_POST["txtAvailable"],
		$_POST["txtId"]
	);

	$stmt = sqlsrv_query($conn,$sql,$params);

	if( $stmt === false ) {
		die( print_r( sqlsrv_errors(), true));
	}

	else
	{
		echo "Record update successfully<br/>";
		
	}
	?>
	

<input type="button" name="Closeseseses" value="Close" onclick="javascript:window.close();">
</body>
</html>