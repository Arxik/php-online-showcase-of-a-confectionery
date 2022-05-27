<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/msain.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<?php 
session_start();
require('connect.php');
if(isset($_POST['username']) && isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
   
    $query = "SELECT * FROM users WHERE username='$username' and password='$password'";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);

    if ($count == 1){
        $_SESSION['username'] = $username;
    }else{
        $fmsg = "Ошибка";
    }
}
if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    echo "Hello". $username . "";
    echo "Вы вошли";
    echo"<a href='logout.php' class='btn btn-danger'>logout</a>";
}

   
    
   ?>

    <div class="container mt-5  rounded"   style="background-color:rgba(0,0,0,.8); width: 400px;">
        <form action="admin/admin.php" class="form-signin" method="POST">
            <h2 class="text-white text-center">Login</h2>
            <?php if(isset($fmsg)){?> <div class="alert alert-danger" role="alert"><?php echo $fmsg; ?></div><?php }?>
            <input type="text" name="username" class="form-control" placeholder="Username" require><br>
            <input type="password" name="password" class="form-control" placeholder="Password" require><br>
            <button class="btn btn-success btn-block" type="submit" style=" box-sizing: border-box;
 width:100%;">Submit</button><br><br>
        </form>
    </div>

</body>
</html>

