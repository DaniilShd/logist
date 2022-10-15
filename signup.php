<?php
    require "db.php";
?>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8" />
<title>Авторизация</title>
</head>
<body class="text-center">
<div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
        <div class="col-sm">
<?php
    require_once "api/user.php";
    if(isset($_POST['do_register']))
    {  
        $res = user_register($_POST);
        if($res==null)
        {
            echo '<div style="color:green;">Вы зарегистрированы</div><hr>';
            _redirect("index.php",1000);
            exit();
        }
        else
        {
            echo '<div style="color:red;">'.array_shift($res).'</div><hr>';
        }
    }
    
?>
<br><br><br>

<form class="form-signin" action="signup.php" method="POST">
      <h1 class="h3 mb-3 font-weight-normal">Пожалуйста заполните форму регистриции</h1>
      <input type="text" name="login" class="form-control" placeholder="Логин" value="">
      <input type="text" name="surname" class="form-control" placeholder="Фамилия" value="">
      <input type="text" name="firstname" class="form-control" placeholder="Имя" value="">
      <input type="text" name="lastname" class="form-control" placeholder="Отчество" value="">
      <input type="text" name="password" class="form-control" placeholder="Пароль" value="">
      <input type="text" name="password_2" class="form-control" placeholder="Повтор пароля" value="">
      <select class="form-select" aria-label="Default select example" name="department">
         <option selected value="Менеджер">Менеджер</option>
         <option value="Логист">Логист</option>
       <option value="Кладовщик">Кладовщик</option>
         <option value="Руководитель">Руководитель</option>
        </select>
      
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name ="do_register">Зарегистрироваться</button>
      <br>
      <p class="mt-3 mb-3 text-muted">© 2022</p>
    </form>
</div><!--div class="col-sm"-->
<div class="col-sm">
</div>

</div><!--container-->
</div><!--row-->

    <script src="js/bootstrap.min.js"></script>
</body>
</html>