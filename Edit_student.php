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

	$sql ="SELECT * FROM student WHERE id = '".$_GET["id"]."' ";
	$stmt = sqlsrv_query($conn,$sql);
	$row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC)


	?>
	<h1></h1>
	<form action="Save_student.php" name="frmAdd" method="post">
	<table  border="1" class="phptable">
	<tr>
	<th width="50">id</th>
	<td width="50">
	<input type="text" name="txtId" value="<?php echo $row[0];?>">
	</td></tr>
	<tr>
	<th width="50">name</th>
	<td><input type="text" name="txtName" value="<?php echo $row[1];?>"></td></tr>
	<tr>
	<th width="50">studentNumber</th>
	<td><input type="text" name="txtStudentNumber" value="<?php echo $row[2];?>"></td></tr>
	<tr>
	<th width="50">pro</th>
	<td><input type="text" name="txtPro" value="<?php echo $row[3];?>"></td></tr>
	<tr>
	<th width="50">phoneNumber</th>
	<td><input type="text" name="txtPhoneNumber" value="<?php echo $row[4];?>"></td></tr>
	<tr>
	<th width="50">email</th>
	<td><input type="text" name="txtEmail" value="<?php echo $row[5];?>"></td></tr>
	<tr>
	<th width="50">startdate</th>
	<td><input type="text" name="txtStartdate" value="<?php echo $row[6];?>"></td></tr>
	<tr>
	<th width="50">LSA</th>
	<td><input type="text" name="txtLSA" value="<?php echo $row[7];?>"></td></tr>
	<tr>
	<th width="50">tag</th>
	<td><input type="text" name="txtTag" value="<?php echo $row[8];?>"></td></tr>
	<tr>
	<th width="50">Notes</th>
	<td><input type="text" name="txtNotes" value="<?php echo $row[9];?>"></td></tr>
	<tr>
	<th width="50">DocuSign</th>
	<td><input type="text" name="txtDocuSign" value="<?php echo $row[10];?>"></td></tr>
	<tr>
	<th width="50">Cpu</th>
	<td><input type="text" name="txtCpu" value="<?php echo $row[11];?>"></td></tr>
	<tr>
	<th width="50">AddtoLed</th>
	<td><input type="text" name="txtAddtoLed" value="<?php echo $row[12];?>"></td></tr>
	<tr>
	<th width="50">Ordered</th>
	<td><input type="text" name="txtOrdered" value="<?php echo $row[13];?>"></td></tr>
	<tr>
	<th width="50">Onhand</th>
	<td><input type="text" name="txtOnhand" value="<?php echo $row[14];?>"></td></tr>
	<tr>
	<th width="50">LenApp</th>
	<td><input type="text" name="txtLenApp" value="<?php echo $row[15];?>"></td></tr>
	<tr>
	<th width="50">TimApp</th>
	<td><input type="text" name="txtTimApp" value="<?php echo $row[16];?>"></td></tr>
	<tr>
	<th width="50">PickUpDate</th>
	<td><input type="text" name="txtPickUpDate" value="<?php echo $row[17];?>"></td></tr>
	<tr>
	<th width="50">ShipDate</th>
	<td><input type="text" name="txtShipDate" value="<?php echo $row[18];?>"></td></tr>
	<tr>
	<th width="50">TrackingNumber</th>
	<td><input type="text" name="txtTrackingNumber" value="<?php echo $row[19];?>"></td></tr>
	<tr>
	<th width="50">Received</th>
	<td><input type="text" name="txtReceived" value="<?php echo $row[20];?>"></td></tr>
	<tr>
	<th width="50">Completed</th>
	<td><input type="text" name="txtCompleted" value="<?php echo $row[21];?>"></td></tr>
	<tr>
	<th width="50">MSOFFICE</th>
	<td><input type="text" name="txtMSOFFICE" value="<?php echo $row[22];?>"></td></tr>
	<tr>
	<th width="50">ReturnReceived</th>
	<td><input type="text" name="txtReturnReceived" value="<?php echo $row[23];?>"></td></tr>
	<th width="50">test radio checkbox</th>
	<td>
		<input type="radio" name="a">
		<label for="a">Y</label>
		<input type="radio" name="a">
		<label for="a">N</label>
	</td></tr>
	</form>
	


	</table>
	
<h1></h1>
<input type="submit" name="submit" value="Save">
<input type="button" name="Closeseseses" value="Close" onclick="javascript:window.close();">
<!-- <input type="submit" value="Delete"> -->

</body>
</html>