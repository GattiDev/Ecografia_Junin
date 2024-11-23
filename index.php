<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta athor="GattiDev : Ezequiel Gatti" date="10/10/2023">
        <link rel='shortcut icon' href= "materials/icon/icon.png">
        <title>Ecografía Junín :: Consultorio</title>
        <link rel='stylesheet' href='css/style.css'>
    </head>
    <body>
        <div>
            <header>
                <div id="menu">
                    <nav class="navbar dark-mode" role="navigation">
                        <div class="navbar__logo">
                            <a class="navbar-brand navbar-logo" href="login.php">
                                <img src = "materials/logo/logo.png" alt='Logo EcosJunín' />
                            </a>
                        </div>   
                        <ul class="navbar__links">
                            <li class="navbar__link first"><a href="#banner">Inicio</a></li>
                            <li class="navbar__link second"><a href="#menu__options">Ecografías</a></li>
                            <li class="navbar__link third"><a href="views/obras_sociales.php">Obras Sociales</a></li>
                            <li class="navbar__link fifth"><a href="views/sobre_mi.php">Directora Médica</a></li>
                            <li class="navbar__link four"><a href="#mapa">Contacto</a></li>
                        </ul>   
                        <button class="burger">
                            <span class="bar"></span>  
                        </button> 
                        <div id="button_First">
                            <a href="https://wiri.la/equipos/cema" target="_blank"><button class="button button1">Solicitar Turno</button></a>
                            <a href="informeMedico.php"><button class="button button2">Portal del Paciente</button></a>
                        </div>  
                    </nav>
                </div>
                <div id="button_Second">
                    <a href="https://wiri.la/equipos/cema" target="_blank"><button class="button button1">Solicitar Turno</button></a>
                    <a href="informeMedico.php"><button class="button button2">Portal del Paciente</button></a>
                </div>
            </header>
            <main>
                <div id="banner">
                    <div class="img">
                        <picture>
                            <source srcset="materials/banner/ban-desk.png" media="(min-width: 1024px)" >
                            <source srcset="materials/banner/ban-mobile.png" media="(min-width: 377px)" >
                            <!-- Img - Principal -->     
                            <img src="materials/banner/ban.png" alt="Img-Principal" class="bannerimg">
                        </picture>
                    </div>
                    <div class="data">
                        <h1>ECOGRAFÍAS JUNÍN</h1>
                        <h1>Accedé a tus resultados y tenelos siempre a mano</h1>
                        <a href="informeMedico.php"><button class="btn button3">¡Descargar ahora!</button></a>
                    </div>
                </div>

                <div id="menu__options">
                    <!---- GENERALES ---->
                    <div class="menu__box">
                        <a href="#ecoGen">
                            <div class="menu__icons">
                                <img src="materials/icon/icon-generales.png" />
                            </div>
                            <h2 class="menu__categoty">GENERALES</h2>                            
                        </a>
                    </div>

                    <!---- DIAGNÓSTICO ---->
                    <div class="menu__box">
                        <a href="#diaMuj">
                            <div class="menu__icons">
                                <img src="materials/icon/icon-diagnostico.png" />
                            </div>
                            <h2 class="menu__categoty">DIAGNÓSTICO</h2>     
                        </a>
                    </div>

                    <!---- OBSTÉTRICAS ---->
                    <div class="menu__box">
                        <a href="#ecoObs">
                            <div class="menu__icons">
                                <img src="materials/icon/icon-obstetricas.png" />
                            </div>
                            <h2 class="menu__categoty">OBSTÉTRICAS</h2>                        
                        </a>
                    </div>

                    <!---- DOPPLER ---->
                    <div class="menu__box">
                        <a href="#ecoDop">
                            <div class="menu__icons icon">
                                <img src="materials/icon/icon-doppler.png" />
                            </div>
                            <h2 class="menu__categoty">DOPPLER</h2>                           
                        </a>
                    </div>
                </div>
                
                <div id="eco"> <!--grids -->
                    <div class="flex-container">
                    <!--- ECOGRAFÍA GENERALES --->
                        <div id="ecoGen" class="grid-container--pri">

                            <div id="img" > <!-- grid-item--img -->
                                <img class="img" src="materials/img/eco_gene.png" />
                            </div>
                        </div>
                        <div id="ecoGenText">
                            <div class="grid-item--text">
                                <h3>Ecografías Generales</h3>
                                <p>Cada uno de estos estudios está diseñado para evaluar diferentes sistemas y órganos, garantizando una atención integral y de alta calidad para nuestros pacientes:</p>
                                <p class="p p_primari"> <span>~</span> Ecografía de Tiroides. </p>			
                                <p class="p"> <span>~</span> Ecografía Abdominal. </p>
                                <p class="p"> <span>~</span> Ecografía Hepatobilio Pancreática. </p>
                                <p class="p"> <span>~</span> Ecografía Músculo Esquelética. </p>
                                <p class="p"> <span>~</span> Ecografía Reno Vesical. </p>
                                <p class="p p_ultimo"> <span>~</span> Ecografía Reno Vésico-Prostática. </p>	
                                <a href="https://wiri.la/equipos/cema" target="_blank"><button class="button button2 grid_btn">Solicitar Turno</button></a>
                            </div>
                        </div>


                    <!--- DIAGNÓSTICO DE LA MUJER --->
                        <div id="diaMuj" class="grid-container--sec">
                            <div id="img">
                                <img class="img" src="materials/img/diag_mujer.png" />
                            </div>
                        </div>
                        <div id="diaMujText">
                            <div class="grid-item--text">
                                <h3>Diagnóstico de la mujer</h3>
                                <p>Nos especializamos en estudios ecográficos dedicados al diagnóstico mamario y del aparato reproductor femenino. Entre las ecografías que ofrecemos se encuentran:</p>
                                <p class="p p_primari"> <span>~</span> Ecografía Mamaria. </p>
                                <p class="p"> <span>~</span> Ecografía Ginecológica. </p>
                                <p class="p"> <span>~</span> Ecografía Transvaginal (TV). </p>
                                <p class="p"> <span>~</span> Ecografía Transvaginal para recuento de folículos. </p>
                                <p class="p p_ultimo"> <span>~</span> Ecografía de fertilidad para decisiones sobre medicina reproductiva. </p>
                                <a href="https://wiri.la/equipos/cema" target="_blank"><button class="button button2 grid_btn">Solicitar Turno</button></a>
                            </div>
                        </div>

                    <!--- ECOGRAFÍAS OBSTÉTRICAS --->
                        <div id="ecoObs" class="grid-container--pri">
                            <div id="img">
                                <img class="img" src="materials/img/eco_obst.png" />
                            </div>
                        </div>
                        <div id="ecoObsText">
                            <div class="grid-item--text">
                                <h3>Ecografías Obstétricas</h3>
                                <p>Ofrecemos una completa gama de estudios ecográficos obstétricos y pediátricos, esenciales para el monitoreo del desarrollo fetal, la salud materna y la evaluación temprana de condiciones pediátricas:</p>
                                <p class="p p_primari"> <span>~</span> Ecografía Obstétrica. </p>
                                <p class="p"> <span>~</span> Translucencia Nucal. </p>
                                <p class="p"> <span>~</span> Ecografía Morfológica Fetal. </p>
                                <p class="p"> <span>~</span> Ecografía de Cadera del recién nacido. </p>
                                <p class="p"> <span>~</span> Ecografía de Medición de cuello del útero. </p>	
                                <p class="p"> <span>~</span> Ecocardiografia fetal.  </p>	
                                <p class="p p_ultimo"> <span>~</span> Ecografía 3D/4D. </p>
                                <a href="https://wiri.la/equipos/cema" target="_blank"><button class="button button2 grid_btn">Solicitar Turno</button></a>
                            </div>
                        </div>
                    <!--- ECOGRAFÍA DOPPLER --->
                        <div  id="ecoDop" class="grid-container--sec">
                            <div id="img">
                                <img class="img" src="materials/img/eco_doppl.png" />
                            </div>
                        </div>
                        <div id="ecoDopText">
                            <div class="grid-item--text">
                                <h3>Ecografías Doppler</h3>
                                <p>Estos estuidos proporcionan información precisa sobre el flujo sanguíneo y la salud vascular, esenciales para el diagnóstico y monitoreo detallado. Entre nuestros servicios se incluyen:</p>
                                <p class="p p_primari"> <span>~</span> Ecografía Doppler de Tiroides. </p>
                                <p class="p"> <span>~</span> Ecografía Doppler Ginecológico. </p>
                                <p class="p"> <span>~</span> Ecografía Doppler Obstétrico. </p>	
                                <p class="p"> <span>~</span> Ecodoppler Mamario. </p> 
                                <p class="p p_ultimo"> <span>~</span> Ecocardiografía fetal. </p>
                                <a href="https://wiri.la/equipos/cema" target="_blank"><button class="button button2 grid_btn">Solicitar Turno</button></a>
                            </div>                      
                        </div>
                    </div>
                </div>
                <div id="mapa">
                    <h1>¿ Dónde estamos ?</h1>
                    <div id="mapa">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.4245087455065!2d-60.95449792349031!3d-34.59342555695613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b8eb2b12100b3b%3A0x5ba179dd426c8b12!2sMalvinas%20Argentinas%20225%2C%20Jun%C3%ADn%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1697766433895!5m2!1ses-419!2sar" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </main>

            <!-- Footer - Inicio -->
		    <footer id="footer_content">
                <div class="img1">
                    <img src="materials/icon/icon-ubicacion.png" />
                    <p>Malvinas Argentinas 225, Junín, Provincia de Buenos Aires</p>
                </div>

                <div class="img1">
                    <img src="materials/icon/icon-telefono.png" />
                    <p class="tel">236-4433200 / 236-4433600</p>
                </div>

                <div class="img2">
                    <img src="materials/icon/icon-whatsapp.png" />
                    <p class="tel">2364-551977</p>
                </div>
                <div class="img2">
                    <p class="tel">Enviar: Apellido, nombres, dni, mail, 
                    <p class="tel">F/nac y Profesional para quien solicita el turno.</p>
                </div>
                <div class="img3">
                    <a href="https://www.facebook.com/ecografiajunin4d"><img src="materials/icon/icon-facebook.png" /></a>
                    <a href="https://www.instagram.com/ecografiasjunin/"><img src="materials/icon/icon-instagram.png" /></a>
                </div>
		        <h6><?php echo date("Y");?> | Todos los derechos reservados </h6>
		        <h6> &copy; Developed by <a href="https://www.gattidev.com/" target="_blank" title="Gatti Developer">GattiDev</a> </h6>
            </footer>
	    </div>       
    </body>
</html>
<!-- INCLUDE JS -->
<script  src="js/menu_script.js"></script>