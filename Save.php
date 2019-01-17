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
	font-size: 11px;
}
.phptable td{
	font-size: 10px;
}
.phptable tr
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


	$sql = "UPDATE student SET 
	 name = ?,
	 pro = ?,
	 phoneNumber = ?,
	 email = ?,
	 startdate = ?,
	 LSA = ? ,
	 tag = ? ,
	 Notes = ?,
	 DocuSign = ?,
	 Cpu = ?,
	 AddtoLed = ?,
	 Ordered = ?,
	 Onhand = ?,
	 LenApp = ?,
	 TimApp = ?,
	 PickUpDate = ?,
	 ShipDate = ?,
	 TrackingNumber = ?,
	 Received = ?,
	 Completed = ?,
	 MSOFFICE = ?,
	 ReturnReceived = ?
	 WHERE id = ?";

	$params = array($_POST["txtName"]
		,$_POST["txtPro"],
		$_POST["txtPhoneNumber"],
		$_POST["txtEmail"],
		$_POST["txtStartdate"],
		$_POST["txtLSA"],
		$_POST["txtTag"],
		$_POST["txtNotes"],
		$_POST["txtDocuSign"],
		$_POST["txtCpu"],
		$_POST["txtAddtoLed"],
		$_POST["txtOrdered"],
		$_POST["txtOnhand"],
		$_POST["txtLenApp"],
		$_POST["txtTimApp"],
		$_POST["txtPickUpDate"],
		$_POST["txtShipDate"],
		$_POST["txtTrackingNumber"],
		$_POST["Received"],
		$_POST["txtCompleted"],
		$_POST["txtMSOFFICE"],
		$_POST["txtReturnReceived"],
		$_POST["txtId"]
		);
	$stmt = sqlsrv_query($conn,$sql,$params);

	if( $stmt === false ) {

	die( print_r( sqlsrv_errors(), true));

	}

	else
	{
	echo "Record update successfully";

	}
	?>

</body>
</html>