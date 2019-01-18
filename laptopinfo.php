<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="fallstyle.css">

	<style>
	.phptable tr:hover { 
		background-color: #fadada;
	}
	.phptable{
		border-collapse: collapse;
		width: 100%;
		color: #d96459;
		font-family: monospace;
		text-align: left;
	}

	.phptable th{
		background-color: #d96459;
		color: white;
		font-size: 12px;
	}
	.phptable td{
		font-size: 12px;
	}
	.phptable tr
	{
		text-decoration:none ;
	}

</style>
<!--
<style>

.phptable{
	background-color: yellow;
	border: 1px solid #444444;
	border-color: green;

}
</style>
-->

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

//$sql = "SELECT * FROM student";
//$sql = "SELECT * FROM student WHERE name LIKE 'John' ";


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
		</tr>";
	

	echo "</table>";

	//$test = array($row[0],$row[1],$row[2]);
	//$_POST["test"] = $test;
	
}
	include "Edit_laptop.php";
	
	?>

	
	<!-- <a href="Edit.php?id=<?php echo $row['id'];?>">Edit</a> -->




</body>
</html>