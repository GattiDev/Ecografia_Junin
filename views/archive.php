<?php 
    include ('../setting/database.php');
    require_once "../admin/models/admin_model.php";
    
    // Datos del Paciente
    $Run_ModelP = new Run_Model();
	$run_patient = $Run_ModelP->Run_patient();

    // Datos del Destino
    $Run_ModelD = new Run_Model();
    $run_destiny = $Run_ModelD->Run_destiny();
?>

<div id="box">
    <div class="archive">
		
        <form id="frmArchive" action="controllers/deleteArchive.php" method="post" enctype="multipart/form-data">

            <!-- Paciente -->
		    <label>Paciente</label>
			<select class="select-data" name="id_patient">
                <option value="0">Seleccionar:</option>
                <?php						                    	
                   	while($get_patient = mysqli_fetch_assoc($run_patient)){ ?>  
								
						<option  value="<?php echo $get_patient['id']; ?>"> <?php echo $get_patient['dni']  . ' - ' .  $get_patient['name']; ?></option>                      				
            		    			
					<?php }
					
				?>
            </select>

            <!-- Destino -->
            <label for="destino">Destino</label>
            <select class= "selector" name="id_destino">
                <option value="0">Seleccione:</option>
                <?php  
                    while($get_destiny = mysqli_fetch_assoc($run_destiny)){ ?>
                        <option  value="<?php echo $get_destiny['id']; ?>"> <?php echo $get_destiny['destiny'];?></option>
                <?php } ?>         
            </select></br>
                          
            <label for='fecha'>Fecha *</label>
            <input class='fecha' type='date' name='fecha' required='required'>
  
            </br>
            
            <input class="btn_sub submit" type="submit" name="submit" value="Eliminar">

        </form>
    </div>
</div>