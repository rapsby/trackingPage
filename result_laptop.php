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
	
	$sql = "SELECT * FROM laptop WHERE cpu LIKE '%".$cpu."%' ORDER BY id";
	

	$_SESSION['sql'] = $sql;

	?>

	<script language='JavaScript'>
	function onDelete()
	{
	if(confirm('Do you want to delete ?')==true)
	{
		return true;
	}
	else
	{
		return false;
	}
	}
	</script>
	<form name="frmMain" action="Delete_laptop.php" method="post" OnSubmit="return onDelete();">
	
	<?php
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
	<th>Received Date</th>
	<th>Available</th>
	</tr>";

	while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
		echo "
		<tr class='clickable-row' data-href='info_laptop.php?id=$row[0]'>
		<td class='' ><input type='checkbox' name='chkDel[]' value=$row[0]></td>	
		<td>$row[0]</td>
		<td>$row[1]</td>
		<td>$row[2]</td>
		<td>$row[3]</td>
		<td>$row[4]</td>
		<td>$row[5]</td>
		<td>$row[6]</td>
		<td>$row[7]</td>
		</tr>";
	}
	echo "</table>";
	?>

	<h1></h1>
	<form method='post' name='frm'>
		<input type="button" value="Download"  onclick="location.href='downloadexcel_laptop.php'">
		<input type="button" value="Insert" onclick="location.href='Insert_laptop.php'">
		<input type="submit" name = "btnDelete" value=Delete />
	</form>
</body>
</html>