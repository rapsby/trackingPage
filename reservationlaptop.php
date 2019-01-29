<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="fallstyle.css">

</head>
<body>

	<?php
	session_start();

	$id = $_GET["id"];	//laptop
	$sid = $_GET["sid"];	//student ID
	$studentNumber = $_GET["studentNumber"];
	$username = 'FALL1';
	$password = 'qqqqqq1!';
	$hostname = '10.1.10.24';
	$dbName = 'TestDB1';
	$serverName = "10.1.10.24\\FALL1";

	$connectionInfo = array( "Database"=>$dbName, "UID" => $username, "PWD" => $password);
	$conn = sqlsrv_connect( $hostname, $connectionInfo);

	$sql = "SELECT id FROM student WHERE studentNumber=$studentNumber";
	$stmt = sqlsrv_query($conn,$sql);
	$row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC);
	$sid = $row[0];


	$date = date("ymd");
	/* return
	1. search trackingNumber in student
	2. search laptop id in reservation table using trackingnNumber
	3. update laptop set available = 'Y', student id = null
	*/
	$sql = "SELECT trackingNumber from student where Id=$sid";
	$stmt = sqlsrv_query($conn,$sql);
	$row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_NUMERIC);
	$trackingNumber = $row[0];

	$sql = "SELECT laptopId from reservation where trackingNumber=$trackingNumber";
	$stmt = sqlsrv_query($conn,$sql);
	$row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_NUMERIC);
	$laptopId = $row[0];

	$sql = "UPDATE laptop set studentid=null, available='Y', returnDate=$date where id=$laptopId";
	$stmt = sqlsrv_query($conn,$sql);

	$sql = "SELECT * FROM reservation order BY id DESC";
	$stmt = sqlsrv_query($conn,$sql);
	$row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC);

	$rid = $row[0]+1;	//next reservation id
	$trackingNumber = $row[1];	//tracking number
	$trackingNumber = str_pad($rid,"5","0",STR_PAD_LEFT);
	$trackingNumber =date("ymd").$trackingNumber;
	
	$sql = "INSERT INTO reservation VALUES ($rid, $trackingNumber, $sid, $id, $date, null)";
	$stmt = sqlsrv_query($conn,$sql);

	$sql = "UPDATE laptop SET studentid=$sid, available='N' WHERE id = $id";
	$stmt = sqlsrv_query($conn,$sql);

	$sql = "SELECT CPU, inches, SN FROM laptop WHERE id = $id";
	$stmt = sqlsrv_query($conn,$sql);
	$sn;
	while( $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_NUMERIC) ) {
		$cpu = $row[0];
		$inches = $row[1];
		$sn = $row[2];
	}
	$spec = $cpu.' - '.$inches;


	$sql = "UPDATE student SET Cpu='$spec', Ordered='Y', Onhand='Y', PickUpDate=$date, ShipDate=$date, TrackingNumber=$trackingNumber, Received='Y', Completed='N', ReturnReceived=NULL, tag='$sn' WHERE id = $sid";
	$stmt = sqlsrv_query($conn,$sql);

	$sql = "SELECT * FROM reservation WHERE id = $rid";
	$stmt = sqlsrv_query($conn,$sql);

	echo '<table class="phptable" border=1 >';
	echo "<tr>
	<th>Tracking Number</th>
	<th>Reservation Date</th>
	<th>Return Date</th>
	</tr>";

	while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
		echo "
		<tr class='clickable-row' data-href='reservationlaptop.php?id=$row[0]&studentNumber=$studentNumber&sid=$sid'>
		<td>$row[1]</td>
		<td>$row[4]</td>
		<td>$row[5]</td>
		</tr>";
	}
	echo "</table>";

	?>
	<script type="text/javascript">
		var newUrl = 'info_student.php?sid=<?php echo $sid?>';
		window.location = newUrl;
	</script>

</body>
</html>