<?php
require_once __DIR__ . '/config.php';
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?php echo isset($page_title) ? htmlspecialchars($page_title) : 'TechZone'; ?></title>
  <link rel="stylesheet" href="<?php echo $base_url; ?>/css/styles.css?v=<?php echo $asset_version; ?>" />
  </head>
<body>
<header class="site-header">
  <div class="container header-inner">
    <a class="logoMarca" href="<?php echo $base_url; ?>/index.php">
      <img src="<?php echo $base_url; ?>/assets/1758346168795.png" class="button__imgL" alt="logo">
    </a>

    <?php if (isset($page_title) && $page_title === 'TechZone - Inicio'): ?>
      <div class="header-techzone-title">
        <div class="presentacion">
          <div class="color">
            <div class="Nombre">
              <span class="letra">T</span>
              <span class="letra">E</span>
              <span class="letra">C</span>
              <span class="letra">H</span>
              <span class="letra">Z</span>
              <span class="letra">O</span>
              <span class="letra">N</span>
              <span class="letra">E</span>
              </div>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <div class="margenEncabezado">
      <div class="button__menu" role="button" aria-label="abrir menu">
        <img src="<?php echo $base_url; ?>/assets/menu.svg" class="button__img" alt="menu">
      </div>

      <div class="button__search" role="button" aria-label="buscar">
        <img src="<?php echo $base_url; ?>/assets/search.svg" class="button__img" alt="buscar">
      </div>

      <div class="button__carshop">
        <img src="<?php echo $base_url; ?>/assets/carShop.svg" class="button__img" alt="carrito">
      </div>
    </div>
  </div>
</header>

<nav class="nav">
  <div class="overlay"></div>
  <ul class="list">
    <li class="list__item">
      <div class="list__button">
        <img src="<?php echo $base_url; ?>/assets/dashboard.svg" class="list__img" alt="">
        <a href="<?php echo $base_url; ?>/index.php" class="nav__link">Inicio</a>
      </div>
    </li>

    <li class="list__item list__item--click">
      <div class="list__button list__button--click">
        <img src="<?php echo $base_url; ?>/assets/celular.svg" class="list__img" alt="">
        <a href="#" class="nav__link">Productos</a>
        <img src="<?php echo $base_url; ?>/assets/arrow.svg" class="list__arrow" alt="">
      </div>
      <ul class="list__show">
        <li class="list__inside"><a href="<?php echo $base_url ?> /iphones/Iphone.php" class="nav__link nav__link--inside">iphone</a></li>
        <li class="list__inside"><a href="<?php echo $base_url ?> /iphones/Samsung.php" class="nav__link nav__link--inside">samsung</a></li>
        <li class="list__inside"><a href="<?php echo $base_url ?> /iphones/Xiaomi_.php" class="nav__link nav__link--inside">Xiaomi</a></li>
        <li class="list__inside"><a href="<?php echo $base_url ?> /iphones/Google.php" class="nav__link nav__link--inside">Google</a></li>
      </ul>
    </li>

    <li class="list__item">
      <div class="list__button">
        <img src="<?php echo $base_url; ?>/assets/Login.svg" class="list__img" alt="">
        <a href="<?php echo $base_url ?> /login/login.php" class="nav__link">Login</a>
      </div>
    </li>

    <li class="list__item list__item--click">
      <div class="list__button list__button--click">
        <img src="<?php echo $base_url; ?>/assets/we.svg" class="list__img" alt="">
        <a href="#" class="nav__link">Quiénes somos</a>
        <img src="<?php echo $base_url; ?>/assets/arrow.svg" class="list__arrow" alt="">
      </div>

    <li class="list__inside">
      <a href="<?php echo $base_url;?>/nosotros/mision.php" class="nav__link nav__link--inside">Misión</a>
    </li>

    <li class="list__inside">
      <a href="<?php echo $base_url;?>/nosotros/vision.php" class="nav__link nav__link--inside">Visión</a>
    </li>

    <li class="list__item">
      <div class="list__button">
        <img src="<?php echo $base_url; ?>/assets/contactanos.svg" class="list__img" alt="">
        <a href="<?php echo $base_url;?>/contacto.php" class="nav__link">Contacto</a>
      </div>
    </li>
  </ul>
</nav>

<div class="search-bar" id="searchBar">
  <input type="text" id="searchInput" placeholder="Buscar productos...">
</div>