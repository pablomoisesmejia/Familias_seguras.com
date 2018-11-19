<div class="row">
    <div class='col s12 m12 l12 '>
            <div class="col s12 m4 l3">
                <h4>Cupones</h4>
            </div>
            <form method='post' autocomplete="off">
                <div class="col s10 m5 l5 ">
                        
                            <div class="input-field">
                                <i class="material-icons prefix">search</i>
                                <input id="icon_prefix" name='busqueda' type="text" class="validate">
                                <label for="icon_prefix">buscar</label>
                            </div>
                        
                </div>
                <div class="col s2 m1 l2 ">
                        <button type='submit' name='buscar' class='espaciado btn waves-effect #1de9b6 teal accent-3 tooltipped' data-tooltip='Buscar por nombre o descripción'><i class='material-icons'>check_circle</i></button>
                </div>
            </form>
            <div class='col s12 m2 l2   '>
                <!-- boton de agregar nuevos productos-->
                        <a class=" espaciado btn-floating btn-large  waves-effect waves-light light-blue lighten-1 right " href="create.php">
                        <i class="large material-icons">add</i>
                        </a>
            </div>
    </div>
</div> 

<table class=' highlight responsive-table centered ' id='mi_tabla' >
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Comercio</th>
            <th>Precio</th>
			<th>Existencia</th>
			<th>Fecha inicio</th>
            <th>Fecha fin</th>
            <th>Estado</th>
            <th>Accion</th>
            
        </tr>
    </thead>
    <tbody>
    <?php
	foreach($data as $row){
		print("
		<tr>
            <td>$row[nombre]</td>
            <td>$row[nombre_categoria]</td>
            <td>$row[nombre]</td>
            <td>$row[precio]</td>
            <td>$row[existencia]</td>
			<td>$row[fecha_inicio]</td>
			<td>$row[fecha_final]</td>
            <td><i class='material-icons'>".($row['estado']?"visibility":"visibility_off")."</i></td>
            <td>
                <a href='update.php?id=$row[ID_cupon]' class='waves-effect waves-light'><i class='material-icons white-text'>create</i></a>
                
                <a href='delete.php?id=$row[ID_cupon]' id='space' class='waves-effect waves-light'href='#'><i class='material-icons red-text'>delete</i></a>
            </td>
            
		</tr>
		");
	}
	?>
    </tbody>
</table>