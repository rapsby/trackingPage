






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
		document.frm.action = 'downloadexcel_student.php';
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
	
	$sql = "SELECT * FROM student WHERE name LIKE '%".$name."%' ";

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

	<form name="frmMain" action="Delete_student.php" method="post" OnSubmit="return onDelete();">
		<?php

		$stmt = sqlsrv_query($conn,$sql);
		echo '<table class="phptable" border=1 >';
		echo "<tr>
		<th>  </th>
		<th>ID</th>
		<th>NAME</th>
		<th>student Number</th>
		<th>Phone Number</th>
		<th>email</th>
		</tr>";

	while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
		echo "
		<tr class='clickable-row' data-href='info_student.php?id=$row[0]'>
		<td><input type='checkbox' name='chkDel[]' value=$row[0]></td>
		<td>$row[0]</td>
		<td>$row[1]</td>
		<td>$row[2]</td>
		<td>$row[4]</td>
		<td>$row[5]</td>

		</tr>";
	}
	echo "</table>";
	?>


	<h1></h1>
	<form method='post' name='frm'>
		<input type="button" value="Download"  onclick="location.href='downloadexcel_student.php'">
		<input type="button" value="Insert" onclick="location.href='Insert_student.php'">
		<input type="submit" name = "btnDelete" value=Delete />
	</form>



	

</body>
</html>