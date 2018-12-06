<div class='row'>   
    <form method='post'enctype='multipart/form-data' autocomplete='off'>
        <div class='input-field col s6 m4'>
            <i class='material-icons prefix'>search</i>
            <input id='buscar' type='text' name='busqueda'/>
            <label for='buscar'>Escribe para buscar</label>
        </div>
        <div class='input-field col s6 m4'>
            <button type='submit' name='buscar' class='btn waves-effect green tooltipped' data-tooltip='Buscar por nombre o apellido'><i class='material-icons'>check_circle</i></button>
        </div>
    </form>

</div>
<table class='highlight'>
	<thead>
		<tr>
			
			<th>Encargado</th>
			<th>Departamento</th>
			<th>Valor</th>
			<th>Estado</th>
			<th>Ediciones</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach($data as $row){
		print("
		<tr>
			
			<td class='balck-text'>$row[nombres_usuario]</td>
			<td>$row[departamento]</td>
			<td>$$row[valor]</td>
			<td><i class='material-icons'>".($row['estado']?"visibility":"visibility_off")."</i></td>
			
			<td>
				<a href='update.php?id=$row[PK_id_propiedad]' class='blue-text'><i class='material-icons'>mode_edit</i></a>
			</td>
		</tr>
		");
	}
	?>
	</tbody>
</table>