<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="fallstyle.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	
</head>
<body>
	<?php
	$username = 'FALL1';
	$password = 'qqqqqq1!';
	$hostname = '10.1.10.24';
	$dbName = 'TestDB1';
	$serverName = "10.1.10.24\\FALL1";

	$connectionInfo = array( "Database"=>$dbName, "UID" => $username, "PWD" => $password);
	$conn = sqlsrv_connect( $hostname, $connectionInfo);

	$sql = "SELECT id FROM laptop order by id desc";
	$stmt = sqlsrv_query($conn,$sql);
	$row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_NUMERIC);
	$id = $row[0]+1;
	?>

	<form action="Insert_laptop-2.php" name="frmAdd" method="post">

	<table width="284" border="1" class="phptable">
	<tr>
	<th width="120">ID</th>
	<td width="238">
	<input type="text" name="txtId" value=<?php echo $id ?>>
	</td></tr>
	<tr>
	<th width="120">SN</th>
	<td width="238">
	<input type="text" name="txtSN">
	</td></tr>
	<tr>
	<th width="120">CPU</th>
	<td width="238">
	<select name="txtCPU">
  <option value="i3">i3</option>
  <option value="i5">i5</option>
  <option value="i7">i7</option>
  <option value="성욱씨의비밀병기">Audi</option>
</select>

	</td></tr>
	<tr>
	<th width="120">Inches</th>
	<td><input type="text" name="txtInches"></td></tr>
	<th width="120">MSOFFICE</th>
	<td><input type="text" name="txtMSOFFICE" value='Y'></td></tr>
	<tr>
	<th width="120">StudentId</th>
	<td><input type="text" name="txtStudentId"></td></tr>
	<tr>
	<th width="120">returnDate</th>
	<td><input type="text" name="txtReturnDate"></td></tr>
	<tr>
	<th width="120">Available</th>
	<td><input type="text" name="txtAvailable" value = 'Y'></td></tr>	
	</table>

	<h1></h1>
	<input type="submit" name="submit" value="Insert">
</form>


</body>
</html>