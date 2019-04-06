<?php 
include('connDB.php');
$nowDate = getDatetime("Asia/Taipei");
$sql = "SELECT * FROM job_list
        WHERE finishedDate >= '$nowDate' AND isCheck = :isCheck
        ORDER BY `order` DESC";
$statement = $pdo->prepare($sql);
$statement->bindValue(':isCheck', 1, PDO::PARAM_INT);
$statement->execute();
$jobs = $statement->fetchAll(PDO::FETCH_ASSOC);

function getDatetime($setTimeZone){
  date_default_timezone_set($setTimeZone);
  return date("Y-m-d");
}
?>
