<?php 
include('connDB.php');
$sql = 'SELECT * FROM job_list where id=:id';
$statement = $pdo->prepare($sql);
$statement->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$statement->execute();
$job = $statement->fetch(PDO::FETCH_ASSOC);
?>
