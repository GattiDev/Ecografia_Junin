<?PHP 
    include ('../setting/database.php');
	require_once "models/admin_model.php";
	include ('../setting/st_gallery.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!--/ Para que funcione en los navegadores viejos /-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!--/ Para los celulares, para que no hagan zoom /-->
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>Ecografía Junín :: Admin</title>
		<link rel='shortcut icon' href= "../materials/icon/icon.png">
		<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
		<link rel="stylesheet" href="css/styles.css">
				
		<!--/ Font Awesome V6 /-->
		<script src="https://kit.fontawesome.com/e28972e8bb.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="css/admin_styles.css" />
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
                    	<a class="nav-link" href="index.php">
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
				<nav id="section_button">	
                    
            		<a class="menu-btn" onclick="btn_paciente()">
						<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  							<path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
						</svg>
                        <span class="title">Paciente</span>
                    </a>

					<a class="menu-btn" onclick="btn_ecografia()"> 
						<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-vector-pen" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M10.646.646a.5.5 0 0 1 .708 0l4 4a.5.5 0 0 1 0 .708l-1.902 1.902-.829 3.313a1.5 1.5 0 0 1-1.024 1.073L1.254 14.746 4.358 4.4A1.5 1.5 0 0 1 5.43 3.377l3.313-.828L10.646.646zm-1.8 2.908-3.173.793a.5.5 0 0 0-.358.342l-2.57 8.565 8.567-2.57a.5.5 0 0 0 .34-.357l.794-3.174-3.6-3.6z"/>
							<path fill-rule="evenodd" d="M2.832 13.228 8 9a1 1 0 1 0-1-1l-4.228 5.168-.026.086.086-.026z"/>
						</svg>
						<span class="title">Ecografías</span>
                    </a> 
					<a class="menu-btn" onclick="btn_planillaMedica()"> 
						<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
							<path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
							<path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
						</svg>
                        <span class="title">Planilla Médica</span>
                    </a> 

					<a class="menu-btn" href="../views/informeMedico.php">
						<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-clipboard2-minus" viewBox="0 0 16 16">
							<path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z"/>
							<path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z"/>
							<path d="M6 8a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1H6Z"/>
						</svg>
                        <span class="title">Informes Médicos</span>
                    </a>

					<a class="menu-btn" onclick="btn_archive()">
						<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
  							<path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
						</svg>
                        <span class="title">Archivos</span>
                    </a>

                    <a class="menu-btn" href="../index.php">
						<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
							<path d="M7.5 1v7h1V1h-1z"/>
							<path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
						</svg>
                        <span class="title">Cerrar Sesion</span>
                    </a>

				</nav>

				<h2 id="titulo"></h2>
				
				<aside id="table">
					<section class="paciente"></section>
					<section class="ecografia"></section>
					<section class="planillaMedica"></section>
					<section class="editarPlanilla"></section>
					<section class="agregarImg"></section>
					<section class="InformeMedico"></section>     
					<section class="Archive"></section>    
				</aside>	
			</main> 
            <!-- Footer - Inicio -->
			
				
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

<!--/ Metodos /-->
<script type="text/javascript" src="js/method/adm_get_mt.js"></script>
<script type="text/javascript" src="js/method/adm_put_mt.js"></script>
<script type="text/javascript" src="js/method/adm_update_mt.js"></script>
<script type="text/javascript" src="js/method/adm_delete_mt.js"></script>
