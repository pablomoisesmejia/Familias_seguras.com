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

    </div>
</div>
<table class='highlight'>
	<thead>
		<tr>
			<th>Imagen</th>	
			<th>Directorio</th>
			<th>Estado</th>
			<th>Correo</th>
			<th>Ediciones</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach($data as $row){
		print("
		<tr>
			<td><img src='../../../anuncios/web/img/anuncios/$row[imagen_producto]' class='materialboxed' width='100' height='100'></td>
			<td class='balck-text'>$row[nombre_anuncio]</td>
			<td><i class='material-icons'>".($row['estado_anuncio']?"visibility":"visibility_off")."</i></td>
			<td>$row[email_anuncio]</td>
			<td>
				<a href='update.php?id=$row[id_anuncio]' class='blue-text'><i class='material-icons'>mode_edit</i></a>
				<a href='delete.php?id=$row[id_anuncio]' class='red-text'><i class='material-icons'>delete</i></a>
			</td>
		</tr>
		");
	}
	?>
	</tbody>
</table>