<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="fallstyle.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
	// make tr clickable
	jQuery(document).ready(function($) {
		$(".clickable-row").click(function() {
			var r = confirm("Are you sure for return?");
			if(r == true){
				var link =  $(this).data("href");
				
				var w = window.open(link, "popupWindow", "width=600, height=400, scrollbars=yes");
				var $w = $(w.document.body);
				$w.html("<textarea></textarea>");
			}
			else
			{
			}
		});
	});
	function submit_form() {
		document.frm.target = 'ifrm';
		document.frm.action = 'downloadexcel.php';
		document.frm.submit();
	}
</script>
</head>
<body>
	

	<?php
	session_start();
	?>

	<?php
	$name = $_POST["name"];
	$username = 'FALL1';
	$password = 'qqqqqq1!';
	$hostname = '10.1.10.24';
	$dbName = 'TestDB1';
	$serverName = "10.1.10.24\\FALL1";
	$connectionInfo = array( "Database"=>$dbName, "UID" => $username, "PWD" => $password);
	$conn = sqlsrv_connect( $hostname, $connectionInfo);
	
	$sql = "SELECT * FROM student s, reservation r WHERE s.trackingNumber = r.trackingNumber and s.studentNumber=$studentNumber";
	$stmt = sqlsrv_query($conn,$sql);
	$row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC);
	$trackingNumber = $row[19];

	$sql = "SELECT * FROM reservation WHERE trackingNumber=$trackingNumber ";
	$stmt = sqlsrv_query($conn,$sql);
	$row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC);
	$laptopid = $row[3];

	$sql = "SELECT * FROM student WHERE Completed='N' AND name LIKE '%".$name."%'";
	$stmt = sqlsrv_query($conn,$sql);

	echo '<table class="phptable" border=1 >';
	echo "<tr>
	<th>id</th>
	<th>name</th>
	<th>StudentNumber</th>
	<th>TrackingNumber</th>
	<th>Received</th>
	<th>Completed</th>
	</tr>";

	while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
		// <tr class='clickable-row' data-href='reservationlaptop.php?id=$row[0]'>
		echo "
		<tr class='clickable-row' data-href='returnlaptop.php?id=$laptopid&studentNumber=$studentNumber'>
		<td>$row[0]</td>
		<td>$row[1]</td>
		<td>$row[2]</td>
		<td>$row[19]</td>
		<td>$row[20]</td>
		<td>$row[21]</td>
		</tr>";
	}
	echo "</table>";
	?>

</body>
</html>