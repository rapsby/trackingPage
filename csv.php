<?php

$name = $_POST["name"];
	$username = 'FALL1';
	$password = 'qqqqqq1!';
	$hostname = '10.1.10.24';
	$dbName = 'TestDB1';

	$serverName = "10.1.10.24\\FALL1";

	$connectionInfo = array( "Database"=>$dbName, "UID" => $username, "PWD" => $password);
	$conn = sqlsrv_connect( $hostname, $connectionInfo);

header( "Content-type: application/vnd.ms-excel; charset=utf-8");

header( "Content-Disposition: attachment; filename = excel_test.xls" );     //filename = 저장되는 파일명을 설정합니다.

header( "Content-Description: PHP4 Generated Data" );



//엑셀 파일로 만들고자 하는 데이터의 테이블을 만듭니다.


$sql = $_GET["sql"];
		$stmt = sqlsrv_query($conn,$sql);
		echo "</table>";
		$EXCEL_FILE = "
		<table class="phptable" border=1 >
		<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>Program</th>
		<th>Phone number</th>
		<th>email</th>
		</tr>";

		while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
			$EXCEL_FILE .= "
			<tr class='clickable-row' data-href='studentinfo.php?id=$row[0]'>
			<td>$row[0]</td>
			<td>$row[1]</td>
			<td>$row[2]</td>
			<td>$row[3]</td>
			<td>$row[4]</td>
			</tr>
			";
		}
		$EXCEL_FILE .= "</table>";
		echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";

		echo $EXCEL_FILE;
		?>

?>