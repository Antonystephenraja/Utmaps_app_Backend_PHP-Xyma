<?php 
error_reporting(0);
ini_set('display_errors', 0);
try {
    $conn = mysqli_connect("localhost","root","","utmaps");
  } catch (Exception $e) {
    echo "Error: " . $e->getMessage();
  }
?>
