<?php
ini_set('session.gc_maxlifetime', 3600);
session_start();

if(!isset($_SESSION['userName'])){
  header('Location: login.php');
}
?>