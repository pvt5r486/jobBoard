<?php include('./handle/deffense.php') ?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/all.min.css">
  <title>職缺報報 管理後台</title>
</head>

<body>
  <div class="container">
    <h1 class="h1 text-center my-3">職缺報報 Jobs Borad</h1>
    <h3 class="h5 text-center my-3">歡迎你，管理者[<?= $_SESSION['userName']?>]</h3>
    <ul class="nav justify-content-center mb-3">
      <li class="nav-item">
        <a class="nav-link" href="./index.php">回前端列表</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./addJob.php">新增職缺</a>
      </li>
      <?php if((int)$_SESSION['isManager'] === 1):?>
        <li class="nav-item">
          <a class="nav-link" href="./checkJobs.php">審核職缺</a>
        </li>
      <?php endif ?>
      <li class="nav-item">
        <a class="nav-link" href="./handle/logout.php">登出</a>
      </li>
    </ul>
    <div class="row">
    <?php include('./handle/admin_getJobs.php'); ?>
      <?php foreach ($jobs as $key => $item): ?>
        <div class="col-lg-4 col-md-6 mb-3">
          <div class="card h-100">
            <h5 class="card-header <?php if(strtotime($item['finishedDate']) >= strtotime($nowDate)){echo "bg-primary text-light";} ?>">
            <?php if((int)$item['isCheck'] === 0){echo "[審核中]";} ?>
            <?= $item['company'] ?></h5>
            <div class="card-body">
              <h5 class="card-title"><?= $item['title'] ?></h5>
              <p class="card-text"><?= $item['description'] ?></p>
              <p class="card-text">薪資範圍：<?= $item['salary'] ?></p>
              <a href="./updateJob.php?id=<?= $item['id'] ?>" class="btn btn-success mr-3">編輯職缺</a>
              <a href="./handle/delete.php?id=<?= $item['id'] ?>" class="btn btn-outline-secondary">刪除職缺</a>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
  <script src="./javascript/all.js"></script>
</body>

</html>