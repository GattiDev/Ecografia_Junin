<!--/  Agregar Paciente /-->
<div id='modal_paciente' class="modal fade" id="add_paciente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	    <div class="modal-content">
		    <div class="modal-header">
			    <h5 class="modal-title" id="exampleModalLabel">Generando Lisencia</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="btn_exit('#modal_paciente')">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			<div class="modal-body">
				<form id="frm_paciente">
					<label>Apellido</label>
					<input type="text" class="form-control" id="name" name="name" required='required'></br> 
                    <label>Nombre</label>
					<input type="text" class="form-control" id="subname" name="subname" required='required'></br>  
                    <label>D.N.I.</label>
					<input type="text" class="form-control" id="dni" name="dni" maxlength="12" required='required'>           
				           	
					<button type="button" id="btn_paciente_add" class="btn_OP_sub btn-submit" data-dismiss="modal">Agregar</button>
				</form>
			</div>
				
			<div class="modal-footer">
				<button type="button" class="btn_OP_close btn-close" data-dismiss="modal" onclick="btn_exit('#modal_paciente')">Cerrar</button>		    
			</div>
		</div>
	</div>
</div>

<!--/  Agregar Ecografías /-->
<div id='modal_ecografia' class="modal fade" id="add_ecografia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	    <div class="modal-content">
		    <div class="modal-header">
			    <h5 class="modal-title" id="exampleModalLabel">Agregar</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="btn_exit('#modal_ecografia')">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			<div class="modal-body">
				<form id="frm_ecografia">
					<label>Ecografía</label>
					<input type="text" class="form-control" id="eco" name="eco" required='required'>            

					<button type="button" id="btn_ecografia_add" class="btn_OP_sub btn-submit" data-dismiss="modal">Agregar</button>
				</form>
			</div>
				
			<div class="modal-footer">
				<button type="button" class="btn_OP_close btn-close" data-dismiss="modal" onclick="btn_exit('#modal_ecografia')">Cerrar</button>		    
			</div>
		</div>
	</div>
</div>

<!--/ Modificar Paciente /-->
<div id='modal_pacienteUP' class="modal fade" id="edit_paciente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	    <div class="modal-content">
		    <div class="modal-header">
			    <h5 class="modal-title" id="exampleModalLabel">Actualizar Datos</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="btn_exit('#modal_pacienteUP')">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			<div class="modal-body">
				<form id="frm_UPpaciente">	
					
					<input type="number" hidden = "" class="form-control" id="up_id" name="up_id"></br>              
					<label>Apellido</label>
					<input type="text" class="form-control" id="up_name" name="up_name" required='required'></br> 
                    <label>Nombre</label>
					<input type="text" class="form-control" id="up_subname" name="up_subname" required='required'></br>  
                    <label>D.N.I.</label>
					<input type="text" class="form-control" id="up_dni" name="up_dni" maxlength="12" required='required'> 
                    
					<button type="button" id="btn_Up_paciente" class="btn_OP_sub btn-submit" data-dismiss="modal">Actualizar</button>
				</form>
			</div>
				
			<div class="modal-footer">
				<button type="button" class="btn_OP_close btn-close" data-dismiss="modal" onclick="btn_exit('#modal_pacienteUP')">Cerrar</button>		    
			</div>
		</div>
	</div>
</div>

<!--/ Modificar Ecografías /-->
<div id='modal_ecografiaUP' class="modal fade" id="edit_ecografia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	    <div class="modal-content">
		    <div class="modal-header">
			    <h5 class="modal-title" id="exampleModalLabel">Modificar</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="btn_exit('#modal_ecografiaUP')">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			<div class="modal-body">
				<form id="frm_UPecografia">	
					
					<input type="number" hidden = "" class="form-control" id="upId" name="upId"></br>              
					<label>Ecografía</label>
					<input type="text" class="form-control" id="up_eco" name="up_eco" required='required'> 
                    
					<button type="button" id="btn_Up_ecografia" class="btn_OP_sub btn-submit" data-dismiss="modal">Aceptar</button>
				</form>
			</div>
				
			<div class="modal-footer">
				<button type="button" class="btn_OP_close btn-close" data-dismiss="modal" onclick="btn_exit('#modal_ecografiaUP')">Cerrar</button>		    
			</div>
		</div>
	</div>
</div>