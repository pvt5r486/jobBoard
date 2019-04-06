<?php
ini_set('session.gc_maxlifetime', 3600);
session_start();
if (empty($_POST['userID']) || empty($_POST['passWord'])){
  die('請檢查資料有無漏填！');
}
include('./connDB.php');
$sql = 'SELECT * FROM user WHERE userName=:userName AND `passWord`=:passWord';
$statement = $pdo->prepare($sql);
$statement->bindValue(':userName', $_POST['userID'], PDO::PARAM_STR);
$statement->bindValue(':passWord', $_POST['passWord'], PDO::PARAM_STR);
$statement->execute();
$result =  $statement -> fetch(PDO::FETCH_ASSOC);

if ($result){
  // 給予 SESSION
  $_SESSION['userName'] = $result['userName'];
  $_SESSION['userID'] = $result['id'];
  $_SESSION['isManager'] = $result['isManager'];
  header('Location: ../admin.php');
  die();
} else {
  header('Location: ../login.php');
}
?>