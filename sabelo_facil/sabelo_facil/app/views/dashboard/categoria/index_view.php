<div class="row">
    <div class='col s12 m12 l12 '>
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
    </div>
</div> 

<table class=' highlight responsive-table centered '>
    <thead>
        <tr>
			
		    <th>Imagen</th>
            <th>Nombre</th>
            <th>Accion</th> 
        </tr>
    </thead>
    <tbody>
    <?php
	foreach($data as $row){
		print("
		<tr>
			<td><img src='../../web/img/categoria/$row[imagen_url]' class='materialboxed' width='100' height='100'></td>
			<td>$row[nombre_categoria]</td>
			
            <td>
                <a href='update.php?id=$row[ID_categoria]' class='waves-effect waves-light'><i class='material-icons white-text'>create</i></a>
            </td>
		</tr>
		");
	}
	?>
    </tbody>
</table>