<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="fallstyle.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">

	</script>
</head>
<body>

	<?php
	session_start();
	$name = $_POST["name"];
	$studentNumber = $_POST["studentNumber"];
	$_SESSION["studentNumber"];
	$username = 'FALL1';
	$password = 'qqqqqq1!';
	$hostname = '10.1.10.24';
	$dbName = 'TestDB1';
	$serverName = "10.1.10.24\\FALL1";
	$connectionInfo = array( "Database"=>$dbName, "UID" => $username, "PWD" => $password);
	$conn = sqlsrv_connect( $hostname, $connectionInfo);

	// $sql = "SELECT COUNT(*) FROM student WHERE name LIKE '%".$name."%' AND studentNumber=$studentNumber AND  Received='Y' and Completed='N' ";
	
	// $sql = "SELECT COUNT(*) FROM student as a JOIN reservation as b on a.trackingNumber = b.trackingNumber";
	// $sql = "SELECT COUNT(*) FROM student WHERE name LIKE '%".$name."%' AND studentNumber=$studentNumber AND  Completed='Y'";
	// $sql = "SELECT COUNT(*) FROM student as a JOIN reservation as b on a.trackingNumber = b.trackingNumber";
	$sql = "SELECT COUNT(*) FROM student a join reservation b on a.trackingNumber = b.trackingNumber WHERE name LIKE '%".$name."%' AND studentNumber=$studentNumber AND  Completed='N'";
	
	$stmt = sqlsrv_query($conn,$sql);
	$bool = "";
	//}
	while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
		$bool = $row[0];
		#echo $row[0];
	}
	if($bool == 1)
	{	

		#echo "success!";
		include "result_laptop24.php";
	}
	else
	{
		echo "<script>alert('Invalid name or student number or already return');</script>";
	}
	?>



	

</body>
</html>