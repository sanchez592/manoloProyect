<?php
require_once __DIR__ . '/../config.php';
$page_title = 'TechZone - Visión';
include __DIR__ . '/../header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>/css/info-empres.css">

<div class="info-container">
    <h1>Visión</h1>

    <div class="info-card">
        <p>Convertirnos en la tienda de tecnología líder en la región, 
        reconocida por su excelencia en servicio, innovación constante 
        y compromiso con la satisfacción del cliente.</p>
    </div>

    <button class="back-btn" onclick="history.back();">Volver</button>
</div>

<?php include '../footer.php'; ?>
