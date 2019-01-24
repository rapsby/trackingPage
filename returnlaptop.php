<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="fallstyle.css">

</head>
<body>

	<?php
	session_start();
	$id = $_GET["id"];	//laptop
	echo $id;
	$studentNumber = $_GET["studentNumber"];
	$username = 'FALL1';
	$password = 'qqqqqq1!';
	$hostname = '10.1.10.24';
	$dbName = 'TestDB1';
	$serverName = "10.1.10.24\\FALL1";

	$connectionInfo = array( "Database"=>$dbName, "UID" => $username, "PWD" => $password);
	$conn = sqlsrv_connect( $hostname, $connectionInfo);

	$date = date("ymd");

	// update reservation
	$sql = "UPDATE reservation SET returnDate=$date WHERE laptopid = $id";
	$stmt = sqlsrv_query($conn,$sql);

	// update laptop
	$sql = "UPDATE laptop SET studentId=null, available='Y' WHERE id = $id";
	$stmt = sqlsrv_query($conn,$sql);

	// update student
	$sql = "UPDATE student SET Ordered='N', Onhand='N',  Received = 'N', Completed='Y', ReturnReceived=$date WHERE studentNumber = $studentNumber";
	$stmt = sqlsrv_query($conn,$sql);


	$bool = "";
	while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
		$bool = $row[0];
		
	}

	echo "success updating"
	?>

	<input type="button" name="Closeseseses" value="Close" onclick="javascript:window.close();">



</body>
</html>