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
    <div class="card mt-5 mb-3">
      <div class="card-header">職缺報報 登入頁面</div>
      <form class="card-body" method="POST" action="./handle/login.php">
        <div class="form-group">
          <label for="userID">帳號</label>
          <input type="text" class="form-control" id="userID" name="userID" placeholder="請輸入帳號" require>
        </div>
        <div class="form-group">
          <label for="passWord">密碼</label>
          <input type="password" class="form-control" id="passWord" name="passWord" placeholder="請輸入密碼" require>
        </div>
        <a href="index.php" class="btn btn-primary">回主頁</a>
        <button type="submit" class="btn btn-success">登入</button>
      </form>
    </div>
    <a href="createdUser.php" class="btn btn-outline-danger">註冊</a>
  </div>
  <script src="./javascript/all.js"></script>
</body>

</html>