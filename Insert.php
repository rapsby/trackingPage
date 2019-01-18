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
<style>
table tr:hover { 
	background-color: #fadada;
}
table{
	border-collapse: collapse;
	width: 30%;
	color: #d96459;
	font-family: monospace;
	text-align: left;
}

table th{
	background-color: #d96459;
	color: white;
	font-size: 11px;
}
table td{
	font-size: 10px;
}
table tr
{
	text-decoration:none ;
}

</style>
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

	
//$sql = "SELECT * FROM student";
//$sql = "SELECT * FROM student WHERE name LIKE 'John' ";

	//$sql = "insert into student(No_,FirstName) values(?, ?)";

	// $params = array($_POST["txtName"]
	// 	,$_POST["txtPro"],
	// 	$_POST["txtPhoneNumber"],
	// 	$_POST["txtEmail"],
	// 	$_POST["txtStartdate"],
	// 	$_POST["txtLSA"],
	// 	$_POST["txtTag"],
	// 	$_POST["txtNotes"],
	// 	$_POST["txtDocuSign"],
	// 	$_POST["txtCpu"],
	// 	$_POST["txtAddtoLed"],
	// 	$_POST["txtOrdered"],
	// 	$_POST["txtOnhand"],
	// 	$_POST["txtLenApp"],
	// 	$_POST["txtTimApp"],
	// 	$_POST["txtPickUpDate"],
	// 	$_POST["txtShipDate"],
	// 	$_POST["txtTrackingNumber"],
	// 	$_POST["Received"],
	// 	$_POST["txtCompleted"],
	// 	$_POST["txtMSOFFICE"],
	// 	$_POST["txtReturnReceived"],
	// 	$_POST["txtId"]
	// 	);
	// $stmt = sqlsrv_query($conn,$sql,$params);

	// if( $stmt === false ) {

	// die( print_r( sqlsrv_errors(), true));

	// }

	// else
	// {
	// echo "Record update successfully";

	// }
	?>
	<form action="Insert-2.php" name="frmAdd" method="post">

	<table width="284" border="1">
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
	<th width="120">pro</th>
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
	<td><input type="text" name="txtStartdate"></td></tr>
	<tr>
	<th width="120">LSA</th>
	<td><input type="text" name="txtLSA"></td></tr>
	<tr>
	<th width="120">tag</th>
	<td><input type="text" name="txtTag"></td></tr>
	<tr>
	<th width="120">Notes</th>
	<td><input type="text" name="txtNotes"></td></tr>
	<tr>
	<th width="120">DocuSign</th>
	<td><input type="text" name="txtDocuSign"></td></tr>
	<tr>
	<th width="120">CPU</th>
	<td><input type="text" name="txtCpu"></td></tr>
	<tr>
	<th width="120">AddtoLed</th>
	<td><input type="text" name="txtAddtoLed"></td></tr>
	<tr>
	<th width="120">Ordered</th>
	<td><input type="text" name="txtOrdered"></td></tr>
	<tr>
	<th width="120">Onhand</th>
	<td><input type="text" name="txtOnhand"></td></tr>
	<tr>
	<th width="120">LenApp</th>
	<td><input type="text" name="txtLenApp"></td></tr>
	<tr>
	<th width="120">TimApp</th>
	<td><input type="text" name="txtTimApp"></td></tr>
	<tr>
	<th width="120">PickUpDate</th>
	<td><input type="text" name="txtPickUpDate"></td></tr>
	<tr>
	<th width="120">ShipDate</th>
	<td><input type="text" name="txtShipDate"></td></tr>
	<tr>
	<th width="120">TrackingNumber</th>
	<td><input type="text" name="txtTrackingNumber"></td></tr>
	<tr>
	<th width="120">Received</th>
	<td><input type="text" name="txtReceived"></td></tr>
	<tr>
	<th width="120">Completed</th>
	<td><input type="text" name="txtCompleted"></td></tr>
	<tr>
	<th width="120">MSOFFICE</th>
	<td><input type="text" name="txtMSOFFICE"></td></tr>
	<tr>
	<th width="120">ReturnReceived</th>
	<td><input type="text" name="txtReturnReceived"></td></tr>
	</table>

	<h1></h1>
	<input type="submit" name="submit" value="Insert">
</form>


</body>
</html>