<?php 
require("dbConfig.php");
$id = $_GET['id'];
$query = "DELETE FROM name WHERE id=$id";
$connect->exec($query);

$conn = null;
header("Location: Soal_6C.php");

?>