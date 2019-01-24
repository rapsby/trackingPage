<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="fallstyle.css">
	<script>
		function submit_form() {
			document.frm.target = 'ifrm';
			document.frm.action = 'check_student_return.php';
			document.frm.submit();
		}
	</script>
	<title>
		LLMS
	</title>
</head>
<body>
	<div class="top">
		<p></p>
		<p>
			<a href="index.php" id="current">
		Laurus Laptop Management Service</a>
	</p>
</div>
<div class="menubar">
	<ul>
		<li><a href="reservation.php" id="current">Reservation</a></li>
		<li><a href="return.php">Return</a></li>

		<!-- <li><a href="http://www.instagram.com/sungjin1027" target="popup" >Location</a></li>
		<li><a href="http://www.instagram.com/sungjin1027" target="popup" >Contact</a></li> -->
	</ul>
</div>




<div style = "padding:20px">
	<h3>Return</h3>
	<form method='post' name='frm' >
		
		<input type=text name=name placeholder="Name" minlength=2>
		<br/>
		<input type=text name=studentNumber placeholder="Student Number" minlength=9>
		<br/>
		<h1></h1>
		<input type=button value='Check' onclick='submit_form()'>
		<br/>
		<br/>

	</form>
</div>



<?php
$username = 'FALL1';
$password = 'qqqqqq1!';
$hostname = '10.1.10.24';
$dbName = 'TestDB1';

$serverName = "10.1.10.24\\FALL1";

$connectionInfo = array( "Database"=>$dbName, "UID" => $username, "PWD" => $password);
$conn = sqlsrv_connect( $hostname, $connectionInfo);

?>



<iframe name='ifrm' width='100%' height='200px' frameborder=2px</iframe>

</body>


</html>