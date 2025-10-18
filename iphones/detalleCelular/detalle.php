<?php
require_once __DIR__ . '/../../config.php';
require_once __DIR__ . '/detallesData.php';
$page_title = 'TechZone - Detalles';
include __DIR__ . '/../../header.php';


// Obtener parámetros de la URL
$marca = $_GET['marca'] ?? '';
$id = $_GET['id'] ?? '';

if (isset($detalles[$marca][$id])) {
    $tel = $detalles[$marca][$id];
} else {
    echo "<main class='container'><h2>Teléfono no encontrado</h2></main>";
    include __DIR__ . '/../../footer.php';
    exit;
}
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>/css/detalle.css?v=<?php echo $asset_version; ?>">

<main class="detalle">
  <div class="detalle-card">
    <div class="detalle-img">
      <img src="<?php echo $base_url . '/' . $tel['imagen']; ?>" alt="<?php echo $tel['nombre']; ?>">
    </div>
    <div class="detalle-info">
      <h1><?php echo $tel['nombre']; ?></h1>
      <p class="precio">Desde $<?php echo $tel['precio']; ?></p>
      <p class="descripcion"><?php echo $tel['descripcion']; ?></p>
      <div class="detalle-buttons">
          <button class="back-button" onclick="window.history.back()">Volver</button>
          <button class="buy-button" onclick="location.href='<?php echo $base_url; ?>/comprar/comprar.php?marca=<?php echo $marca; ?>&id=<?php echo $id; ?>'">Comprar</button>
      </div>
    </div>
  </div>
</main>

<?php include __DIR__ . '/../../footer.php'; ?>

