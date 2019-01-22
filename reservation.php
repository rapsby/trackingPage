<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="fallstyle.css">
	<script>
		function submit_form() {
			document.frm.target = 'ifrm';
			document.frm.action = 'check_student.php';
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
			<a href="index.php" id="
			current">
		Laurus Laptop Management Service</a>
	</p>
</div>
<div class="menubar">
	<ul>
		<li><a href="reservation.php" id="current">Reservation</a></li>
		<li><a href="return.php">Return</a></li>

		<li><a href="http://www.instagram.com/sungjin1027" target="popup" >Location</a></li>
		<li><a href="http://www.instagram.com/sungjin1027" target="popup" >Contact</a></li>
	</ul>
</div>




<div style = "padding:20px">
	<h3>Reservation</h3>
	<form method='post' name='frm' >
		
		<input type=text name=name placeholder="Name" minlength=2>
		<br/>
		<input type=text name=studentNumber placeholder="Student Number" minlength=9>
		<br/>
		<h1></h1>
		<input type="submit" name="submit" value="Submit" />
		<br/>
		<input type=button value='Check' onclick='submit_form()'>
		<br/>
		<br/>

	</form>
</div>

<?php
$asd="";
?>


<?php
$id = $_POST["id"];
$username = 'FALL1';
$password = 'qqqqqq1!';
$hostname = '10.1.10.24';
$dbName = 'TestDB1';

$serverName = "10.1.10.24\\FALL1";

$connectionInfo = array( "Database"=>$dbName, "UID" => $username, "PWD" => $password);
$conn = sqlsrv_connect( $hostname, $connectionInfo);




$name="";
$studentNumber="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["name"])) {
		$name = "name is required";
	}
	else {
		$name = test_input($_POST["name"]);
	}
	if (empty($_POST["studentNumber"])) {
		$studentNumber = "studentNumber is required";
	}
	else {
		$studentNumber = test_input($_POST["studentNumber"]);
	}
}
echo $name;
echo $studentNumber;

$sql = "SELECT COUNT(*) FROM student WHERE (name LIKE '%".$name."%') and StudentNumber="$studentNumber" and  Completed='Y'";

//$sql = "SELECT * FROM student";
$stmt = sqlsrv_query($conn,$sql);

if ($stmt==0) {
    echo 'No records found';
} else {
	while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC){


	}
    
}

// while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
// echo $row[0];
// echo $row[1];
// 	}



?>



<iframe name='ifrm' width='100%' height='200px' frameborder=0 framespacing=0 marginheight=0 marginwidth=0 scrolling=yes vspace=0></iframe>

</body>


</html>