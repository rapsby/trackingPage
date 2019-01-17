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


$EXCEL_FILE = "


<table border='1'>

    <tr>

       <th>id</th>
       <th>name</th>
	   <th>pro</th>
       <th>phoneNumber</th>
       <th>email</th>
       <th>startdate</th>
	   <th>LSA</th>
	   <th>tag</th>
	   <th>Notes</th>
	   <th>DocuSign</th>
	   <th>Cpu</th>
	   <th>AddtoLed</th>
	   <th>Ordered</th>
	   <th>Onhand</th>
	   <th>LenApp</th>
	   <th>TimApp</th>
	   <th>PickUpDate</th>
	   <th>ShipDate</th>
	   <th>TrackingNumber</th>
	   <th>Received</th>
	   <th>Completed</th>
	   <th>MSOFFICE</th>
	   <th>ReturnReceived</th>
    </tr>

";

//$sql = $_SESSION["sql"];
$sql = "SELECT * FROM student";

$stmt = sqlsrv_query($conn,$sql);



// DB 에 저장된 데이터를 테이블 형태로 저장합니다.



while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {

$EXCEL_FILE .= "

    <tr>

		<td>$row[0]</td>
		<td>$row[1]</td>
		<td>$row[2]</td>
		<td>$row[3]</td>
		<td>$row[4]</td>
       	<td>$row[5]</td>
		<td>$row[6]</td>
		<td>$row[7]</td>
		<td>$row[8]</td>
		<td>$row[9]</td>
		<td>$row[10]</td>
		<td>$row[11]</td>
		<td>$row[12]</td>
		<td>$row[13]</td>
		<td>$row[14]</td>
		<td>$row[15]</td>
		<td>$row[16]</td>
		<td>$row[17]</td>
		<td>$row[18]</td>
		<td>$row[19]</td>
		<td>$row[20]</td>
		<td>$row[21]</td>
		<td>$row[22]</td>
    </tr>

";

}



$EXCEL_FILE .= "</table>";



// 만든 테이블을 출력해줘야 만들어진 엑셀파일에 데이터가 나타납니다.



echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";

echo $EXCEL_FILE;

?>