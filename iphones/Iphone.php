<?php
require_once __DIR__ . '/../config.php';
$page_title = 'TechZone - iPhones';
include __DIR__ . '/../header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>/css/cellTarjeta.css?v=<?php echo $asset_version; ?>" />

<main class="container">
    <h1>IPhones
            <img src="<?php echo $base_url; ?>/assets/logosCel/logoIphones.png" class="logosCelulares" alt="logoCelular">
    </h1>

    <section class="grid">

<!-------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------->


    <!--cartas / celulares-->
        <div class="product-card">
            <div class="wrapper">
                <div class="card">
                    <div class="frond-page">
                        <img src="../imgCell/iphone/iphone17.png" alt="imagen de iphone 17">
                        <div class="card-info">
                            <h2 class="card-title">Iphone 17</h2>
                            <p class="card-subtitule">Desde $4.679.000</p>
                        </div>
                    </div>

                    <div class="back-page">
                        <div class="card-content">
                            <h3>Iphone 17</h3>
                            <p class="card-descripcion">
                                • Pantalla Super Retina XDR 6,3″.<br>
                                • Ceramic Shield 2, hasta 3x.<br>
                                • Cámaras Fusion traseras duales de 48 MP.<br>
                                • Cámara frontal 18MP. <br>
                                • Bateria para todo el día hasta 30h de video. <br>

                            </p>
                                <button class="card-button" onclick="location.href='<?php echo $base_url; ?>/iphones/detalleCelular/detalle.php?marca=iphone&id=17'">Explorar más</button>

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
                        <img src="../imgCell/iphone/iphone17Pro.png" alt="imagen de iphon 17 pro">
                        <div class="card-info">
                            <h2 class="card-title">Iphone 17 Pro</h2>
                            <p class="card-subtitule">Desde $6.439.010</p>
                        </div>
                    </div>

                    <div class="back-page">
                        <div class="card-content">
                            <h3>Iphone 17 Pro</h3>
                            <p class="card-descripcion">
                                • Pantalla ProMotion 6,3″. <br>
                                • Ceramic Shield 2. <br>
                                • Sistema de cámaras Pro para fotos y video profesional. <br>
                                • Batería hasta 31 horas de reproducción de video. <br>
                                • Chip A19 Pro: potencia Apple Intelligence y juegos.

                            </p>
                                <button class="card-button" onclick="location.href='<?php echo $base_url; ?>/iphones/detalleCelular/detalle.php?marca=iphone&id=17Pro'">Explorar más</button>

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
                        <img src="../imgCell/iphone/iphone17ProMax.png" alt="imagen de iphone 17 pro max">
                        <div class="card-info">
                            <h2 class="card-title">Iphone 17 Pro Max</h2>
                            <p class="card-subtitule">Desde $6.999.010</p>
                        </div>
                    </div>

                    <div class="back-page">
                        <div class="card-content">
                            <h3>Iphone 17 Pro Max</h3>
                            <p class="card-descripcion">
                                • Pantalla inmersiva de 6,86″ con detalles vibrantes. <br>
                                • Ceramic Shield 2, hasta 3× más resistente y duradero.<br>
                                • Chip A19 Pro, potencia Apple Intelligence y juegos.<br>
                                • Hasta 37 h de video para una autonomía sin límites.<br>
                                • Cámaras traseras de 48 MP que capturan cada detalle.<br>

                            </p>
                                <button class="card-button" onclick="location.href='<?php echo $base_url; ?>/iphones/detalleCelular/detalle.php?marca=iphone&id=17ProMax'">Explorar más</button>

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
                        <img src="../imgCell/iphone/iphoneair.png" alt="imagen de iphone air">
                        <div class="card-info">
                            <h2 class="card-title">Iphone Air</h2>
                            <p class="card-subtitule">Desde $5.829.010</p>
                        </div>
                    </div>

                    <div class="back-page">
                        <div class="card-content">
                            <h3>Iphone Air</h3>
                            <p class="card-descripcion">
                                • Diseño ultradelgado de 5,6 mm en titanio. <br>
                                • Batería todo el día. <br>
                                • Cámara Fusion avanzada de 48MP y zoom de 2x.<br>
                                • Diseñado para Apple Intelligence expresate facilmente. <br>
                                • Mayor flexibildad, el iPhone Air se activa con una eSIM.<br>

                            </p>
                                <button class="card-button" onclick="location.href='<?php echo $base_url; ?>/iphones/detalleCelular/detalle.php?marca=iphone&id=air'">Explorar más</button>

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