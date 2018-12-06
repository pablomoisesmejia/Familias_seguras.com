<div class='row'>   
    <form method='post'enctype='multipart/form-data' autocomplete='off'>


    </form>
    <div class='input-field center-align col s12 m4'>

    </div>
</div>
<table class='highlight'>
	<thead>
		<tr>
			<th>Placas</th>	
			<th>Modelo</th>
			<th>Dueño</th>
			<th>Estado</th>
			
			<th>Ediciones</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach($data as $row){
		print("
		<tr>
		
			<td class='balck-text'>$row[placa]</td>
			<td class='balck-text'>$row[modelos_vehiculo]</td>
			<td class='balck-text'>$row[nombres_usuario]</td>
			<td><i class='material-icons'>".($row['estado']?"visibility":"visibility_off")."</i></td>
		
			<td>
				<a href='update.php?id=$row[PK_id_vehiculo]' class='blue-text'><i class='material-icons'>mode_edit</i></a>
				
			</td>
		</tr>
		");
	}
	?>
	</tbody>
</table>