<?php
if (empty($_POST['jobName']) || empty($_POST['salary']) || empty($_POST['jobLink']) || empty($_POST['companyName'])){
  die('請檢查資料有無漏填！');
}

include('./connDB.php');
$sql = 'UPDATE job_list SET title=:title, `description`=:description, salary=:salary, link=:link, company=:company, `order` = :order, finishedDate=:finishedDate 
        WHERE id=:id';
$statement = $pdo->prepare($sql);
$statement->bindValue(':title', $_POST['jobName'], PDO::PARAM_STR);
$statement->bindValue(':description', $_POST['jobDes'], PDO::PARAM_STR);
$statement->bindValue(':salary', $_POST['salary'], PDO::PARAM_STR);
$statement->bindValue(':link', $_POST['jobLink'], PDO::PARAM_STR);
$statement->bindValue(':company', $_POST['companyName'], PDO::PARAM_STR);
$statement->bindValue(':order', $_POST['order'], PDO::PARAM_INT);
$statement->bindValue(':finishedDate', $_POST['finishedDate'], PDO::PARAM_STR);
$statement->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
$result = $statement->execute();

if($result){
  // redirect
  header('Location: ../admin.php');
  die();
} else {
  echo '資料更新失敗';
}
?>