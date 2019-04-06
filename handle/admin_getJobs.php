<?php 
session_start();
include('connDB.php');
$nowDate = getDatetime("Asia/Taipei");
$sql = "SELECT * FROM job_list
        WHERE createdID=:createdID
        ORDER BY `order` DESC";
$statement = $pdo->prepare($sql);
$statement->bindValue(':createdID', $_SESSION['userID'], PDO::PARAM_INT);
$statement->execute();
$jobs = $statement->fetchAll(PDO::FETCH_ASSOC);
function getDatetime($setTimeZone){
  date_default_timezone_set($setTimeZone);
  return date("Y-m-d");
}
?>
