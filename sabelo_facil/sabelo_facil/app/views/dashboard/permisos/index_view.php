<div class="row">
    <div class='col s12 m12 l12 center white-text'>
            
                <h4>Permisos por tipo de usuario</h4>
    </div>
</div> 

<table class=' highlight responsive-table centered '>
    <thead>
        <tr>
            <th>Nombre</th>
            
            <th>Accion</th> 
        </tr>
    </thead>
    <tbody>
    <?php
	foreach($data as $row){
		print("
		<tr>
			<td>$row[nombre_tipo]</td>
			
            <td>
                <a href='update.php?id=$row[ID_tipo_usuario]' class='waves-effect waves-light'><i class='material-icons white-text'>create</i></a>
               
			</td>
		</tr>
		");
	}
	?>
    </tbody>
</table>