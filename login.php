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
    if( isset($_POST['do_login']))
    {  
        $res = user_login($_POST);
        if($res==null)
        {
            echo '<div style="color:green;">Вы авторизованы</div><hr>';
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

<form class="form-signin" action="login.php" method="POST">
      <h1 class="h3 mb-3 font-weight-normal">Пожалуйста авторизуйтесь</h1>
      <input type="text" name="login" class="form-control" placeholder="Логин" value="<?php echo @$data['login']; ?>">
      <input type="password" name="password" class="form-control" placeholder="Пароль" value="<?php echo @$data['password']; ?>">
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name ="do_login">Войти</button>
      <br>
        <label>
          <!--<a href="signup.php">Регистрация</a>-->
        </label>
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
