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

	$sql = "SELECT * FROM laptop WHERE id = '".$_GET["id"]."' ";
	$stmt = sqlsrv_query($conn,$sql);
	$row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC);


	?>
	<h1></h1>
	<form action="Save_laptop.php" name="frmAdd" method="post">
		<table  border="1" class="phptable">

			<tr>
				<th width="50">ID</th>
				<td width="50">
					<input type="text" name="txtId" value="<?php echo $row[0];?>">
				</td>
			</tr>
			<tr>
				<th width="50">Serial Number</th>
				<td><input type="text" name="txtSN" value="<?php echo $row[1];?>"></td>
			</tr>
			<tr>
				<th width="50">CPU</th>
				<td><input type="text" name="txtCPU" value="<?php echo $row[2];?>"></td>
			</tr>
			<tr>
				<th width="50">Inches</th>
				<td><input type="text" name="txtInches" value="<?php echo $row[3];?>"></td>
			</tr>
			<tr>
				<th width="50">MS OFFICE</th>
				<?php
				
				echo (\strpos($row[4], 'Y') !== false) ?
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

				?>
			</tr>
			<tr>
				<th width="50">Student Id</th>
				<td><input type="text" name="txtStudentId" value="<?php echo $row[5];?>"></td>
			</tr>
			<tr>
				<th width="50">Return Date</th>
				<td><input type="text" name="txtreturnDate" value="<?php echo $row[6];?>"></td>
			</tr>
			<tr>	
				<th width="50">Available</th>
				<?php
				
				echo (\strpos($row[7], 'Y') !== false) ?
				'<td>
				<input type="radio" name="txtAvailable" checked value="Y">
				<label for="txtAvailable">Y</label>
				<input type="radio" name="txtAvailable" value="N">
				<label for="txtAvailable">N</label>
				</td>'
				:
				'<td>
				<input type="radio" name="txtAvailable" value="Y">
				<label for="txtAvailable">Y</label>
				<input type="radio" name="txtAvailable" checked value="N">
				<label for="txtAvailable">N</label>
				</td>';

				?>


				<!--
				<td>
					<input type="radio" name="txtAvailable" checked>
					<label for="txtAvailable">Y</label>
					<input type="radio" name="txtAvailable" checked>
					<label for="txtAvailable">N</label>
				</td>
			-->
		</tr>
	</form>


</table>

<h1></h1>
<input type="submit" name="submit" value="Save">
<input type="button" name="Closeseseses" value="Close" onclick="javascript:window.close();">

</form>

</body>
</html>