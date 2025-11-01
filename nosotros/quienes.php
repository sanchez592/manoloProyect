<?php
require_once __DIR__ . '/../config.php';
$page_title = 'TechZone - Quiénes Somos';
include __DIR__ . '/../header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>/css/info-empresa.css">

<div class="info-container">
    <h1>Quiénes Somos</h1>
    
    <p>En <strong>TechZone</strong>, somos apasionados por la tecnología y el futuro digital. 
    Trabajamos para ofrecer dispositivos móviles con altos estándares de calidad, 
    brindando confianza, transparencia y acompañamiento en cada compra.</p>

    <div class="info-card">
        <h2>Nuestra Historia</h2>
        <p>Nacimos como un proyecto que busca facilitar el acceso a tecnología de punta, 
        a través de una experiencia digital clara, segura y personalizada.</p>
    </div>

    <button class="back-btn" onclick="history.back();">Volver</button>
</div>

<?php include '../footer.php'; ?>