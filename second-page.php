<!DOCTYPE html>
<html>
<body>
	<script type="text/javascript"></script>
<?php
$name = $_POST["name"];
$username = 'FALL1';
    $password = 'qqqqqq1!';
    $hostname = '10.1.10.24';
    $dbName = 'TestDB1';
    
$serverName = "10.1.10.24\\FALL1";

$connectionInfo = array( "Database"=>$dbName, "UID" => $username, "PWD" => $password);
$conn = sqlsrv_connect( $hostname, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
}
//$sql = "SELECT * FROM student";

$sql = "SELECT * FROM student WHERE S_name LIKE '%".$name."%' ";
$stmt = sqlsrv_query($conn,$sql);
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
      echo $row[0].", ".$row[1] " <br />";
}

?>
</body>
</html>