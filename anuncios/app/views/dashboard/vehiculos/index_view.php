<div class='row'>   
    <form method='post'>
        <div class='input-field col s6 m4'>
            <i class='material-icons prefix'>search</i>
            <input id='buscar' type='text' name='busqueda'/>
            <label for='buscar'>Buscador</label>
        </div>
        <div class='input-field col s6 m4'>
            <button type='submit' name='buscar' class='btn waves-effect green tooltipped' data-tooltip='Buscar por nombre o descripción'><i class='material-icons'>check_circle</i></button>
        </div>
    </form>
    <div class='input-field center-align col s12 m4'>
        <a href='create_vehiculo.php' class='btn waves-effect indigo tooltipped' data-tooltip='Crear producto'><i class='material-icons'>add_circle</i></a>
    </div>
</div>
<table class='highlight'>
	<thead>
		<tr>
			<th>Marca</th>
			<th>Modelo</th>
			<th>Año</th>
			<th>Color</th>
			<th>Valor</th>
			<th>ACCIÓN</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach($data as $row){
		print("
		<tr>
			<td>$row[marca_vehiculo]</td>
			<td>$row[modelos_vehiculo]</td>
			<td>$row[anio]</td>
			<td>$row[color]</td>
			<td>$row[valor]</td>
			<td>
				<a href='update.php?id=$row[PK_id_vehiculo]' class='blue-text'><i class='material-icons'>mode_edit</i></a>
				<a href='delete.php?id=$row[PK_id_vehiculo]' class='red-text'><i class='material-icons'>delete</i></a>
			</td>
		</tr>
		");
	}
	?>
	</tbody>
</table>