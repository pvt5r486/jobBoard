<?php
session_start();
if((int)$_SESSION['isManager'] !== 1){
  die("你不具有審核身份");
}

include('./connDB.php');
$sql = 'UPDATE job_list SET isCheck=:isCheck WHERE id=:id';
$statement = $pdo->prepare($sql);
$statement->bindValue(':isCheck', 1, PDO::PARAM_INT);
$statement->bindValue(':id', $_REQUEST['id'], PDO::PARAM_INT);
$result = $statement->execute();

if($result){
  header('Location: ../checkJobs.php');
  die();
} else {
  echo '資料更新失敗';
}
?>