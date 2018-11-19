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
			<th>Imagen</th>
			<th>Apellidos</th>
			<th>Nombres</th>
			<th>Correo</th>
			<th>Estado</th>
			<th>Modificar</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach($data as $row){
		print("
		<tr>
			<td><img src='../../web/img/clientes/$row[imagen_url]' class='materialboxed' width='100' height='100'></td>
			<td>$row[apellido]</td>
			<td>$row[nombre]</td>
			<td>$row[correo]</td>
			<td><i class='material-icons'>".($row['estado']?"visibility":"visibility_off")."</i></td>
			<td>
				<a href='update.php?id=$row[ID_cliente]' class='blue-text'><i class='material-icons'>mode_edit</i></a>
			</td>
		</tr>
		");
	}
	?>
	</tbody>
</table>