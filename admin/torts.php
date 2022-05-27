<?php session_start(); 
require('../connect.php');
if(isset($_POST['username']) && isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
   
    $query = "SELECT * FROM users WHERE username='$username' and password='$password'";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result); }?>
<? require_once '../connectpdo.php';
session_start();
?>

</div>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/msain.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Admin panel</title>
</head>
<body>
    <h1 style="text-align:center;">Добавление тортов в админ панели</h1>
<? 
    $sql=$pdo->prepare("SELECT * FROM torts");
    $sql->execute();
    $res=$sql->fetch(PDO::FETCH_OBJ); ?>

    <div class="container">
        <form action="/admin/torts_create.php" class="form-signin" method="POST">
            <h2 class="text-center"></h2>
            <input type="text" name="title" class="form-control" placeholder="title" require>
            <input type="text" name="desc" class="form-control" placeholder="desc" require >
            
            <input type="text" name="imgname" class="form-control" placeholder="imgname" require >
            <button class="btn btn-success btn-block" type="submit">Submit</button><br>
        </form>
    </div>

</body>
</html>