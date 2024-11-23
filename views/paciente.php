<?php 
    include ('../setting/database.php');
    require_once "../admin/models/admin_model.php";
    
    // Datos del Paciente
    $Run_Model = new Run_Model();
	$run_paciente = $Run_Model->Run_patient();
?>

<table id="Tb_Paciente" class="datatable"> 
	<thead>
	    <tr> 
			<th>Check</th>
			<th>N° Cliente</th>
			<th>Apellido</th>
			<th>Nombre</th>			
            <th>DNI</th>
		</tr>
	</thead>
			
	<tbody>
		<?php 
			while ($get_paciente = mysqli_fetch_assoc($run_paciente)) { ?>
				<tr>
					<td class="table-checkbox"><input type="checkbox" name="" id=""></td>
					<td><?php echo $get_paciente['id']; ?></td>
					<td><?php echo $get_paciente['surname']; ?></td>
					<td><?php echo $get_paciente['name']; ?></td>				
                    <td><?php echo $get_paciente['dni']; ?></td>              
				</tr>
			<?php } 
        ?>			
	</tbody> 
</table>

<!--/ Js /-->
<script type="text/javascript" src="../js/tb/btn_paciente.js"></script>

<script>
	const TB_paciente = new TbBtn_paciente('#Tb_Paciente', [
		{
			id: 'bAdd',
			text: 'Add',
			icon: 'fa-solid fa-user-plus',
			toggle: 'modal',
			target: '#add_paciente',
			action: function(){
				mostrar('#modal_paciente');		
			}
		},
        {
			id: 'bEdit',
			text: 'Edit',
			icon: 'fa-solid fa-user-pen',
			toggle: 'modal',
			target: '#edit_paciente',
			action: function(){
				const row_paciente = TB_paciente.getDatos();	
				get_paciente(row_paciente);
			}													
		},
		{
			id: 'bDelete',
			text: 'Delete',
			icon: 'fa-solid fa-user-xmark',
			action: function(){
				const id_paciente = TB_paciente.getSelected();
				delete_paciente(id_paciente);
			}		
		},
	]);
	TB_paciente.parse();
</script>