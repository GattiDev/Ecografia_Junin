<?PHP 
    include ('setting/database.php');
	require_once "admin/models/admin_model.php";
	include ('setting/st_gallery.php');

	$id_paciente = $_GET["p"];
    $id_destino = $_GET["d"];

    
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!--/ Para que funcione en los navegadores viejos /-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!--/ Para los celulares, para que no hagan zoom /-->
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>Consultorio | Ecografía Junín</title>
		<link rel='shortcut icon' href= "materials/icon/icon.png">
    	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
		<link rel="stylesheet" href="admin/css/styles.css">
				
		<!--/ Font Awesome V6 /-->
		<script src="https://kit.fontawesome.com/e28972e8bb.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="admin/css/admin_styles.css" />
		<script src="js/btn_navbar.js"></script>	
		<script src="admin/js/adm_btn.js"></script>	

		<!--/ ALERTIFY /-->	
		<link rel="stylesheet" type="text/css" href="bookstores/alertify/css/alertify.css">
		<link rel="stylesheet" type="text/css" href="bookstores/alertify/css/themes/bootstrap.css">
		<script src="bookstores/alertify/alertify.js"></script>
		<script src="bookstores/jquery/jquery-3.7.0.min.js"></script>
	</head>
    <body>
    
    	<nav class="navbar navbar-expand-custom navbar-mainbg">
        	<a class="navbar-brand navbar-logo" style="cursor: default;">EcosJunín</a>
        	
			<button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            	<i class="fas fa-bars text-white"></i>
        	</button>
        	
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
            	<ul class="navbar-nav ml-auto">
                	<div class="hori-selector">
						<div class="left"></div>
						<div class="right"></div>
					</div>

                	<li class="nav-item">
                    	<a class="nav-link" href="index.php">
							<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
  								<path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
							</svg>
							Home
						</a>
                	</li>

					<li class="nav-item active">
                    	<a class="nav-link" style="cursor: default;">
							<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
  								<path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
							</svg>
							Planilla del paciente
						</a>
                	</li>
            	</ul>
        	</div>
    	</nav>
                
    	<aside id="views">

			<!-- LOGO -->
			<section id="logo">
				<img src = "materials/logo.png" alt='Logo EcosJunín' />
			</section>

       		<!-- Planilla -->
			<section class="BoxMenu" style="text-align: center; !important">
				
            		<?php 

						

                        $Get_ModelP = new Get_Model();
                        $get_paciente = $Get_ModelP->Get_patient($id_paciente);
                
                        while($paciente = mysqli_fetch_assoc($get_paciente)){ 

							$name = $paciente['name']. ' ' .$paciente['surname'];

                            $Get_ModelD = new Get_Model();
							$get_destiny = $Get_ModelD->Get_destiny($id_destino);
                    
                    		while($destiny = mysqli_fetch_assoc($get_destiny)){  ?>
								
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
								  		<li class="breadcrumb-item nav-dataDes active"><a class="dataDes" href="planilla.php?p=<?php echo $id_paciente;?>"><?php echo $name; ?></a></li>
								  		<li class="breadcrumb-item nav-dataAct" aria-current="page"><?php echo $destiny['destiny']; ?></li>
									</ol>
							  	</nav>
								
                            <?php

                                $Get_Model = new Get_Model();
                               /* $get_studie = $Get_Model->Get_studieDestino($id_destino);*/
                               $get_studie = $Get_Model->Get_studieDestino($id_destino, $id_paciente);
                                while($studie = mysqli_fetch_assoc($get_studie)){  
                            
                                    $id = $studie['id'];
                                    $date = $studie['date'];
                                    $fecha = date("d/m/Y", strtotime($date)); ?>
                                
                                    <div class="menu">
                                        <h6><?php echo $fecha;?></h6>
										<p></p>
                                        <a href="ver-planilla.php?p=<?php echo $id_paciente;?>&d=<?php echo $id_destino;?>&s=<?php echo $id;?>">Ver</a>
                                    </div>
                            
                                <?php }
                            }
                        }
            		?>
        		
			</section>	
		
    	</aside>   
		
		<!-- Footer - Inicio -->
		<footer id="footer_content">
		    <h6 class="copybox"> Consultorio ~ Ecografía Junín | <?php echo date("Y");?> | Todos los derechos reservados </h6>
		    <h6 class="devbox"> &copy; Developed by <a href="https://www.gattidev.com/" target="_blank" title="Gatti Developer">GattiDev</a> </h6>
        </footer>
		<!-- Footer - Fin -->

  		<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
		<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
		<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'>

		</script><script  src="js/navbar.js"></script>
	</body>
</html>
