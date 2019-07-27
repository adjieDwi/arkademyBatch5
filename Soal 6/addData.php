<?php 
require("dbConfig.php");


    
    $name = $_POST['name'];
    $work = $_POST['work'];
    $salary = $_POST['salary'];
    
    
    $sql = "INSERT INTO name (name, id_work, id_salary) VALUES (:name, :work, :salary)";
    $ins = $connect->prepare($sql);
    $ins->BindParam(':name', $name);
    $ins->BindParam(':work', $work);
    $ins->BindParam(':salary', $salary);
    $ins->execute();
    
    $connect = null;
    header("Location: Soal_6C.php");


?>