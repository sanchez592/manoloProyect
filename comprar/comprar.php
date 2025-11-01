<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../iphones/detalleCelular/detallesData.php';

$marca = $_GET['marca'] ?? '';
$id = $_GET['id'] ?? '';

if (!isset($detalles[$marca][$id])) {
    echo "<main class='container'><h2>Teléfono no encontrado</h2></main>";
    include __DIR__ . '/../footer.php';
    exit;
}

$tel = $detalles[$marca][$id];
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>/css/comprar.css?v=<?php echo $asset_version; ?>">

<main class="comprar">
    <h1>Comprar <?php echo $tel['nombre']; ?></h1>

    <div class="comprar-card">
        <div class="comprar-img">
            <img src="<?php echo $base_url . '/' . $tel['imagen']; ?>" alt="<?php echo $tel['nombre']; ?>">
        </div>

        <div class="comprar-info">
            <p class="precio">Precio: $<?php echo $tel['precio']; ?></p>
            <p class="descripcion"><?php echo $tel['descripcion']; ?></p>

            <!-- IMPORTANTE: Manda a pago.php -->
            <form action="<?php echo $base_url; ?>/comprar/pago.php" method="POST">

                <input type="hidden" name="marca" value="<?php echo $marca; ?>">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="hidden" name="producto" value="<?php echo $tel['nombre']; ?>">
                <input type="hidden" name="precio" value="<?php echo $tel['precio']; ?>">

                <label for="nombre">Nombre completo:</label>
                <input type="text" name="nombre" id="nombre" required>

                <label for="email">Correo electrónico:</label>
                <input type="email" name="email" id="email" required>

                <label for="direccion">Dirección de envío:</label>
                <input type="text" name="direccion" id="direccion" required>

                <label for="cantidad">Cantidad:</label>
                <input type="number" name="cantidad" id="cantidad" value="1" min="1" required>

                <button type="submit" class="buy-confirm-button">Proceder al pago</button>

                <button type="button" class="go-back" onclick="window.history.back()">Volver</button>
            </form>
        </div>
    </div>
</main>

<?php include __DIR__ . '/../footer.php'; ?>

