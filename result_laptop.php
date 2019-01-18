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
		document.frm.action = 'downloadexcel.php';
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
.inputtd {
	pointer-events: none;
	cursor: default;
}
</style>
</head>
<body>
	<?php
	session_start();


	?>

	<?php
	$cpu = $_POST["cpu"];
	$username = 'FALL1';
	$password = 'qqqqqq1!';
	$hostname = '10.1.10.24';
	$dbName = 'TestDB1';
	$serverName = "10.1.10.24\\FALL1";
	$connectionInfo = array( "Database"=>$dbName, "UID" => $username, "PWD" => $password);
	$conn = sqlsrv_connect( $hostname, $connectionInfo);
	
	$sql = "SELECT * FROM laptop WHERE cpu LIKE '%".$cpu."%' ";
	

	$_SESSION['sql'] = $sql;

	$stmt = sqlsrv_query($conn,$sql);
	echo '<table class="phptable" border=1 >';
	echo "<tr>
	<th>  </th>
	<th>ID</th>
	<th>SN</th>
	<th>CPU</th>
	<th>Inches</th>
	<th>MSOFFICE</th>
	<th>StudentId</th>
	<th>returnDate</th>
	</tr>";

	while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
		echo "
		<tr class='clickable-row' data-href='laptopinfo.php?id=$row[0]'>
		<td class='' ><input type='checkbox' name='chkbox[]' value='<?php echo $row[0];?>'/></td>	
		<td>$row[0]</td>
		<td>$row[1]</td>
		<td>$row[2]</td>
		<td>$row[3]</td>
		<td>$row[4]</td>
		<td>$row[5]</td>
		<td>$row[6]</td>
		</tr>";
	}
	echo "</table>";
	?>


	<h1></h1>
	<form method='post' name='frm'>
		<input type="button" value="Download"  onclick="location.href='downloadexcel.php'">
		<input type="button" value="Insert" onclick="location.href='Insert.php'">
		<input type="submit" name = "delete" value=delete />
	</form>
</body>
</html>