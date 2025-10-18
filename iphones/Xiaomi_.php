<?php
require_once __DIR__ . '/../config.php';
$page_title = 'TechZone - Xiaomi';
include __DIR__ . '/../header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>/css/cellTarjeta.css?v=<?php echo $asset_version; ?>" />

<main class="container">
    <h1>Xiaomi Phones
            <img src="<?php echo $base_url; ?>/assets/logosCel/logoXiaomi.png" class="logosCelulares" alt="logoCelular">
    </h1>

    <section class="grid">
    <!-------------------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------->
        <div class="product-card">
            <div class="wrapper">
                <div class="card">
                    <div class="frond-page">
                        <img src="../imgCell/Xiaomi/xiaomi 15.png " alt="Imagen Xiaomi 15">
                        <div class="card-info">
                            <h2 class="card-title">Xiaomi 15</h2>
                            <p class="card-subtitule">Desde $ 4.799.900</p>
                        </div>
                    </div>

                    <div class="back-page">
                        <div class="card-content">
                            <h3>Xiaomi 15</h3>
                            <p class="card-descripcion">
                                • Batería de 7.000 mAh que dura más de un día.<br>
                                • Cámara dual con IA para fotos más creativas.<br>
                                • Resistencia IP64 contra polvo y agua.<br>
                                • Pantalla fluida con tasa de 144Hz para mayor claridad.<br>
                                • Diseño curvo que se adapta a tu mano.<br>
                            </p>
                                <button class="card-button"     >Explorar más</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-------------------------------------------------------------------------------------------------->
        <div class="product-card">
            <div class="wrapper">
                <div class="card">
                    <div class="frond-page">
                        <img src="../imgCell/Xiaomi/xiaomi 15 ultra.png" alt="Imagen Xiaomi 15 Ultra">
                        <div class="card-info">
                            <h2 class="card-title">Xiaomi 15 Ultra</h2>
                            <p class="card-subtitule">Desde $ 4.799.900</p>
                        </div>
                    </div>

                    <div class="back-page">
                        <div class="card-content">
                            <h3>Xiaomi 15 Ultra</h3>
                            <p class="card-descripcion">
                                • Máximo rendimiento Potencia.<br>
                                • Fotografía profesional. <br>
                                • Carga ultrarrápida. <br>
                                • Mantente conectado con batería de larga duración.<br>
                                • AI avanzada Escribe con inteligencia artificia.<br>
                            </p>
                                <button class="card-button" onclick="location.href='<?php echo $base_url; ?>/iphones/detalleCelular/detalle.php?marca=xiaomi&id=15Ultra'">Explorar más</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-------------------------------------------------------------------------------------------------->
        <div class="product-card">
            <div class="wrapper">
                <div class="card">
                    <div class="frond-page">
                        <img src="../imgCell/Xiaomi/xiaomi f7.png" alt="Imagen Xiaomi Poco F7 ">
                        <div class="card-info">
                            <h2 class="card-title">Xiaomi Poco F7</h2>
                            <p class="card-subtitule">Desde $2.199.900</p>
                        </div>
                    </div>

                    <div class="back-page">
                        <div class="card-content">
                            <h3>Xiaomi Poco F7</h3>
                            <p class="card-descripcion">
                                • Memoria RAM: 12 GB.<br>
                                • Pantalla AMOLED de 6.83".<br>
                                • Cámara delantera de 20Mpx.<br>
                                • Batería de 6.5 Ah.<br>
                                • Resistente al agua.<br>

                            </p>
                                <button class="card-button" onclick="location.href='<?php echo $base_url; ?>/iphones/detalleCelular/detalle.php?marca=xiaomi&id=PocoF7'">Explorar más</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-------------------------------------------------------------------------------------------------->
        <div class="product-card">
            <div class="wrapper">
                <div class="card">
                    <div class="frond-page">
                        <img src="../imgCell/Xiaomi/xiaomi f7 ultra.png" alt="Imagen Xiaomi Poco F7 Ultra">
                        <div class="card-info">
                            <h2 class="card-title">Xiaomi Poco F7 Ultra</h2>
                            <p class="card-subtitule">Desde $3.499.900</p>
                        </div>
                    </div>

                    <div class="back-page">
                        <div class="card-content">
                            <h3>Xiaomi Poco F7 Ultra</h3>
                            <p class="card-descripcion">
                                • Memoria RAM: 16 GB.<br>
                                • Compatible con redes 5G.<br>
                                • Procesador Qualcomm Snapdragon 8 Elite.<br>
                                • Batería 5300 mAh.<br>
                                • Resistencia IP68.<br>
                            </p>
                                <button class="card-button" onclick="location.href='<?php echo $base_url; ?>/iphones/detalleCelular/detalle.php?marca=xiaomi&id=PocoF7Ultra'">Explorar más</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    <!-------------------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------------------->

    </section>
</main>
<?php include __DIR__ . '/../footer.php'; ?>