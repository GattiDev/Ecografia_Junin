<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel='shortcut icon' href= "../materials/icon/icon.png">
        <title>Ecografía Junín :: Sobre Mí</title>
        <link rel='stylesheet' href='../css/style.css'>
        <link rel='stylesheet' href='../css/includes/responsive_style.css'>
    </head>
    <body>
        <div>
            <header>
            <div id="menu">
                    <nav class="navbar dark-mode" role="navigation">
                        <div class="navbar__logo"><img src = "../materials/logo/logo.png" alt='Logo EcosJunín' /></div>   
                        <ul class="navbar__links">
                            <li class="navbar__link first"><a href="../index.php#banner">Inicio</a></li>
                            <li class="navbar__link second"><a href="../index.php#menu__options">Ecografías</a></li>
                            <li class="navbar__link third"><a href="obras_sociales.php">Obras Sociales</a></li>
                            <li class="navbar__link fifth"><a href="#">Directora Médica</a></li>
                            <li class="navbar__link four"><a href="../index.php#mapa">Contacto</a></li>
                        </ul>   
                        <button class="burger">
                            <span class="bar"></span>  
                        </button> 

                        <div id="button_First">
                            <a href="https://wiri.la/equipos/cema" target="_blank"><button class="button button1">Solicitar Turno</button></a>
                            <a href="../informeMedico.php"><button class="button button2">Portal del Paciente</button></a>
                        </div>  
                    </nav>
                </div>              
            </header>
            <main>
                                              
                <div id="grid grid-sobremi">
                    <div id="sobre_mi" class="grid-container--sobreMi">

                        <div class="grid-item--img gridImg">
                            <img src="../materials/img/img-1.png" />
                        </div>
                        <div class="grid-item--text gridText">
                            <h3>Directora Médica</h3>
                            <p>La Dra. María Clara Capponi es Médica especialista
                            en Diagnóstico por Imágenes.</p>
                            <p>Fundadora y directora de EcosJunín, con una amplia formación
                                y experiencia en diversas áreas de la ecografía y la ultrasonografía.
                            </p>

                            <p>A lo largo de su carrera, ha obtenido múltiples postgrados y certificaciones tales como:</p>

                            <p class="p p_primari"> <span>~</span> Ecografía General. </p>			
                            <p class="p"> <span>~</span> Ecografía y Ultrasonografía Gineco-Obstétrica. </p>
                            <p class="p"> <span>~</span> Ecocardiografía Fetal. </p>
                            <p class="p"> <span>~</span> Certificación en Doppler Gineco-Obstétrico. </p>
                            <p class="p"> <span>~</span> Certificación en Translucencia Nucal. </p>
                            <p class="p p_ultimo"> <span>~</span> Ecografía Tridimensional (3D-4D). </p>


                            <p class="p p_data">
                                La Dra. Capponi ofrece atención personalizada y de alta calidad con 
                                tecnología de vanguardia para diagnósticos precisos.
                                <br>
                                Su compromiso con la salud y bienestar de sus pacientes es el motor que 
                                impulsa su práctica médica, garantizando un servicio cálido, humano y profesional.
                            </p>                      
                        </div>
                    </div>               
                </div>            
            </main>

            <!-- Footer - Inicio -->
		    <!-- Footer - Inicio -->
            <footer id="footer_content">
                <div class="img1">
                    <img src="../materials/icon/icon-ubicacion.png" />
                    <p>Malvinas Argentinas 225, Junín, Provincia de Buenos Aires</p>
                </div>

                <div class="img1">
                    <img src="../materials/icon/icon-telefono.png" />
                    <p class="tel">236-4433200 / 236-4433600</p>
                </div>

                <div class="img2">
                    <img src="../materials/icon/icon-whatsapp.png" />
                    <p class="tel">2364-551977</p>
                </div>
                <div class="img2">
                    <p class="tel">Enviar: Apellido, nombres, dni, mail, 
                    <p class="tel">F/nac y Profesional para quien solicita el turno.</p>
                </div>
                <div class="img3">
                    <a href="https://www.facebook.com/ecografiajunin4d"><img src="../materials/icon/icon-facebook.png" /></a>
                    <a href="https://www.instagram.com/ecografiasjunin/"><img src="../materials/icon/icon-instagram.png" /></a>
                </div>
                <h6><?php echo date("Y");?> | Todos los derechos reservados </h6>
                <h6> &copy; Developed by <a href="https://www.gattidev.com/" target="_blank" title="Gatti Developer">GattiDev</a> </h6>
            </footer>
	    </div>       
    </body>
</html>
<!-- INCLUDE JS -->
<script  src="../js/menu_script.js"></script>