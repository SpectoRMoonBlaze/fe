
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form</title>
  <link rel="stylesheet" href="css/style1.css">
</head>
<body>

  <div class="form">
    <h1>Вход</h1>
    <div class="input-form">
      <form action="check.php" method="post">
      <input type="text" placeholder="Логин" name="email" name="login" id="login">
    </div>
    <div class="input-form">
      <input type="password" placeholder="Пароль" name="password">
      
    </div>
  </form>
    <div class="input-form">
  <button class="btn btn-success" type="submit" name="signin">join</button>
 
    </div>
</div>
<?php
require_once 'connection.php'; // подключаем скрипт
 
$showError = False;
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
 
// выполняем операции с базой данных
     
// закрываем подключение
mysqli_close($link);

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: home/home1.html');
}

?>
</body>
</html>