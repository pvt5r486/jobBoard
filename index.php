<?php
session_start();
session_destroy(); 
?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/all.min.css">
  <title>職缺報報 Jobs Borad</title>
</head>

<body>
  <div class="container">
    <h1 class="h1 text-center my-3">職缺報報 Jobs Borad</h1>
    <ul class="nav justify-content-center mb-3">
      <li class="nav-item">
        <a class="nav-link" href="./login.php">登入</a>
      </li>
    </ul>
    <div class="row">
      <?php include('./handle/getJobs.php'); ?>
      <?php foreach ($jobs as $key => $item): ?>
        <div class="col-lg-4 col-md-6 mb-3">
          <div class="card h-100">
            <h5 class="card-header bg-success text-light"><?= $item['company'] ?></h5>
            <div class="card-body">
              <h5 class="card-title"><?= $item['title'] ?></h5>
              <p class="card-text"><?= $item['description'] ?></p>
              <p class="card-text">薪資範圍：<?= $item['salary'] ?></p>
              <a href="<?= $item['link'] ?>" class="btn btn-primary">更多資訊</a>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
  <script src="./javascript/all.js"></script>
</body>

</html>