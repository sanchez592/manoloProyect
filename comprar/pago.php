<?php
require "../config.php";
require "../header.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: $base_url");
    exit;
}

$nombre   = $_POST['nombre'] ?? '';
$email    = $_POST['email'] ?? '';
$direccion= $_POST['direccion'] ?? '';
$cantidad = $_POST['cantidad'] ?? 1;
$marca    = $_POST['marca'] ?? '';
$id       = $_POST['id'] ?? '';
$producto = $_POST['producto'] ?? '';
$precio   = $_POST['precio'] ?? 0;

?>

<!-- Enlaza exactamente a /css/pago.css -->
<link rel="stylesheet" href="<?php echo $base_url; ?>/css/pago.css?v=<?php echo $asset_version; ?>">

<div class="pago">
  <div class="pago-card">

    <!-- Usa h1 porque el CSS que tienes lo cubre -->
    <h1>Finalizar pago</h1>

    <p><strong>Producto:</strong> <?php echo htmlspecialchars($producto); ?></p>
    <p><strong>Cantidad:</strong> <?php echo htmlspecialchars($cantidad); ?></p>
    <hr>

    <form action="procesar_pago.php" method="POST" id="formPago">

      <!-- ocultos -->
      <input type="hidden" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>">
      <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
      <input type="hidden" name="direccion" value="<?php echo htmlspecialchars($direccion); ?>">
      <input type="hidden" name="cantidad" value="<?php echo htmlspecialchars($cantidad); ?>">
      <input type="hidden" name="marca" value="<?php echo htmlspecialchars($marca); ?>">
      <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
      <input type="hidden" name="producto" value="<?php echo htmlspecialchars($producto); ?>">
      <input type="hidden" name="precio" value="<?php echo htmlspecialchars($precio); ?>">

      <label>Teléfono de contacto:</label>
      <input type="text" name="telefono" required>

      <label>Método de pago:</label>
      <select id="metodo" name="metodo_pago" required>
        <option value="">Seleccione</option>
        <option value="tarjeta">Tarjeta crédito / débito</option>
        <option value="transferencia">Transferencia bancaria</option>
        <option value="pse">PSE</option>
      </select>

      <!-- Tarjeta -->
      <div id="tarjeta_fields" style="display:none;">
        <label>Número de tarjeta:</label>
        <input type="text" name="num_tarjeta" maxlength="19">

        <label>Fecha de vencimiento (MM/AA):</label>
        <input type="text" name="vencimiento" maxlength="5">

        <label>CCV / CVV:</label>
        <input type="text" name="cvv" maxlength="4">
      </div>

      <!-- Transferencia / billeteras -->
      <div id="transferencia_fields" style="display:none;">
        <label>Banco:</label>
        <select name="banco">
          <option value="">Seleccione</option>
          <option value="Bancolombia">Bancolombia</option>
          <option value="Banco de Bogotá">Banco de Bogotá</option>
          <option value="Davivienda">Davivienda</option>
          <option value="BBVA">BBVA</option>
          <option value="Nequi">Nequi</option>
          <option value="Daviplata">Daviplata</option>
          <option value="Itaú">Itaú</option>
          <option value="Banco Caja Social">Banco Caja Social</option>
          <option value="Scotiabank Colpatria">Scotiabank Colpatria</option>
        </select>

        <label>Número de cuenta:</label>
        <input type="text" name="referencia">
      </div>

    
      <input type="submit" value="Confirmar Pago" class="buy-confirm-button">

   
      <a href="<?php echo $base_url; ?>/comprar/comprar.php?marca=<?php echo urlencode($marca); ?>&id=<?php echo urlencode($id); ?>"
         class="go-back">Cancelar</a>

    </form>
  </div>
</div>

<script>
document.getElementById("metodo").addEventListener("change", function() {
  var m = this.value;
  document.getElementById("tarjeta_fields").style.display =
    (m === "tarjeta") ? "block" : "none";
  document.getElementById("transferencia_fields").style.display =
    (m === "transferencia" || m === "nequi" || m === "daviplata" || m === "pse") ? "block" : "none";
});
</script>

<?php require "../footer.php"; ?>



