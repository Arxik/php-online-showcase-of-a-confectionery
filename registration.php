<!DOCTYPE html>
<html lang="ru">
<head>
    <style>
        .form-signin{
            text-align:center;
            max-width:400px;
            padding:15px;
            margin:0 auto;
        }
        button{
            box-sizing: border-box;
            width: 100%;
        }
        a{
            box-sizing: border-box;
            width: 100%;
        }
    </style>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<?php 
require('connect.php');
if(isset($_POST['username']) && isset($_POST['username'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
   
    $query = "INSERT INTO users (username,  email, password) VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($connection, $query);
   
    if($result) {
     $smsg = "Вы успешно зарегистрировались!";
    } else {
     $fsmg = "Ошибка!";
    }
   }
   ?>

    <div class="container">
        <form action="" class="form-signin" method="POST">
            <h2>Registration</h2>
         <?php if(isset($smsg)){?> <div class="alert alert-success" role="alert"><?php echo $smsg; ?></div><?php }?>
         <?php if(isset($fmsg)){?> <div class="alert alert-danger" role="alert"><?php echo $fmsg; ?></div><?php }?>
            <input type="text" name="username" class="form-control" placeholder="Username" require>
            <input type="email" name="email" class="form-control" placeholder="Email" require>
            <input type="password" name="password" class="form-control" placeholder="Password" require>
            <button class="btn btn-success btn-block mt-1 mb-1" type="submit">Submit</button>
            <a class="btn btn-warning btn-block" href="index.php">На главную</a>
        </form>
    </div>
    
</body>
</html>