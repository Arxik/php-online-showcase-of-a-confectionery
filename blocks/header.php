
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
   <title><?php echo $title ?></title>
    <link rel="stylesheet" href="/css/main.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="apple-touch-icon" sizes="180x180" href="/imgs/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/imgs/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/imgs/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
</head>
<body >
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark " >
        <div class="container-fluid ms-3">
            <a href="index.php" class="navbar-brand" > <img src="/imgs/logo.png" alt="" width="80" height="60">Avrora</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" 
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent" style="font-size:20px;">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="index.php" class="nav-link ">Главная</a>
                </li>
                <li class="nav-item">
                    <a href="masterklass.php" class="nav-link ">Мастер-классы</a>
                </li>
                <li class="nav-item">
                    <a href="questions.php" class="nav-link ">Вопросы</a>
                </li>
                <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Меню
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="Torts.php">Торты</a></li>
            <li><a class="dropdown-item " href="kruassan.php">Круассаны</a></li>
            <li><a class="dropdown-item " href="desert.php">Десерты</a></li>
          </ul>

            </ul>
          
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
   

    echo "<div class='text-white me-2 ml-2'>Hello, ". $username . "  </div> ";
   
}


   


   ?>
   <?
if ($_SESSION['username']!='') { ?> 
      <a href="logout.php" class="action-logout  btn btn-info<?php echo $exit_class; ?>">
                            <div class="text"><i class="fa fa-sign-out"></i> Выйти</div>
                                      </a>
<? } else { ?>
    <div class="d-flex">
              <button type="button" class="btn btn-outline-success ms-3 me-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Sign in</button>
              <p class="link-light" > <a href="" class="link-light ">  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
</svg></a>
<a href="" class="link-light  "><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg></a>
<a href="" class="link-light "><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg></a></p>
            </div>
<? } ?>
  
              
            <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form-signin" method="POST">
                    <?php if(isset($fmsg)){?> <div class="alert alert-danger" role="alert"><?php echo $fmsg; ?></div><?php }?>
                    <div class="mb-3">
                        
                    <label for="exampleInputname" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" id="exampleInputname" require>
            </div>
            <div class=" mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" require>
            </div>
                        <div class="d-grid gap-0">
                        <button type="submit" class="btn btn-success">Submit</button><br>
                        <a href="registration.php" class="btn btn-info text-white">Registration</a>
                        </div>
                    </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
        </div>
        </div>

    </nav>
    
    <div class="px-4 py-5 mb-5 text-center text-white" id="cover" >
        <div class="container-fluid" >
            <h1 class="display-5 fw-bold">Кондитерская Avrora</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4 fw-bold">Нельзя купить счастье, но можно купить тортик :)<br>
                      (это почти одно и то же)<br>
                      Также помните, что в каждом из нас живет ребенок.<br>
                      Не забывайте покупать ему шоколад.
                    </p>
                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                            <button type="button" class="btn btn-success btn-lg px-4 gap-3 " data-bs-toggle="modal" data-bs-target="#exampleModala">Заказать</button>
                                <button type="button" class="btn btn-info btn-lg px-4"  data-bs-toggle="modal" data-bs-target="#call">Связаться с нами</button>

                        </div>
            
                </div>
        </div>
    </div>


<!-- Modal -->
<div class="modal fade" id="exampleModala" tabindex="-1" aria-labelledby="exampleModalLabela" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModalLabela">Заказать</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="mail.php" method="post">

  <fieldset>

  <legend>Оставьте своё сообщение для заказа:</legend>
  Ваше имя:

  <input type="text"class="form-control" name="name">

  E-mail:
  <input type="text"class="form-control" name="email">
  Номер телефона:
  <input type="text"class="form-control" name="phone">
  Написать свое сообщение:
  <textarea rows="10" cols="45" class="form-control" name="message"></textarea>

  <input type="submit" class="btn btn-outline-info mt-1" style="width: 100%" value="Отправить сообщение">
  </fieldset>
  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
 <!-- Modal2 na svayz -->
 <div class="modal fade" id="call" tabindex="-1" aria-labelledby="calla" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="calla" >Связь с нами</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p class=""style="font-size:20px; color: black"> Для того, чтобы связаться с нами можете позвонить по номеру: <br><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg> Телефон: <a href="tel:+7707007070">8-700-000-00-00</a> или 
       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg> <a href="https://wa.me/79200000000?text=Здравствуйте%2C+у+меня+есть+вопрос">Whattsap</a></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
