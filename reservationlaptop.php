<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="fallstyle.css">

</head>
<body>

	<?php
	session_start();
	

	$id = $_GET["id"];	//laptop
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
	$sid = $studentNumber;

	$sql = "SELECT * FROM reservation order BY id DESC";
	$stmt = sqlsrv_query($conn,$sql);
	$row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC);

	$rid = $row[0]+1;	//reservation id
	$trackingNumber = $row[1];	//tracking number
	$trackingNumber = str_pad($rid,"5","0",STR_PAD_LEFT);
	$trackingNumber =date("ymd").$trackingNumber;
	$date = date("ymd");
 

	while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
		 
 
		if($row[0]==$id){

			echo $row[0];
			echo $row[0];
			echo $row[0];
			echo $row[0];
			$sql = "SELECT id FROM laptop where studentid=$sid";
			$stmt = sqlsrv_query($conn,$sql);
			$row2 = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC);
			$l_id = $row2[0]; 

	
			$sql = "UPDATE laptop SET studentid='$id', available='Y' WHERE id = $l_id";
			// $sql = "UPDATE laptop SET studentid=" ", available='Y' WHERE id = $l_id";
			$stmt = sqlsrv_query($conn,$sql);

			$sql = "UPDATE laptop SET studentid=$sid, available='N' WHERE id = $id";
			$stmt = sqlsrv_query($conn,$sql);

			$sql = "UPDATE reservation SET id=$rid, trackingNumber=$trackingNumber, studentId = $sid, laptopId=$id, pickupDate= $date, returnDate = null WHERE id = $id";
			$stmt = sqlsrv_query($conn,$sql);

			$sql = "UPDATE student SET Ordered='Y', Onhand='Y', PickUpDate=$date, ShipDate=$date, trackingNumber=$trackingNumber, received='Y', completed='N', ReturnReceived=NULL WHERE id = $sid";
			$stmt = sqlsrv_query($conn,$sql);


		}

		else{

			$sql = "INSERT INTO reservation VALUES ($rid, $trackingNumber, $sid, $id, $date, null)";
			$stmt = sqlsrv_query($conn,$sql);
			
			$sql = "UPDATE laptop SET studentid=$sid, available='N' WHERE id = $id";
			$stmt = sqlsrv_query($conn,$sql);

			$sql = "UPDATE student SET Ordered='Y', Onhand='Y', PickUpDate=$date, ShipDate=$date, trackingNumber=$trackingNumber, received='Y', completed='N', ReturnReceived=NULL WHERE id = $sid";
			$stmt = sqlsrv_query($conn,$sql);
		}
		
	}


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
		<tr class='clickable-row' data-href='reservationlaptop.php?id=$row[0]'>
		<td>$row[1]</td>
		<td>$row[4]</td>
		<td>$row[5]</td>
		</tr>";
	}
	echo "</table>";


	?>

	<input type="button" name="Closeseseses" value="Close" onclick="javascript:window.close();">



</body>
</html>