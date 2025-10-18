<?php
require_once __DIR__ . '/../config.php';
$page_title = 'TechZone - Samsung';
include __DIR__ . '/../header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>/css/cellTarjeta.css?v=<?php echo $asset_version; ?>" />

<main class="container">
    <h1>Samsung Phones
            <img src="<?php echo $base_url; ?>/assets/logosCel/logoSamsung.png" class="logosCelulares" alt="logoCelular">
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
                        <img src="../imgCell/Samsung/SamsungGalaxyS25.png" alt="Imagen Samsung Galaxy S25">
                        <div class="card-info">
                            <h2 class="card-title">Samsung S25</h2>
                            <p class="card-subtitule">Desde $4.879.990</p>
                        </div>
                    </div>

                    <div class="back-page">
                        <div class="card-content">
                            <h3>Samsung S25</h3>
                            <p class="card-descripcion">
                                • Edición de fotos y videos con Inteligencia Artificial.<br>
                                • Encuentra tus canciones favoritas solo tarareando.<br>
                                • Diseño innovador y más delgado.<br>
                                • Convierte grabaciones en notas claras y organizadas.  <br>

                            </p>
                                <button class="card-button" onclick="location.href='<?php echo $base_url; ?>/iphones/detalleCelular/detalle.php?marca=samsung&id=S25'">Explorar más</button>
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
                        <img src="../imgCell/Samsung/SamsungGalaxyS25+.png" alt="Imagen Samsung Galaxy S25+">
                        <div class="card-info">
                            <h2 class="card-title">Samsung S25+</h2>
                            <p class="card-subtitule">Desde $5.499.900</p>
                        </div>
                    </div>

                    <div class="back-page">
                        <div class="card-content">
                            <h3>Samsung S25+</h3>
                            <p class="card-descripcion">
                                • Edición de fotos y videos con Inteligencia Artificial.<br>
                                • Encuentra tus canciones favoritas solo tarareando.<br>
                                • Diseño innovador y más delgado.<br>
                                • Convierte grabaciones en notas claras y organizadas.<br>
                                • Incluye Buds3. <br>

                            </p>
                                <button class="card-button" onclick="location.href='<?php echo $base_url; ?>/iphones/detalleCelular/detalle.php?marca=samsung&id=S25Plus'">Explorar más</button>
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
                        <img src="../imgCell/Samsung/SamsungGalaxyS25Ultra.png" alt="Imagen Samsung Galaxy S25Ultra">
                        <div class="card-info">
                            <h2 class="card-title">Samsung  S25 Ultra</h2>
                            <p class="card-subtitule">Desde $7.599.990</p>
                        </div>
                    </div>

                    <div class="back-page">
                        <div class="card-content">
                            <h3>Samsung S25 Ultra</h3>
                            <p class="card-descripcion">
                                • Las mejores fotos con su lente principal de 200 MP.<br>
                                • Edición de fotos y videos con Inteligencia Artificial.<br>
                                • Encuentra tus canciones favoritas solo tarareando.<br>
                                • Incluye S pen.<br>
                                • Incluye Buds3.<br>

                            </p>
                                <button class="card-button" onclick="location.href='<?php echo $base_url; ?>/iphones/detalleCelular/detalle.php?marca=samsung&id=S25Ultra'">Explorar más</button>
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
                        <img src="../imgCell/Samsung/SamsungZFold.png" alt="Imagen Samsung Galaxy ZFold">
                        <div class="card-info">
                            <h2 class="card-title">Samsung Galaxy ZFold</h2>
                            <p class="card-subtitule">Desde $9.999.990</p>
                        </div>
                    </div>

                    <div class="back-page">
                        <div class="card-content">
                            <h3>Samsung Galaxy ZFold</h3>
                            <p class="card-descripcion">
                                • Diseño plegable, pantalla principal de 7.6" calidad QXGA+.<br>
                                • Pantalla de 6.2" (Cover Screen).<br>
                                • Resistencia al agua y al polvo. (Certificación IPX8).<br>
                                • Multitarea optimizada para maximizar la productividad.<br>
                                • Accesos directos y fáciles a tus Apps mas frecuentes. <br>

                            </p>
                                <button class="card-button" onclick="location.href='<?php echo $base_url; ?>/iphones/detalleCelular/detalle.php?marca=samsung&id=ZFold'">Explorar más</button>
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