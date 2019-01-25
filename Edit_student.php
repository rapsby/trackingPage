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
	<th width="50">ID</th>
	<td width="50">
	<input type="text" name="txtId" value="<?php echo $row[0];?>">
	</td></tr>
	<tr>
	<th width="50">Name</th>
	<td><input type="text" name="txtName" value="<?php echo $row[1];?>"></td></tr>
	<tr>
	<th width="50">Student Number</th>
	<td><input type="text" name="txtStudentNumber" value="<?php echo $row[2];?>"></td></tr>
	<tr>
	<th width="50">Student Program</th>
	<td><input type="text" name="txtPro" value="<?php echo $row[3];?>"></td></tr>
	<tr>
	<th width="50">Phone Number</th>
	<td><input type="text" name="txtPhoneNumber" value="<?php echo $row[4];?>"></td></tr>
	<tr>
	<th width="50">Email</th>
	<td><input type="text" name="txtEmail" value="<?php echo $row[5];?>"></td></tr>
	<tr>
	<th width="50">Student Startdate</th>
	<td><input type="text" name="txtStartdate" value="<?php echo $row[6];?>"></td></tr>
	<!-- <tr>
	<th width="50">Service Contract</th>
	<?php
				
				// echo (\strpos($row[7], 'Y') !== false) ?
				// '<td>
				// <input type="radio" name="txtLSA" checked value="Y">
				// <label for="txtLSA">Y</label>
				// <input type="radio" name="txtLSA" value="N">
				// <label for="txtLSA">N</label>
				// </td>'
				// :
				// '<td>
				// <input type="radio" name="txtLSA" value="Y">
				// <label for="txtLSA">Y</label>
				// <input type="radio" name="txtLSA" checked value="N">
				// <label for="txtLSA">N</label>
				// </td>';

				?></tr> -->
	<tr>
	<th width="50">Service Tag</th>
	<td><input type="text" name="txtTag" value="<?php echo $row[8];?>"></td></tr>
	<tr>
	<th width="50">Notes</th>
	<td><input type="text" name="txtNotes" value="<?php echo $row[9];?>"></td></tr>
	<tr>
	<th width="50">DocuSign</th>
	<?php
				
				echo (\strpos($row[10], 'Y') !== false) ?
				'<td>
				<input type="radio" name="txtDocuSign" checked value="Y">
				<label for="txtDocuSign">Y</label>
				<input type="radio" name="txtDocuSign" value="N">
				<label for="txtDocuSign">N</label>
				</td>'
				:
				'<td>
				<input type="radio" name="txtDocuSign" value="Y">
				<label for="txtDocuSign">Y</label>
				<input type="radio" name="txtDocuSign" checked value="N">
				<label for="txtDocuSign">N</label>
				</td>';

				?></tr>
	<tr>
	<th width="50">CPU</th>
	<td><input type="text" name="txtCpu" value="<?php echo $row[11];?>"></td></tr>
	<tr>
	<th width="50">Added to Ledger</th>
	<td><input type="text" name="txtAddtoLed" value="<?php echo $row[12];?>"></td></tr>
	<tr>
	<th width="50">Ordered</th>
	<?php
				
				echo (\strpos($row[13], 'Y') !== false) ?
				'<td>
				<input type="radio" name="txtOrdered" checked value="Y">
				<label for="txtOrdered">Y</label>
				<input type="radio" name="txtOrdered" value="N">
				<label for="txtOrdered">N</label>
				</td>'
				:
				'<td>
				<input type="radio" name="txtOrdered" value="Y">
				<label for="txtOrdered">Y</label>
				<input type="radio" name="txtOrdered" checked value="N">
				<label for="txtOrdered">N</label>
				</td>';

				?></tr>
	<tr>
	<th width="50">Onhand</th>
	<?php
				
				echo (\strpos($row[14], 'Y') !== false) ?
				'<td>
				<input type="radio" name="txtOnhand" checked value="Y">
				<label for="txtOnhand">Y</label>
				<input type="radio" name="txtOnhand" value="N">
				<label for="txtOnhand">N</label>
				</td>'
				:
				'<td>
				<input type="radio" name="txtOnhand" value="Y">
				<label for="txtOnhand">Y</label>
				<input type="radio" name="txtOnhand" checked value="N">
				<label for="txtOnhand">N</label>
				</td>';

				?></tr>
	<tr>
	<th width="50">Len Approval</th>
	<?php
				
				echo (\strpos($row[15], 'Y') !== false) ?
				'<td>
				<input type="radio" name="txtLenApp" checked value="Y">
				<label for="txtLenApp">Y</label>
				<input type="radio" name="txtLenApp" value="N">
				<label for="txtLenApp">N</label>
				</td>'
				:
				'<td>
				<input type="radio" name="txtLenApp" value="Y">
				<label for="txtLenApp">Y</label>
				<input type="radio" name="txtLenApp" checked value="N">
				<label for="txtLenApp">N</label>
				</td>';

				?></tr>
	<tr>
	<th width="50">Tim Approval</th>
	<?php
				
				echo (\strpos($row[16], 'Y') !== false) ?
				'<td>
				<input type="radio" name="txtTimApp" checked value="Y">
				<label for="txtTimApp">Y</label>
				<input type="radio" name="txtTimApp" value="N">
				<label for="txtTimApp">N</label>
				</td>'
				:
				'<td>
				<input type="radio" name="txtTimApp" value="Y">
				<label for="txtTimApp">Y</label>
				<input type="radio" name="txtTimApp" checked value="N">
				<label for="txtTimApp">N</label>
				</td>';

				?></tr>
	<tr>
	<th width="50">Pick Up Date</th>
	<td><input type="text" name="txtPickUpDate" value="<?php echo $row[17];?>"></td></tr>
	<tr>
	<th width="50">Ship Date</th>
	<td><input type="text" name="txtShipDate" value="<?php echo $row[18];?>"></td></tr>
	<tr>
	<th width="50">Tracking Number</th>
	<td><input type="text" name="txtTrackingNumber" value="<?php echo $row[19];?>"></td></tr>
	<tr>
	<th width="50">Received</th>
	<?php
				
				echo (\strpos($row[20], 'Y') !== false) ?
				'<td>
				<input type="radio" name="txtReceived" checked value="Y">
				<label for="txtReceived">Y</label>
				<input type="radio" name="txtReceived" value="N">
				<label for="txtReceived">N</label>
				</td>'
				:
				'<td>
				<input type="radio" name="txtReceived" value="Y">
				<label for="txtReceived">Y</label>
				<input type="radio" name="txtReceived" checked value="N">
				<label for="txtReceived">N</label>
				</td>';

				?></tr>
	<tr>
	<th width="50">Completed</th>
	<?php
				
				echo (\strpos($row[21], 'Y') !== false) ?
				'<td>
				<input type="radio" name="txtCompleted" checked value="Y">
				<label for="txtCompleted">Y</label>
				<input type="radio" name="txtCompleted" value="N">
				<label for="txtCompleted">N</label>
				</td>'
				:
				'<td>
				<input type="radio" name="txtCompleted" value="Y">
				<label for="txtCompleted">Y</label>
				<input type="radio" name="txtCompleted" checked value="N">
				<label for="txtCompleted">N</label>
				</td>';

				?></tr>
	<tr>
	<th width="50">MS OFFICE</th>
	<?php
				
				echo (\strpos($row[22], 'Y') !== false) ?
				'<td>
				<input type="radio" name="txtMSOFFICE" checked value="Y">
				<label for="txtMSOFFICE">Y</label>
				<input type="radio" name="txtMSOFFICE" value="N">
				<label for="txtMSOFFICE">N</label>
				</td>'
				:
				'<td>
				<input type="radio" name="txtMSOFFICE" value="Y">
				<label for="txtMSOFFICE">Y</label>
				<input type="radio" name="txtMSOFFICE" checked value="N">
				<label for="txtMSOFFICE">N</label>
				</td>';

				?></tr>
	<tr>
	<th width="50">Return Received</th>
	<td><input type="text" name="txtReturnReceived" value="<?php echo $row[23];?>"></td></tr>
	
	</form>
	


	</table>
	
<h1></h1>
<input type="submit" name="submit" value="Save">
<input type="button" name="Closeseseses" value="Close" onclick="javascript:window.close();">
<!-- <input type="submit" value="Delete"> -->

</body>
</html>