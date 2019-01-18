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


	$sql = "SELECT * FROM student WHERE id = $id ";
	$stmt = sqlsrv_query($conn,$sql);

	
	echo '<table class="phptable" border=1 >';

	echo "<tr>
	<th>ID</th>
	<th>NAME</th>
	<th>Program</th>
	<th>PhoneNumber</th>
	<th>email</th>
	<th>Start Date</th>
	<th>LSA</th>
	<th>tag</th>
	<th>Notes</th>
	<th>DocuSign</th>
	<th>Cpu</th>
	<th>AddtoLed</th>
	<th>Ordered</th>
	<th>Onhand</th>
	<th>LenApp</th>
	<th>TimApp</th>
	<th>PickUpDate</th>
	<th>ShipDate</th>
	<th>TrackingNumber</th>
	<th>Received</th>
	<th>Completed</th>
	<th>MSOFFICE</th>
	<th>ReturnReceived</th>
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
		<td>$row[8]</td>
		<td>$row[9]</td>
		<td>$row[10]</td>
		<td>$row[11]</td>
		<td>$row[12]</td>
		<td>$row[13]</td>
		<td>$row[14]</td>
		<td>$row[15]</td>
		<td>$row[16]</td>
		<td>$row[17]</td>
		<td>$row[18]</td>
		<td>$row[19]</td>
		<td>$row[20]</td>
		<td>$row[21]</td>
		<td>$row[22]</td>
		</tr>";
		

		echo "</table>";

	}
	include "Edit_student.php";
	
	?>

</body>
</html>