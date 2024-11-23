<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
              <a class="navbar-brand navbar-logo" href="index.php">
                <img src = "materials/logo/logo.png" alt='Logo EcosJunín' />
              </a>
            </div>  
          </nav>
        </div>
      </header>
        
      <main>
       
        <div id="grid">
          
          <!--- ECOGRAFÍA GENERALES --->
          <div id="ecoGen" class="grid-container--pri">
            <h1 class="text_grid">Portal del Paciente</h1>
            <div id="InfMedico">               
              <div class="Formbox">
                <form action="controllers/login_paciente.php" method="POST">
                  <div id="boxInputName">
                    <div class="InputName">
                      <input type="text" class="name" name="user" required pattern='[A-Za-z Á-É-Í-Ó-Úá-é-í-ó-ú]+' placeholder="Tu apellido en mayúscula"/>
                    </div>
                  </div>
        
                  <div id="boxInputPass"> 
                    <div class="InputPass">
                      <input type="password" class="pass" name="password" required placeholder="Tu n° de DNI"/> 
                    </div>
                  </div>
                        
                  <button class="button button1" type="submit">Ingresar</button>
                </form>
              </div>
            </div>       
          </div>      
        </div>
      </main>

      <!-- Footer - Inicio -->
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