<?php
session_start();
?>
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

	$sql = "SELECT * FROM laptop WHERE id = $id ";
	$stmt = sqlsrv_query($conn,$sql);

	
	echo '<table class="phptable" border=1 >';

	echo "<tr>
	<th>ID</th>
	<th>SN</th>
	<th>CPU</th>
	<th>Inches</th>
	<th>MSOFFICE</th>
	<th>StudentId</th>
	<th>returnDate</th>
	<th>Available</th>
	</tr>";

	while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
		echo "<tr>
		<td>$row[0]</td>
		<td>$row[1]</td>
		<td>$row[2]</td>
		<td>$row[3]</td>
		<td>$row[4]</td>
		<td>$row[5]</td>
		<td>$row[6]</td>
		<td>$row[7]</td>
		</tr>";
		

		echo "</table>";

		
	}
	include "Edit_laptop.php";
	
	?>



</body>
</html>