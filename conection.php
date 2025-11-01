<?php
// Datos de conexión
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$basedatos = "tienda";

// Crear conexión
$conn = new mysqli($servidor, $usuario, $contraseña, $basedatos);

// Verificar conexión
if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}
?>

<!------------------------------------------------------
<?php
// Datos de conexión
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$basedatos = "tienda";

// Crear conexión
$conn = new mysqli($servidor, $usuario, $contraseña, $basedatos);

// Verificar conexión
if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}
?>
-------------------------------------------------------->