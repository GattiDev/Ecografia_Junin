<?PHP 
    include ('../setting/database.php');
    require_once "../admin/models/admin_model.php";  
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!--/ Para que funcione en los navegadores viejos /-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!--/ Para los celulares, para que no hagan zoom /-->
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>Ecografía Junín :: Informe Medico</title>
		<link rel='shortcut icon' href= "../materials/icon/icon.png">
		<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
		<link rel="stylesheet" href="../admin/css/styles.css">
				
		<!--/ Font Awesome V6 /-->
		<script src="https://kit.fontawesome.com/e28972e8bb.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="../admin/css/admin_styles.css" />
		<script src="../js/btn_navbar.js"></script>	
		<script src="js/adm_btn.js"></script>	

		<!--/ ALERTIFY /-->	
		<link rel="stylesheet" type="text/css" href="../bookstores/alertify/css/alertify.css">
		<link rel="stylesheet" type="text/css" href="../bookstores/alertify/css/themes/bootstrap.css">
		<script src="../bookstores/alertify/alertify.js"></script>
		<script src="../bookstores/jquery/jquery-3.7.0.min.js"></script>

		<!--/ Select2 Buscador /--->
		<link rel="stylesheet" type="text/css" href="../bookstores/select2/select2.min.css">
		<script src="../bookstores/select2/select2.min.js"></script>
		
	</head>
    <body>
    
    	<nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="../index.php">EcosJunín</a>
        	
			  <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         	<i class="fas fa-bars text-white"></i>
        </button>
        	
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
         	<ul class="navbar-nav ml-auto">
           	<div class="hori-selector">
						<div class="left"></div>
						<div class="right"></div>
					  </div>
              <li class="nav-item active">
               	<a class="nav-link" href="../admin/adm.php">
							    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
  								  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
							    </svg>
							    Home
						    </a>
              </li>
          </ul>
        </div>
    	</nav>
                
    	<aside id="views">

			  <!-- LOGO -->
			  <section id="logo">
				  <img src = "../materials/logo/logo-2.png" alt='Logo EcosJunín' />
			  </section>

       	<!-- HOME -->
			  <section id="home">
            
				  <!-- Main Content - Inicio -->
				  <main id="main_content">


            <h2 id="titulo">Informes Médicos</h2>
            
            <div class="BoxMenu">

              <form action="" method="get">
                <input type="text" name="busqueda" placeholder="Buscar por Apellido"></input><br>
                <input class="submit btn_sub submit-bt" type="submit" name="enviar" value="Buscar"></input>
              </form>

              <?php 
                if(isset($_GET['enviar'])){
          
                  $busqueda = $_GET["busqueda"];

                  $obj_get = new Get_Model();
                  $data_patient = $obj_get->Get_Pacientes($busqueda);
      
                  while ($date_patient = mysqli_fetch_assoc($data_patient)) { 
                    $id = $date_patient['id']; 
                    $name = $date_patient['name']; 
                    $surname = $date_patient['surname']; 
                    $dni = $date_patient['dni']; 
            
                    $Studios_Model = new Get_Model();
                    $get_patient = $Studios_Model-> Get_studiesPatient($id);
                  
                    while($studiesPatient = mysqli_fetch_assoc($get_patient)){ 

                      $id_paciente = $studiesPatient['id_patient'];

                      /*echo "Nombre de la Pasiente: " . $get_patient['name'] . " " . $get_patient['surname'];*/?>
                      <div class="menu">
                        <h6><?php echo $name .' ' . $surname;?></h6>
                        <p><?php echo $dni;?></p>
                        <a href="../admin/planilla.php?p=<?php echo $id_paciente;?>">Ver</a>
                      </div>
                    <?php }
                  }
                }
              ?>
            </div>
          </main> 
  		  </section>

			<!-- OPCIONES PARA COMPLETAR -->
			<?php //---> OPCIONES PARA COMPLETAR -->
			require_once '../views/insert_data.php';
		?>	
			<!-- Turno Online -->
			<!-- <section class="TurnoOnline"></section> -->
    	</aside>   
		
		<!-- Footer - Inicio -->
		<footer id="footer_content">
		    <h6 class="copybox"> Consultorio ~ Ecografía Junín | <?php echo date("Y");?> | Todos los derechos reservados </h6>
		    <h6 class="devbox"> &copy; Developed by <a href="https://www.gattidev.com/" target="_blank" title="Gatti Developer">GattiDev</a> </h6>
        </footer>
		<!-- Footer - Fin -->

  		<!--<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>-->
		<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
		<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'>

		</script><script  src="../js/navbar.js"></script>
	</body>
</html>

<!---/******************************** */--->


<script type="text/javascript">
        $(document).ready(function(){
            $('#controlBuscador').select2();
        });
    </script>