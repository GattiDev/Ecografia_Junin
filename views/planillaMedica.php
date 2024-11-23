<?php
    include ('../setting/database.php');
    require_once "../admin/models/admin_model.php";

?>
<div id="box">
    <div class="planillaMedica">
		
        <form id="frmPlanillaMedica" action="controllers/upd_studie.php" method="post" enctype="multipart/form-data">

            <!-- Paciente -->
            
		    <label>Paciente</label>
		    <select id="controlBuscador" class="select-data" name="id_patient">
                <option value='0' selected="true">Buscar . . .</option>
			    
                <?php 
				   	$Run_Moddel = new Run_Model();
					$data_setting = $Run_Moddel->Run_patient();
							                    	
                   	while($get_setting = mysqli_fetch_assoc($data_setting)){ ?>  
								
						<option  value="<?php echo $get_setting['id']; ?>"> 
                            <?php echo $get_setting['dni']  . ' - ' .  $get_setting['name']; ?>
                        </option>                      				
            		    			
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
      
         
                <label for="pdf">Archivos | PDF</label>
                <input type="file" name="files[]" multiple id="archivo" class="form-control" required>
            
                
            <input class="btn_sub submit" type="submit" name="submit" value="Guardar">

        </form>
    </div>
</div>

<!--/ JS - Select2 Buscador /-->
<script type="text/javascript">
	$(document).ready(function(){
		$('#controlBuscador').select2();
	});
</script>