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
        <a href='create.php' class='btn waves-effect indigo tooltipped' data-tooltip='Crear producto'><i class='material-icons'>add_circle</i></a>
    </div>
</div>
<table class='highlight'>
	<thead>
		<tr>
			<th>IMAGEN</th>
			<th>NOMBRE</th>
			<th>CATEGORÍA</th>
			<th>ACCIÓN</th>
		</tr>
	</thead>
	<tbody>
	<?php
	$renovar = array();
	foreach($data as $row){
		$fecha = new DateTime($row['fecha_creacion']);
		$hoy = new DateTime(date("Y-m-d"));
		$intervalo = date_diff($fecha, $hoy);

		if($intervalo->format('%R%a dias') < 15)
		{
			print("
			<tr>
			<td><img src='../../web/img/productos/$row[imagen_producto]' alt='No se encontro la imagen' width='100' height='100'></td>
				<td>$row[nombre_anuncio]</td>
				<td>$row[nombre_categoria]</td>
				<td>
					<a href='update.php?id=$row[id_anuncio]' class='blue-text'><i class='material-icons'>mode_edit</i></a>
					<a href='delete.php?id=$row[id_anuncio]' class='red-text'><i class='material-icons'>delete</i></a>
				</td>
			</tr>
			");
		}
		else
		{
			array_push($renovar, $row);			
		}
	}
	?>
	</tbody>
</table>
<h5 class='center'>Anuncios que necesitan renovación</h5>
<table class='highlight'>
	<thead>
		<tr>
			<th>IMAGEN</th>
			<th>NOMBRE</th>
			<th>CATEGORÍA</th>
			<th>ACCIÓN</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach($renovar as $row){
		print("
		<tr>
		<td><img src='../../web/img/productos/$row[imagen_producto]' alt='No se encontro la imagen' width='100' height='100'></td>
			<td>$row[nombre_anuncio]</td>
			<td>$row[nombre_categoria]</td>
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