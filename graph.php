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
    ];  
}
echo json_encode($sensors);
?>