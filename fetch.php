<?php
ini_set('memory_limit', '1024M');
require "conn.php";
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');
$sql = "SELECT * FROM sensors";
$query = mysqli_query($conn, $sql);
$sensors = [];
while ($row = mysqli_fetch_assoc($query)) {
    $sensors[] = [
        'id' => $row['id'],
        'sensor1' => $row['sensor1'],
        'sensor2' => $row['sensor2'],
        'sensor3' => $row['sensor3'],
        'sensor4' => $row['sensor4'],
        'sensor5' => $row['sensor5'],
        'sensor6' => $row['sensor6'],
        'timestamp' => $row['timestamp']
    ];  
}
echo json_encode($sensors);
?>