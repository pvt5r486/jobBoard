<?php 
session_start();
include('connDB.php');
$sql = "SELECT * FROM job_list
        WHERE isCheck=:isCheck
        ORDER BY `createdDate` DESC";
$statement = $pdo->prepare($sql);
$statement->bindValue(':isCheck', 0, PDO::PARAM_INT);
$statement->execute();
$jobs = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
