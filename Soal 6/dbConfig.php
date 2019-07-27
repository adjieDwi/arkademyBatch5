<?php 

$host = "localhost";
$user = "root";
$pass = "";
$dbName = "arkademy";

$connect = new PDO("mysql:host=$host;dbname=$dbName", $user, $pass);
try {
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch(PDOExection $e) {
    echo "Connection Failed: " . $e->getMessage();
}


?>