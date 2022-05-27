<?php
$title = "Десерты";
    require "blocks/header.php";
  require_once 'connectpdo.php'; ?>
 <?php 
 $sql2 = $pdo -> prepare("SELECT * FROM deserts");
 $sql2 -> execute();
 $izd = $sql2 -> fetchAll(PDO::FETCH_OBJ);
?>
  <h2 class="text-center">Десерты</h2>
    <div class="container">
      <div class="d-flex flex-wrap mb-3">
        <?php foreach($izd as $izdelia): ?>
          <div class="card" style="width: 25rem; margin: 5px;"> 
          <!-- Из базы данных  берется картинка -->
           <img src="/imgs/<?php echo $izdelia -> imgname; ?>" class="card-img-top" alt="<?php $izdelia -> imgname?>" width="300" height="300">
            <div class="card-body">
              <!-- Из базы данных берется название изделия -->
              <h5 class="card-title"><?php echo $izdelia ->title; ?></h5>
              <!-- Из базы данных берется описание изделия -->
              <p class="card-text"><?php echo $izdelia ->desc; ?></p>
              <!-- Из базы данных берется цена изделия -->
              <p class="card-text text-end"><?php echo $izdelia ->price; ?> Тг</p>
            </div>
          </div> 
        <?php endforeach ?>
      </div>
    </div>
    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php
    require "blocks/footer.php";
    ?>
