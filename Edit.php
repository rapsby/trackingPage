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
	$sql = "SELECT * FROM student WHERE id = '".$_GET["id"]."' ";
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
	<th width="120">name</th>
	<td><input type="text" name="txtName" value="<?php echo $row[1];?>"></td></tr>
	<tr>
	<th width="120">pro</th>
	<td><input type="text" name="txtPro" value="<?php echo $row[2];?>"></td></tr>
	<tr>
	<th width="120">phoneNumber</th>
	<td><input type="text" name="txtPhoneNumber" value="<?php echo $row[3];?>"></td></tr>
	<tr>
	<th width="120">email</th>
	<td><input type="text" name="txtEmail" value="<?php echo $row[4];?>"></td></tr>
	<tr>
	<th width="120">startdate</th>
	<td><input type="text" name="txtStartdate" value="<?php echo $row[5];?>"></td></tr>
	<tr>
	<th width="120">LSA</th>
	<td><input type="text" name="txtLSA" value="<?php echo $row[6];?>"></td></tr>
	<tr>
	<th width="120">tag</th>
	<td><input type="text" name="txtTag" value="<?php echo $row[7];?>"></td></tr>
	<tr>
	<th width="120">Notes</th>
	<td><input type="text" name="txtNotes" value="<?php echo $row[8];?>"></td></tr>
	<tr>
	<th width="120">DocuSign</th>
	<td><input type="text" name="txtDocuSign" value="<?php echo $row[9];?>"></td></tr>
	<tr>
	<th width="120">Cpu</th>
	<td><input type="text" name="txtCpu" value="<?php echo $row[10];?>"></td></tr>
	<tr>
	<th width="120">AddtoLed</th>
	<td><input type="text" name="txtAddtoLed" value="<?php echo $row[11];?>"></td></tr>
	<tr>
	<th width="120">Ordered</th>
	<td><input type="text" name="txtOrdered" value="<?php echo $row[12];?>"></td></tr>
	<tr>
	<th width="120">Onhand</th>
	<td><input type="text" name="txtOnhand" value="<?php echo $row[13];?>"></td></tr>
	<tr>
	<th width="120">LenApp</th>
	<td><input type="text" name="txtLenApp" value="<?php echo $row[14];?>"></td></tr>
	<tr>
	<th width="120">TimApp</th>
	<td><input type="text" name="txtTimApp" value="<?php echo $row[15];?>"></td></tr>
	<tr>
	<th width="120">PickUpDate</th>
	<td><input type="text" name="txtPickUpDate" value="<?php echo $row[16];?>"></td></tr>
	<tr>
	<th width="120">ShipDate</th>
	<td><input type="text" name="txtShipDate" value="<?php echo $row[17];?>"></td></tr>
	<tr>
	<th width="120">TrackingNumber</th>
	<td><input type="text" name="txtTrackingNumber" value="<?php echo $row[18];?>"></td></tr>
	<tr>
	<th width="120">Received</th>
	<td><input type="text" name="txtReceived" value="<?php echo $row[19];?>"></td></tr>
	<tr>
	<th width="120">Completed</th>
	<td><input type="text" name="txtCompleted" value="<?php echo $row[20];?>"></td></tr>
	<tr>
	<th width="120">MSOFFICE</th>
	<td><input type="text" name="txtMSOFFICE" value="<?php echo $row[21];?>"></td></tr>
	<tr>
	<th width="120">ReturnReceived</th>
	<td><input type="text" name="txtReturnReceived" value="<?php echo $row[22];?>"></td></tr>

	</form>

	</table>
	
<h1></h1>
<input type="submit" name="submit" value="Save">
</form>




</body>
</html>