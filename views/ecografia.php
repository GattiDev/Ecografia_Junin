<?php 
    include ('../setting/database.php');
    require_once "../admin/models/admin_model.php";
    
    // Datos del Ecografías
    $Run_Model = new Run_Model();
	$run_ecografia = $Run_Model->Run_destiny();
?>

<table id="Tb_ecografia" class="datatable"> 
	<thead>
	    <tr> 
			<th>Check</th>
			<th>N°</th>
			<th>Ecografías</th>
		</tr>
	</thead>
			
	<tbody>
		<?php 
			while ($get_ecografia = mysqli_fetch_assoc($run_ecografia)) { ?>
				<tr>
					<td class="table-checkbox"><input type="checkbox" name="" id=""></td>
					<td><?php echo $get_ecografia['id']; ?></td>
					<td><?php echo $get_ecografia['destiny']; ?></td>                  
				</tr>
			<?php } 
        ?>			
	</tbody>
</table>

<!--/ Js /-->
<script type="text/javascript" src="../js/tb/btn_ecografia.js"></script>

<script>
	const TB_ecografia = new TbBtn_ecografia('#Tb_ecografia', [
		{
			id: 'bAdd',
			text: 'Add',
			icon: 'fa-solid fa-pen',
			toggle: 'modal',
			target: '#add_ecografia',
			action: function(){
				mostrar('#modal_ecografia');		
			}
		},
        {
			id: 'bEdit',
			text: 'Edit',
			icon: 'fa-solid fa-pen-to-square',
			toggle: 'modal',
			target: '#edit_ecografia',
			action: function(){
				const row_ecografia = TB_ecografia.getDatos();	
				get_ecografia(row_ecografia);
			}													
		},
		{
			id: 'bDelete',
			text: 'Delete',
			icon: 'fa-solid fa-trash-can-arrow-up',
			action: function(){
				const id_ecografia = TB_ecografia.getSelected();
				delete_ecografia(id_ecografia);
			}		
		},
	]);
	TB_ecografia.parse();
</script>