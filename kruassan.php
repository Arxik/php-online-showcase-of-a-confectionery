<?php
$title = "Круассаны";
    require "blocks/header.php";
  require_once 'connectpdo.php'; ?>
 <?php 
 $sql2 = $pdo -> prepare("SELECT * FROM kruassans");
 $sql2 -> execute();
 $uslugi = $sql2 -> fetchAll(PDO::FETCH_OBJ);
?>
<h2 class="text-center">Круассаны</h2>
    <div class="container">
      <div class="d-flex flex-wrap mb-3">
        <?php foreach($uslugi as $usluga): ?>
          <div class="card" style="width: 25rem; margin: 5px;"> 
           <img src="/imgs/<?php echo $usluga -> imgname; ?>" class="card-img-top" alt="<?php $usluga -> imgname?>" width="300" height="300">
            <div class="card-body">
              <h5 class="card-title"><?php echo $usluga ->title; ?></h5>
              <p class="card-text"><?php echo $usluga ->desc; ?></p>
            </div>
          </div> 
        <?php endforeach ?>
      </div>
    </div>
    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php
    require "blocks/footer.php";
    ?>
