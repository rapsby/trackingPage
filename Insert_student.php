<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="fallstyle.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="html2CSV.js" ></script>
	<script type="text/javascript">

	// make tr clickable
	jQuery(document).ready(function($) {
		$(".clickable-row").click(function() {
			var link =  $(this).data("href");
			var w = window.open(link, "popupWindow", "width=600, height=400, scrollbars=yes");
			var $w = $(w.document.body);
			$w.html("<textarea></textarea>");
		});
	});

</script>
</head>
<body>
	<?php
	$id = $_POST["id"];
	$username = 'FALL1';
	$password = 'qqqqqq1!';
	$hostname = '10.1.10.24';
	$dbName = 'TestDB1';

	$serverName = "10.1.10.24\\FALL1";

	$connectionInfo = array( "Database"=>$dbName, "UID" => $username, "PWD" => $password);
	$conn = sqlsrv_connect( $hostname, $connectionInfo);

	$sql = "SELECT id FROM student order by id desc";
	$stmt = sqlsrv_query($conn,$sql);
	$row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_NUMERIC);
	$id = $row[0]+1; 

	?>


	<form action="Insert_student-2.php" name="frmAdd" method="post">

	<table width="284" border="1" class="phptable">
	<tr>
	<th width="120">id</th>
	<td width="238">
	<input type="text" name="txtId" value=<?php echo $id?> readonly>
	</td></tr>
	<tr>
	<th width="120">name</th>
	<td width="238">
	<input type="text" name="txtName">
	</td></tr>
	<tr>
	<th width="120">studentNumber</th>
	<td width="238">
	<input type="text" name="txtStudentNumber">
	</td></tr>
	<tr>
	<th width="120">program</th>
	<td width="238">
	<input type="text" name="txtPro">
	</td></tr>
	<tr>
	<th width="120">phoneNumber</th>
	<td><input type="text" name="txtPhoneNumber"></td></tr>
	<th width="120">email</th>
	<td><input type="text" name="txtEmail"></td></tr>

	<input type="hidden" name="txtStartdate" >

	<input type="hidden" name="txtLSA" value="Y">

	<input type="hidden" name="txtTag">
	<tr>
	<th width="120">Notes</th>
	<td><input type="text" name="txtNotes"></td></tr>
	<input type="hidden" name="txtDocuSign" value="Y">
	<input type="hidden" name="txtCpu">
	<input type="hidden" name="txtAddtoLed">
	<input type="hidden" name="txtOrdered" value="Y">
	<input type="hidden" name="txtOnhand" value="Y">
	<input type="hidden" name="txtLenApp" value="Y">
	<input type="hidden" name="txtTimApp" value="Y">
	<input type="hidden" name="txtPickUpDate">
	<input type="hidden" name="txtShipDate">
	<input type="hidden" name="txtTrackingNumber">
	<input type="hidden" name="txtReceived" value="N">
	<input type="hidden" name="txtCompleted" value="Y">
	<input type="hidden" name="txtMSOFFICE" value="Y">
	
	<input type="hidden" name="txtReturnReceived">
	</table>

	<h1></h1>
	<input type="submit" name="submit" value="Insert">
</form>


</body>
</html>