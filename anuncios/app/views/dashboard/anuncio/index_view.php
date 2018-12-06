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
        <a href='create.php' class='btn waves-effect indigo tooltipped' data-tooltip='Crear categoría'><i class='material-icons'>add_circle</i></a>
    </div>
</div>
<table class='highlight'>
	<thead>
		<tr>
			<th>Imagen</th>
			<th>Dias disponibles</th>
			<th>Fecha de Inicio</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach($data as $row){
		print("
		<tr>
			<td><img src='../../web/img/banners/$row[imagen]' class='materialboxed' width='100' height='100'></td>
			<td>$row[cant_intervalo_fecha] $row[intervalos_fecha]</td>
			<td>$row[fecha_inicio] $row[hora_inicio]</td>
			<td>
				<a href='update.php?id=$row[PK_id_banner]' class='blue-text'><i class='material-icons'>mode_edit</i></a>
				<a href='delete.php?id=$row[PK_id_banner]' class='red-text'><i class='material-icons'>delete</i></a>
			</td>
		</tr>
		");
	}
	?>
	</tbody>
</table>