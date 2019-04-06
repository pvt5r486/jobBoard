<?php 
session_start();
include('connDB.php');
if((int)$_SESSION['isManager'] === 1){
  $sql = 'DELETE FROM job_list WHERE id=:id';
  $statement = $pdo->prepare($sql);
  $statement->bindValue(':id', $_REQUEST['id'], PDO::PARAM_INT);
} else {
  $sql = 'DELETE FROM job_list WHERE id=:id AND createdID=:createdID';
  $statement = $pdo->prepare($sql);
  $statement->bindValue(':id', $_REQUEST['id'], PDO::PARAM_INT);
  $statement->bindValue(':createdID', $_SESSION['userID'], PDO::PARAM_INT);
}

$result = $statement->execute();
if($result){
  // redirect
  header('Location: ../admin.php');
  die();
} else {
  echo '資料刪除失敗';
}
?>