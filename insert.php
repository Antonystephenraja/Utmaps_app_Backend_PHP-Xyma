<?php 
require "conn.php";
date_default_timezone_set('Asia/Kolkata'); // set the timezone to Asia/Kolkata
$timestamp = date('Y-m-d H:i:s');
$sensor1 = $_GET['sensor1'];
$sensor2 = $_GET['sensor2'];
$sensor3 = $_GET['sensor3'];
$sensor4 = $_GET['sensor4'];
$sensor5 = $_GET['sensor5'];
$sensor6 = $_GET['sensor6'];
$sensor7 = $_GET['timestamp'];
echo $id;
echo $sensor1;
echo $sensor2;
echo $sensor3;
echo $sensor4;
echo $sensor5;
echo $sensor6;

$sql = "INSERT INTO sensors (id, sensor1, sensor2, sensor3,sensor4,sensor5,sensor6,timestamp) VALUES('$id', '$sensor1', '$sensor2', '$sensor3', '$sensor4','$sensor5','$sensor6','$timestamp')";
$sql1 = "SELECT * from sensors ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql1);
$num = mysqli_fetch_array($result);
if ($conn->query($sql) === TRUE) {
    echo "STATUS: OK";
 
	echo $num['level'];
	

}
else{   

    echo "<h6>STATUS: failed</h6>";

}
?>
