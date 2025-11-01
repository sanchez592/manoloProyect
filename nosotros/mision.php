<?php
require_once __DIR__ . '/../config.php';
$page_title = 'TechZone - Misión';
include __DIR__ . '/../header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>/css/info-empresa.css">

<div class="info-container">
    <h1>Misión</h1>

    <div class="info-card">
        <p>Brindar a nuestros clientes acceso a dispositivos móviles de alta calidad 
        a precios competitivos, ofreciendo confianza, asesoría personalizada 
        y una experiencia de compra excepcional.</p>
    </div>

    <button class="back-btn" onclick="history.back();">Volver</button>
</div>

<?php include '../footer.php'; ?>
