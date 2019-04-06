<?php include('./handle/deffense.php') ?>
<?php include('./handle/getJob.php'); ?>
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
    <h1 class="h1 text-center my-3">職缺報報 編輯職缺</h1>
    <ul class="nav justify-content-center mb-3">
      <li class="nav-item">
        <a class="nav-link" href="./admin.php">回管理主頁</a>
      </li>
    </ul>
    <form method="POST" action="./handle/updateJob.php">
      <div class="form-group">
        <label for="companyName">*公司名稱</label>
        <input type="text" class="form-control" id="companyName" name="companyName" 
          placeholder="請輸入公司名稱.." value="<?=$job['company']?>">
      </div>
      <div class="form-group">
        <label for="jobName">*招募職缺</label>
        <input type="text" class="form-control" id="jobName"  name="jobName" 
          placeholder="請輸入欲招募職缺.." value="<?=$job['title']?>">
      </div>
      <div class="form-group">
        <label for="salary">*薪資範圍</label>
        <input type="text" class="form-control" id="salary"  name="salary" 
          placeholder="請輸入新資範圍.." value="<?=$job['salary']?>">
      </div>
      <div class="form-group">
        <label for="jobLink">*職缺詳細連結</label>
        <input type="text" class="form-control" id="jobLink"  name="jobLink" 
          placeholder="請輸入職缺詳細連結.." value="<?=$job['link']?>">
      </div>
      <div class="form-group">
        <label for="order">職缺權重-越高會排越前面</label>
        <input type="number" class="form-control" id="order"  name="order" 
          placeholder="不輸入則預設為 0" min="0" max="999" value=<?=$job['order']?>>
      </div>
      <div class="form-group">
        <label for="finishedDate">刊登到期日</label>
        <input type="date" class="form-control" id="finishedDate"  name="finishedDate" 
          placeholder="請輸入職缺到期日" value=<?=$job['finishedDate']?> required>
      </div>
      <div class="form-group">
        <label for="jobDes">職缺敘述</label>
        <textarea class="form-control" id="jobDes" rows="5" name="jobDes" placeholder="關於這個職缺的敘述.."><?=$job['description']?></textarea>
      </div>
      <input type="hidden" name="id" value="<?=$job['id']?>">
      <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary">送出</button>
      </div>
    </form>
  </div>
  <script src="./javascript/all.js"></script>
</body>

</html>