<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="fallstyle.css">

	<style>
/*	table tr:hover { 
		background-color: #fadada;
	}*/
	table{
		border-collapse: collapse;
		width: 50%;
		color: #d96459;
		font-family: monospace;
		text-align: left;
	}

	table th{
		background-color: #d96459;
		color: white;
		font-size: 10px;
	}
	table td{
		font-size: 10px;
	}
	table tr
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


	//$sql = "SELECT * FROM student WHERE id = $id ";
	$sql = "SELECT * FROM laptop WHERE id = '".$_GET["id"]."' ";
	$stmt = sqlsrv_query($conn,$sql);
	//$row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC);
	$row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC)


	?>

	<h1></h1>
	<form action="Save.php" name="frmAdd" method="post">
	<table width="284" border="1">
	<tr>
	<th width="120">id</th>
	<td width="238">
	<input type="text" name="txtId" value="<?php echo $row[0];?>">
	</td></tr>
	<tr>
	<th width="120">SN</th>
	<td><input type="text" name="txtSN" value="<?php echo $row[1];?>"></td></tr>
	<tr>
	<th width="120">CPU</th>
	<td><input type="text" name="txtCPU" value="<?php echo $row[2];?>"></td></tr>
	<tr>
	<th width="120">Inches</th>
	<td><input type="text" name="txtInches" value="<?php echo $row[3];?>"></td></tr>
	<tr>
	<th width="120">MSOFFICE</th>
	<td><input type="text" name="txtMSOFFICE" value="<?php echo $row[4];?>"></td></tr>
	<tr>
	<th width="120">StudentId</th>
	<td><input type="text" name="txtStudentId" value="<?php echo $row[5];?>"></td></tr>
	<tr>
	<th width="120">returnDate</th>
	<td><input type="text" name="txtreturnDate" value="<?php echo $row[6];?>"></td></tr>
	</form>


	</table>
	
<h1></h1>
<input type="submit" name="submit" value="Save">
<!-- <input type="submit" value="Delete"> -->
</form>

</body>
</html>