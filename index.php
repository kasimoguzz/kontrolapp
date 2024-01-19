<?php

    require "libs/functions.php";
?>



<?php include "partials/_header.php" ?>
<?php include "partials/_navbar.php" ?>

<div>

    <div class="row">
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="img/2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="text-white">Şirket Toplantıları</h1>
        <p style="font-size:20px; color:white; font-weight:bold;">Salı günü 19:00 ' da Toplantı salonunda</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="img/1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="text-white">Şirket Hakkında</h1>
        <p style="font-size:20px; color:white; font-weight:bold;">2000 den beri İT alanında çalışan Ve büyümeye devam eden bir Şirket</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="text-white">Duyuru</h1>
        <p style="font-size:20px; color:white; font-weight:bold;">Sizlere büyük bir heyecan ve gurur ile duyurmak isteriz ki,  olarak uzun bir çalışmanın ardından yeni bir ürünü müjdelemek için buradayız! Müşteri memnuniyetini her zaman ön planda tutarak yaptığımız çalışmaların bir sonucu olarak, sizlere daha iyi hizmet sunabilmek için sürekli olarak yeniliklere odaklanıyoruz.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        
    </div>
  
</div>
<?php include "partials/_footer.php" ?>