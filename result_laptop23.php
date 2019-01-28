<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="fallstyle.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
	// make tr clickable
	jQuery(document).ready(function($) {
		$(".clickable-row").click(function() {
			var r = confirm("Are you sure for reservation?");
			if(r == true){
				var link =  $(this).data("href");
				
				var w = window.open(link, "popupWindow", "width=600, height=400, scrollbars=yes");
				var $w = $(w.document.body);
				self.close();
				
			}
			else
			{
				
			}
			
		});
	});

</script>

</head>


<body>
	<?php
	session_start();
	$username = 'FALL1';
	$password = 'qqqqqq1!';
	$hostname = '10.1.10.24';
	$dbName = 'TestDB1';
	$serverName = "10.1.10.24\\FALL1";
	$connectionInfo = array( "Database"=>$dbName, "UID" => $username, "PWD" => $password);
	$conn = sqlsrv_connect( $hostname, $connectionInfo);
	
	$sql = "SELECT * FROM laptop WHERE Available='Y' ORDER BY CPU, INCHES";
	?>
	
	<?php
	$stmt = sqlsrv_query($conn,$sql);
	$studentNumber = $_GET["id"];

	echo '<table class="phptable" border=1 >';
	echo "<tr>
	<th>SN</th>
	<th>CPU</th>
	<th>Inches</th>
	<th>MSOFFICE</th>
	<th>returnDate</th>
	<th>Available</th>
	</tr>";

	while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
		echo "
		<tr class='clickable-row' data-href='reservationlaptop.php?id=$row[0]&studentNumber=$studentNumber'>
		<td>$row[1]</td>
		<td>$row[2]</td>
		<td>$row[3]</td>
		<td>$row[4]</td>
		<td>$row[6]</td>
		<td>$row[7]</td>
		</tr>";
		
	}
	
	echo "</table>";
	?>
	
	
	
	<h1></h1>
	<input type="button" value="return">

	
</body>
</html>