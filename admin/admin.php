<?php session_start(); 
require('../connect.php');
if(isset($_POST['username']) && isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
   
    $query = "SELECT * FROM users WHERE username='$username' and password='$password'";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result); }?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Admin panel</title>
</head>
<body>    
    <!--- NAVBAR--->
    
    <div class="container-fluid bg-dark">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav">
        <li class="nav-item"><a href="#" class="nav-link active link-danger" aria-current="page">Admin</a></li>
        <li class="nav-item"><a href="/admin/torts.php" class="nav-link link-danger">torts</a></li>
        <li class="nav-item"><a href="/admin/deserts.php" class="nav-link link-danger">deserts</a></li>
        <li class="nav-item"><a href="/admin/kruasans.php" class="nav-link link-danger">kruasans</a></li>
      </ul>
    </header>
  </div>

    <!--- NAVBAR--->

    <div class="container text-center">    
<?php if ($count == 1){
        $_SESSION['username'] = $username;
    echo "<h2>Добрый день " . $_SESSION['username']. "<h2>";
    echo "<a href='../logout.php'> Выйти</a>";}
    else{
        $new_url = '4040.php';
        header('location:' . $new_url);
        exit();
        }
?>
</div>

</body>
</html>