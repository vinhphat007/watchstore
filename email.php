<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nhập địa chỉ email</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 400px;
      margin: 100px auto;
      padding: 40px;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      border-radius: 4px;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
    }

    .input-wrapper {
      position: relative;
      margin-bottom: 20px;
    }

    input[type="email"] {
      width: 100%;
      padding: 10px;
      border: none;
      border-bottom: 2px solid #ccc;
      outline: none;
      transition: border-bottom-color 0.3s;
    }

    input[type="email"]:focus {
      border-bottom-color: #4285f4;
    }
    input[type="text"] {
      width: 100%;
      padding: 10px;
      border: none;
      border-bottom: 2px solid #ccc;
      outline: none;
      transition: border-bottom-color 0.3s;
    }

    input[type="text"]:focus {
      border-bottom-color: #4285f4;
    }

    label {
      margin-top: 10px;
      position: absolute;
      top: 15px;
      left: 10px;
      color: #999;
      pointer-events: none;
      transition: transform 0.3s, font-size 0.3s, top 0.3s;
    }

    input[type="email"]:focus + label,
    input[type="email"]:not(:placeholder-shown) + label {
      transform: translateY(-100%) translateX(-10%);
      font-size: 12px;
      top: -10px;
    }

    input[type="text"]:focus + label,
    input[type="text"]:not(:placeholder-shown) + label {
      transform: translateY(-100%) translateX(-10%);
      font-size: 12px;
      top: -10px;
    }
    .btn {
      display: block;
      width: 100%;
      padding: 10px;
      text-align: center;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <form method="post">
    <h1>Nhập địa chỉ email</h1>
    <div class="input-wrapper">
      <input type="text" name="user_name" id="user-input" required oninvalid="this.setCustomValidity('Vui lòng nhập user_name của bạn')"
                            oninput="setCustomValidity('')">
      <label for="user-input">Nhập username</label>
    </div>
    <div class="input-wrapper">
      <input type="email" name="email" id="email-input" required
                            oninvalid="this.setCustomValidity('Vui lòng nhập email của bạn! Email phải đúng định dang. Vd abc@abc.com')"
                            oninput="setCustomValidity('')">
      <label for="email-input">Nhập địa chỉ email</label>
    </div>
    <button type="submit" name="submit" class="btn">Gửi</button>
    </form>
   
  </div>
</body>
</html>

<?php
  require "db/connect.php";
  $db = new Database();

  if(isset($_POST['submit'])){
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $sql = "SELECT * FROM account
    JOIN user ON account.user_id = user.id_user
    WHERE account.user_name = '$user_name' AND user.email = '$email' ";
    $result = $db->select($sql);
    if($result){
      echo 'đúng';
    }
    else
    {
      echo 'User và Email chưa đúng. Vui lòng nhập lại!';
    }
  }
?>