<?php
    require "db.php";
    include "blocks/only_reg.php";
    
?>

<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link type="text/css" href="css/showMessage.css" rel="stylesheet" media="screen" />
    <script type='text/javascript' src='js/jquery.min.js'></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <title>Созданные заявки</title>
</head>

<body>
<?php include "./blocks/menu.php"; ?>
<?php include "requests.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>

