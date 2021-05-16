<?php require_once("config.php"); ?>
<?php
    if(!isset($_SESSION['userName']) || $_SESSION['userType']!="Student"){
        header("localtion:login.php");
    }
?>




<h1>Hello : <?= $_SESSION['userName']?></h1>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to student dashboard!</h1>
</body>
</html>
