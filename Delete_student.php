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

	$date = date("ymd");

	for($i=0;$i<count($_POST["chkDel"]);$i++)
	{
		if($_POST["chkDel"][$i] != ""){
			
			$id_check = $_POST["chkDel"][$i];


			$sql = "SELECT laptopId from reservation where studentId=$id_check";
			$stmt = sqlsrv_query($conn,$sql);
			// $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_NUMERIC);
			// $laptopId = $row[0];

			while( $row2 = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
				
				$laptopId = $row2[0];
				
				echo $laptopId;

				$sql = "UPDATE laptop set studentId=null, available='Y', returnDate=$date where id=$laptopId";
				$stmt = sqlsrv_query($conn,$sql);
			}

			// $sql = "UPDATE laptop set studentid=null, available='Y', returnDate=$date where id=$laptopId";
			// $stmt = sqlsrv_query($conn,$sql);


			// $sql = "DELETE FROM reservation WHERE studentId=$id_check";
			// $stmt = sqlsrv_query($conn,$sql);


			// $strSQL = "DELETE FROM student WHERE id = ?";
			// $params = array($_POST["chkDel"][$i]);
			// $stmt = sqlsrv_query($conn,$strSQL,$params);		
		}
	}
	?>
</body>
</html>