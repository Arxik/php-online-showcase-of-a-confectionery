<?php
    $title = "Вопросы";
    require "blocks/header.php";
    ?>
    <div class="container">
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item" style="background-color:#228A4C">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed bg-gradient bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      Где вы находитесь?
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body text-white">Мы находимся по адресу: г. Алматы, Площадь Республики, Байсеитовой 40/1 угол улицы Сатпаева.</div>
    </div>
  </div><br><hr style="height: 3px; color: black;">
  <div class="accordion-item  text-white"  style="background-color:#228A4C">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed bg-gradient bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      Есть ли у вас пп десерты без сахара, муки и глютена?
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body text-white">Мы французская традиционная кондитерская. В наших десертах содержится настоящее сливочное масло жирностью 82,5%, жирные животные сливки, сахар и французский премиальный шоколад. В ассортименте нашей кондитерской вы не найдете десертов без сахара и десертов с заменителями.</div>
    </div>
  </div><br><hr style="height: 3px; color: black;">
  <div class="accordion-item " style="background-color:#228A4C">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed bg-gradient bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      Всегда ли есть в наличии десерты, представленные в каталоге?
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body text-white">Каждое утро мы выпекаем определенное количество десертов и круассанов,
Иногда, бывает такое, что определенный десерт заканчивается в первый час работы нашей кондитерской, актуальное наличие десертов вы сможете уточнив позвонив нам по телефону, или оставив заявку вашего заказа.</div>
    </div>
  </div>
</div><br><hr style="height: 3px; color: black;">
<div class="accordion-item" style="background-color:#228A4C">
    <h2 class="accordion-header "  id="flush-headingFour">
      <button class="accordion-button collapsed bg-gradient bg-dark text-white"  type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
      Сможете ли вы сделать торт по моему эскизу или фото?
      </button>
    </h2>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body text-white">Да, в нашей команде трудятся профессиональные художники и декораторы, которые с радостью воплотят любые ваши идеи. Оставьте заявку у в разделе «заказать торт».</div>
    </div>
  </div>
</div><br>

</div>
</div>

<?php
    require "blocks/footer.php";
    ?>