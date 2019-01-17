<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="fallstyle.css">

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


<!--
<style>

.phptable{
	background-color: yellow;
	border: 1px solid #444444;
	border-color: green;

}
</style>
-->

</head>
<body>
<?php


	$id = $_GET["id"];
	$username = 'FALL1';
	$password = 'qqqqqq1!';
	$hostname = '10.1.10.24';
	$dbName = 'TestDB1';

	$serverName = "10.1.10.24\\FALL1";

	$connectionInfo = array( "Database"=>$dbName, "UID" => $username, "PWD" => $password);
	$conn = sqlsrv_connect( $hostname, $connectionInfo);

//$sql = "SELECT * FROM student";
//$sql = "SELECT * FROM student WHERE name LIKE 'John' ";


	$sql = "SELECT * FROM student WHERE id = $id ";
	$stmt = sqlsrv_query($conn,$sql);
	
	
	while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
		
		echo"<tr><td><div align='center'><input type='text' name='txtCustomerID' size='5' value='<?=$row[0];?>'></td> </tr>"


	?>


	<table width="600" border="1">  
	
	
	<?php
	}
	?>   

	</table>

<h1>hello</h1>




</body>
</html>