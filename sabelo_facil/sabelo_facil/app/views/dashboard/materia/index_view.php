<div class='row'>   
    <form method='post' autocomplete="off">
        <div class='input-field col s10 m4'>
            <i class='material-icons prefix'>search</i>
            <input id='buscar' type='text' name='busqueda'/>
            <label for='buscar'>Buscador</label>
        </div>
        <div class='input-field col s2 '>
            <button type='submit' name='buscar' class='searchl  tooltipped' data-tooltip='Buscar por nombre'><i class='material-icons'>check_circle</i></button>
        </div>
    </form>
    <div class='input-field right-align col s12 m6 '>
        <a href='create.php' class='btn waves-effect  tooltipped' data-tooltip='Crear materia'>Añadir Nuevo</a>
    </div>
</div>
<table class='highlight'>
	<thead>
		<tr>
			<th>NOMBRE</th>
			<th>DESCRIPCION</th>
			<th>ESTADO</th>
			<th>ACCIÓN</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach($data as $row){
		print("
		<tr>
			<td>$row[nombre_materia]</td>
			<td>$row[descripcion]</td>
			<td><i class='material-icons'>".($row['estado']?"visibility":"visibility_off")."</i></td>
			<td>
				<a href='update.php?id=$row[ID_materia]' class='blue-text'><i class='material-icons'>mode_edit</i></a>
				<a href='delete.php?id=$row[ID_materia]' class='red-text'><i class='material-icons'>delete</i></a>
			</td>
		</tr>
		");
	}
	?>
	</tbody>
</table>