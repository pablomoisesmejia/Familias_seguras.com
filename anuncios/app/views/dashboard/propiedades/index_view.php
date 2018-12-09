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
        <a href='create_propiedad.php' class='btn waves-effect indigo tooltipped' data-tooltip='Crear producto'><i class='material-icons'>add_circle</i></a>
    </div>
</div>
<table class='highlight responsive-table'>
	<thead>
		<tr>
			<th>Transacción</th>
			<th>Direccion</th>
			<th>Niveles</th>
			<th>Habitaciones</th>
			<th>Baños</th>
			<th>Cochera</th>
			<th>Valor</th>
			<th>ACCIÓN</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach($data as $row){
		print("
		<tr>
			<td>$row[transaccion]</td>
			<td>$row[colonia], $row[municipio], $row[departamento]</td>
			<td>$row[niveles]</td>
			<td>$row[habitaciones]</td>
			<td>$row[baños]</td>
			<td>$row[cochera]</td>
			<td>$row[valor]</td>
			<td>
				<a href='update.php?id=$row[PK_id_propiedad]' class='blue-text'><i class='material-icons'>mode_edit</i></a>
				<a href='delete.php?id=$row[PK_id_propiedad]' class='red-text'><i class='material-icons'>delete</i></a>
			</td>
		</tr>
		");
	}
	?>
	</tbody>
</table>