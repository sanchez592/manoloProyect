<?php
require_once __DIR__ . '/config.php';
$page_title = 'TechZone - Inicio';
include __DIR__ . '/header.php';

?>

<link rel="stylesheet" href="<?php echo $base_url; ?>/css/loop.css?v=<?php echo $asset_version; ?>" />

<div class="loop">
  <video autoplay muted loop playsinline class="video-fondo">
    <source src="assets/gif/publicidad.mp4" type="video/mp4">
    Tu navegador no soporta videos HTML5.
  </video>
</div>

<div class="empresa">
  <h1>techzone Proyect</h1>
</div>

<!-- From Uiverse.io by ilkhoeri -->
<div class="wrapper">
  <div class="inner" style="--quantity: 10;">
<!-------------------------------------------------------------------------------------------------->
    <div class="card" style="--index: 0;--color-card: 142, 249, 252;">
      <div class="img">
        <img src="/imgCell/iphone/iphone17.png"class="img">
      </div>

    </div>
    <div class="card" style="--index: 1;--color-card: 142, 252, 204;">
      <div class="img"></div>
    </div>
    <div class="card" style="--index: 2;--color-card: 142, 252, 157;">
      <div class="img"></div>
    </div>
    <div class="card" style="--index: 3;--color-card: 215, 252, 142;">
      <div class="img"></div>
    </div>
    <div class="card" style="--index: 4;--color-card: 252, 252, 142;">
      <div class="img"></div>
    </div>
    <div class="card" style="--index: 5;--color-card: 252, 208, 142;">
      <div class="img"></div>
    </div>
    <div class="card" style="--index: 6;--color-card: 252, 142, 142;">
      <div class="img"></div>
    </div>
    <div class="card" style="--index: 7;--color-card: 252, 142, 239;">
      <div class="img"></div>
    </div>
    <div class="card" style="--index: 8;--color-card: 204, 142, 252;">
      <div class="img"></div>
    </div>
    <div class="card" style="--index: 9;--color-card: 142, 202, 252;">
      <div class="img"></div>
    </div>
  </div>
</div>


<?php include __DIR__ . '/footer.php'; ?>