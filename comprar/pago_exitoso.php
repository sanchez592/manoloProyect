<?php
require_once __DIR__ . '/../config.php';
$page_title = "TechZone - Pago completado";
include __DIR__ . '/../header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>/css/pago_exitoso.css">

<div class="exito">

  <div class="exito-card">
    <h1>Pago completado</h1>

    <p class="mensaje">
      Gracias por tu compra.  
      Tu pago ha sido registrado con éxito y estamos procesando tu pedido.
    </p>

    <p class="detalle">
      Recibirás un correo con los detalles de tu compra y el seguimiento del envío.
    </p>

    <a href="<?php echo $base_url; ?>/index.php" class="btn-volver">Volver al inicio</a>
  </div>

</div>

<?php include __DIR__ . '/../footer.php'; ?>
