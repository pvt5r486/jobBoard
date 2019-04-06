<?php
if (empty($_POST['userID']) || empty($_POST['passWord'])){
  die('請檢查資料有無漏填！');
}
include('./connDB.php');
$sql = 'SELECT userName FROM user WHERE userName = :userName';
$statement = $pdo->prepare($sql);
$statement->bindValue(':userName', $_POST['userID'], PDO::PARAM_STR);
$statement->execute();
$result =  $statement -> fetch(PDO::FETCH_ASSOC);

if ($result){
  die("這個帳號已經被註冊，請回上一頁");
}

$isManager = $_POST['isManager'];
if(!$isManager){
  $isManager = 0;
}
include('./connDB.php');
$sql = 'INSERT INTO user (userName, `passWord`, isManager) 
        VALUES (:userName, :passWord, :isManager)';
$statement = $pdo->prepare($sql);
$statement->bindValue(':userName', $_POST['userID'], PDO::PARAM_STR);
$statement->bindValue(':passWord', $_POST['passWord'], PDO::PARAM_STR);
$statement->bindValue(':isManager', $isManager, PDO::PARAM_INT);
$result = $statement->execute();
if($result){
  header('Location: ../login.php');
  die();
} else {
  echo '資料新增失敗';
}
?>