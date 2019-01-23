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

	for($i=0;$i<count($_POST["chkDel"]);$i++)
	{
		if($_POST["chkDel"][$i] != ""){
			
			$strSQL = "DELETE FROM laptop WHERE id = ?";
			$params = array($_POST["chkDel"][$i]);
			$stmt = sqlsrv_query($conn,$strSQL,$params);	
				
		}

	}
	
	echo $_POST["chkDel"][$i];

	?>
</body>
</html>