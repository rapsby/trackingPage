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
	?>
	<form action="Insert_student-2.php" name="frmAdd" method="post">

	<table width="284" border="1" class="phptable">
	<tr>
	<th width="120">id</th>
	<td width="238">
	<input type="text" name="txtId">
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
	<tr>
	<th width="120">startdate</th>
	<td><input type="text" name="txtStartdate" ></td></tr>
	<tr>
	<th width="120">Lanfall Service Agreement</th>
	<td><input type="text" name="txtLSA"></td></tr>
	<tr>
	<th width="120">Service tag</th>
	<td><input type="text" name="txtTag"></td></tr>
	<tr>
	<th width="120">Notes</th>
	<td><input type="text" name="txtNotes"></td></tr>
	<!-- <tr>
	<th width="120">DocuSign</th>
	<td> --><input type="hidden" name="txtDocuSign" value="Y"><!-- </td></tr> -->
	<tr>
	<th width="120">CPU</th>
	<td><input type="text" name="txtCpu"></td></tr>
	<tr>
	<th width="120">Added to Ledger</th>
	<td><input type="text" name="txtAddtoLed"></td></tr>
	<!-- <tr>
	<th width="120">Ordered</th>
	<td> --><input type="hidden" name="txtOrdered" value="Y"><!-- </td></tr> -->
	<!-- <tr>
	<th width="120">Onhand</th>
	<td> --><input type="hidden" name="txtOnhand" value="Y"><!-- </td></tr> -->
	<!-- <tr>
	<th width="120">LenApp</th>
	<td> --><input type="hidden" name="txtLenApp" value="Y"><!-- </td></tr>
 -->	<!-- <tr>
	<th width="120">TimApp</th>
	<td> --><input type="hidden" name="txtTimApp" value="Y"><!-- </td></tr> -->
	<tr>
	<th width="120">PickUpDate</th>
	<td><input type="text" name="txtPickUpDate"></td></tr>
	<tr>
	<th width="120">ShipDate</th>
	<td><input type="text" name="txtShipDate"></td></tr>
	<tr>
	<th width="120">TrackingNumber</th>
	<td><input type="text" name="txtTrackingNumber"></td></tr>
	<!-- <tr> -->
	<!-- <th width="120">Received</th> -->
	<!-- <td> -->
	<input type="hidden" name="txtReceived" value="N"><!-- </td> --><!-- </tr> -->
	<!-- <tr> -->
	<!-- <th width="120">Completed</th> -->
	<!-- <td> -->
	<input type="hidden" name="txtCompleted" value="Y"><!-- </td> --><!-- </tr> -->
	<!-- <tr>
	<th width="120">MSOFFICE</th>
	<td> --><input type="hidden" name="txtMSOFFICE" value="Y"><!-- </td></tr> -->
	<tr>
	<th width="120">ReturnReceived</th>
	<td><input type="text" name="txtReturnReceived"></td></tr>
	</table>

	<h1></h1>
	<input type="submit" name="submit" value="Insert">
</form>


</body>
</html>