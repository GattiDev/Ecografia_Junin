<?php
    include ('../setting/database.php');
    require_once "../admin/models/admin_model.php";

    ?>
<div id="box">
    <div class="agregarImg">
		
        <form id="frmagregarImg" action="controllers/add_img.php" method="post" enctype="multipart/form-data">

            <!-- Paciente -->
		    <label>Paciente</label>
			<select class="select-data" name="id_patient">
                <option value="0">Seleccionar:</option>
                <?php
				   	$Run_Moddel = new Run_Model();
					$data_setting = $Run_Moddel->Run_patient();
							                    	
                   	while($get_setting = mysqli_fetch_assoc($data_setting)){ ?>  
								
						<option  value="<?php echo $get_setting['id']; ?>"> <?php echo $get_setting['dni']  . ' - ' .  $get_setting['name']; ?></option>                      				
            		    			
					<?php }
					
				?>
            </select>

            <!-- Destino -->
            <label for="destino">Destino</label>
            <select class= "selector" name="id_destino">
                <option value="0">Seleccione:</option>
                <?php  
                    $Run_ModelD = new Run_Model();
                    $run_destiny = $Run_ModelD->Run_destiny();
                    while($get_destiny = mysqli_fetch_assoc($run_destiny)){ ?>
                        <option  value="<?php echo $get_destiny['id']; ?>"> <?php echo $get_destiny['destiny'];?></option>
                <?php } ?>         
            </select></br>
                         
            <label for='fecha'>Fecha *</label>
            <input class='fecha' type='date' name='fecha' required='required'>

            <hr> 
                
            <div class='Upd_img'>
                <label for='titulo'>Seleccione 20 archivos de imagen para cargar:</label></br>
                    <input type="file" name="files[]" multiple >
            </div>
                
            <input class="btn_sub submit" type="submit" name="submit" value="Guardar">

        </form>
    </div>
</div>