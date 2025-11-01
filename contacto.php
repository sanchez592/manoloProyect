<?php
$page_title = "Contacto";
require_once 'config.php';
include 'header.php';

$mensaje_guardado = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"] ?? '';
    $email = $_POST["email"] ?? '';
    $mensaje = $_POST["mensaje"] ?? '';

    $registro = "Nombre: $nombre\nEmail: $email\nMensaje: $mensaje\n----\n";

    file_put_contents("info/mensajes.txt", $registro, FILE_APPEND | LOCK_EX);
    $mensaje_guardado = true;
}
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>/css/info-empresa.css">

<div class="info-container">
    <h1>Contacto</h1>

    <p>¿Tienes dudas, sugerencias o deseas más información? Envíanos tu mensaje.</p>

    <?php if ($mensaje_guardado): ?>
        <div class="info-card">
            ✅ Tu mensaje ha sido enviado con éxito.
        </div>
    <?php endif; ?>

    <form method="POST" style="margin-top:20px;">
        <div class="info-card">
            <label>Nombre:</label>
            <input type="text" name="nombre" required style="width:100%; padding:10px;margin-top:5px;"> 

            <label style="margin-top:10px;">Email:</label>
            <input type="email" name="email" required style="width:100%; padding:10px;margin-top:5px;">

            <label style="margin-top:10px;">Mensaje:</label>
            <textarea name="mensaje" rows="4" required style="width:100%; padding:10px;margin-top:5px;"></textarea>

            <button type="submit" class="back-btn" style="margin-top:15px;">Enviar</button>
        </div>
    </form>

    <button class="back-btn" onclick="history.back();">Volver</button>
</div>

<?php include 'footer.php'; ?>
