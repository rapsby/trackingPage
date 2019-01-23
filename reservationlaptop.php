<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="fallstyle.css">


</head>
<body>

	<?php
	$id = $_GET["id"];
	$username = 'FALL1';
	$password = 'qqqqqq1!';
	$hostname = '10.1.10.24';
	$dbName = 'TestDB1';

	$serverName = "10.1.10.24\\FALL1";

	$connectionInfo = array( "Database"=>$dbName, "UID" => $username, "PWD" => $password);
	$conn = sqlsrv_connect( $hostname, $connectionInfo);


	$sql = "UPDATE laptop SET CPU='i999', Inches='167' WHERE id = $id";
	$stmt = sqlsrv_query($conn,$sql);
	$sql = "SELECT rownum FROM (SELECT id FROM reservation order BY id DESC) WHERE rownum=1";
	$row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC);
	echo $sql;






	echo "okey"


	
	?>



</body>
</html>