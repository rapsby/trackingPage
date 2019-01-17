<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="fallstyle.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
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

	function submit_form() {
		document.frm.target = 'ifrm';
		document.frm.action = 'edward.php';
		document.frm.submit();
	}
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
	$name = $_POST["name"];
	$username = 'FALL1';
	$password = 'qqqqqq1!';
	$hostname = '10.1.10.24';
	$dbName = 'TestDB1';
	$serverName = "10.1.10.24\\FALL1";
	$connectionInfo = array( "Database"=>$dbName, "UID" => $username, "PWD" => $password);
	$conn = sqlsrv_connect( $hostname, $connectionInfo);
//$sql = "SELECT * FROM student";
//$sql = "SELECT * FROM student WHERE name LIKE 'John' ";
	$sql = "SELECT * FROM student WHERE name LIKE '%".$name."%' ";
	$stmt = sqlsrv_query($conn,$sql);
	echo '<table class="phptable" border=1 >';
	echo "<tr>
	<th>ID</th>
	<th>NAME</th>
	<th>Program</th>
	<th>Phone Number</th>
	<th>email</th>

	</tr>";
	/*
	<th>Start Date</th>
	<th>LSA</th>
	<th>tag</th>
	<th>Notes</th>
	<th>DocuSign</th>
	<th>Cpu</th>
	<th>AddtoLed</th>
	<th>Ordered</th>
	<th>Onhand</th>
	<th>LenApp</th>
	<th>TimApp</th>
	<th>PickUpDate</th>
	<th>ShipDate</th>
	<th>TrackingNumber</th>
	<th>Received</th>
	<th>Completed</th>
	<th>MSOFFICE</th>
	<th>ReturnReceived</th>
	*/
	while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
		echo "<tr class='clickable-row' data-href='studentinfo.php?id=$row[0]'>
		<td>$row[0]</td>
		<td>$row[1]</td>
		<td>$row[2]</td>
		<td>$row[3]</td>
		<td>$row[4]</td>
		</tr>";
		/*
		<td>$row[5]</td>
		<td>$row[6]</td>
		<td>$row[7]</td>
		<td>$row[8]</td>
		<td>$row[9]</td>
		<td>$row[10]</td>
		<td>$row[11]</td>
		<td>$row[12]</td>
		<td>$row[13]</td>
		<td>$row[14]</td>
		<td>$row[15]</td>
		<td>$row[16]</td>
		<td>$row[17]</td>
		<td>$row[18]</td>
		<td>$row[19]</td>
		<td>$row[20]</td>
		*/
	}
	echo "</table>";
	?>

	<form method='post' name='frm' >

		<input type='hidden' name='sql' >
		<input value="Download" type="button" onclick="submit_form()">
	</form>

</body>
</html>