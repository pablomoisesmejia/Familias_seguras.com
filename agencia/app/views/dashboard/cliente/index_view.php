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
    <div class='input-field center-align col s12 m4'>
        <a href='create.php' class='btn waves-effect indigo tooltipped' data-tooltip='Crear cliente'><i class='material-icons'>add_circle</i></a>
    </div>
</div>
<table class="responsive-table" >
	<thead>
		<tr>
			<th>Imagen</th>
			<th>Apellidos</th>
			<th>Nombres</th>
			<th>Correo</th>
			<th>Extras</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach($data as $row){
		print("
		<tr>
			<td><img src='../../web/img/usuarios/$row[imagen]' class='materialboxed' width='100' height='100'></td>
			<td>$row[apellidos_usuario]</td>
			<td>$row[nombres_usuario]</td>
			<td>$row[correo_usuario]</td>
		
			<td>
				<a href='update.php?id=$row[ID_usuario]' class='blue-text'><i class='material-icons'>mode_edit</i></a>
			</td>
		</tr>
		");
	}
	?>
	</tbody>
</table>