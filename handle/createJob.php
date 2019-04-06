<?php
session_start();
if (empty($_POST['jobName']) || empty($_POST['salary']) || empty($_POST['jobLink']) || empty($_POST['companyName'])){
  die('請檢查資料有無漏填！');
}
include('./connDB.php');
$sql = 'INSERT INTO job_list (company, title, `description`, salary, link, `order`, finishedDate, createdID) 
        VALUES (:company, :title, :description, :salary, :link, :order, :finishedDate, :createdID)';
$statement = $pdo->prepare($sql);
$statement->bindValue(':title', $_POST['jobName'], PDO::PARAM_STR);
$statement->bindValue(':description', $_POST['jobDes'], PDO::PARAM_STR);
$statement->bindValue(':salary', $_POST['salary'], PDO::PARAM_STR);
$statement->bindValue(':link', $_POST['jobLink'], PDO::PARAM_STR);
$statement->bindValue(':company', $_POST['companyName'], PDO::PARAM_STR);
$statement->bindValue(':order', $_POST['order'], PDO::PARAM_INT);
$statement->bindValue(':finishedDate', $_POST['finishedDate'], PDO::PARAM_STR);
$statement->bindValue(':createdID', $_SESSION['userID'], PDO::PARAM_INT);
$result = $statement->execute();

if($result){
  // redirect
  header('Location: ../admin.php');
  die();
} else {
  echo '資料新增失敗';
}
?>