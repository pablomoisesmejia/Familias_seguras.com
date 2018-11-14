<!--Tabs para separar cada categoria en la que se puede ingresar informacion-->
<div class="row">
    <div class="col s12">
        <ul class="tabs blue-grey-text text-darken-4">
            <li class="tab col s4"><a class="black-text" href="#test1">Solicitudes nuevas</a></li>
            <li class="tab col s4"><a class="black-text" href="#test2">Solicitudes procesadas</a></li>
            <li class="tab col s4"><a class="black-text" href="#test3">Primas</a></li>
        </ul>
    </div>

    <!--Contenido del tab de productos-->
    <div id="test1" class="col s12">
	
		<div class="white-text">.</div>
		<div class="white-text">.</div>
		<div class="white-text">.</div>

        <div class="container">
            <div class="row">
                <!--Parte de clasificacion de la tabla-->
                <table class="bordered highlight responsive-table z-depth-2">
                    <thead class="morado white-text">
                        <tr>
                            <th>Solicitud No.</th>
                            <th>Fecha</th>
                            <th>Ramo</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                    <!--Producto de ejemplo 1-->
                        <?php
                        if($data){
                            foreach($data as $row){
                                print("
                                <tr>
                                    <td>$row[PK_id_solicitud]</td>
                                    <td>$row[fecha_reparticion]</td>
                                    <td>$row[tipo_seguro]</td>
                                    <td>
                                        <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='right' data-delay='50' data-tooltip='Elaborar cuadro' href='create_cuadro.php?id=$row[PK_id_solicitud]&id2=$row[FK_id_tipo_seguro]&id3=$row[FK_id_cliente_prospecto] '><i class='material-icons blue-text text-darken-3 prefix'>assignment</i></a>
                                    </td>
                                </tr>
                                ");
                            }
                        }
                        ?>

                    </tbody>
				</table>
            </div>
			<div class="white-text">.</div>
			<div class="white-text">.</div>
        </div>

    </div>
    
    
    <!--Contenido del tab de marcas-->
    <div id="test2" class="col s12">

		<div class="white-text">.</div>
		<div class="white-text">.</div>
		<div class="white-text">.</div>
    
        <div class="container">
			<div class="row">
				<!--Parte de clasificacion de la tabla-->
				<table class="bordered highlight responsive-table z-depth-2">
					<thead class="morado white-text">
						<tr>
							<th>Solicitud No.</th>
							<th>Fecha</th>
							<th>Ramo</th>
							<th></th>
							<th></th>
						</tr>
					</thead>

					<tbody>
					<!--Producto de ejemplo 1-->
						<?php
						if($data2){
							foreach($data2 as $row2){
								print("
								<tr>
									<td>$row2[PK_id_solicitud]</td>
									<td>$row2[fecha_reparticion]</td>
									<td>$row2[tipo_seguro]</td>
									<td>
										<a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='right' data-delay='50' data-tooltip='Elaborar cuadro' href='create_cuadro.php?id=$row2[PK_id_solicitud]'><i class='material-icons blue-text text-darken-3 prefix'>assignment</i></a>
									</td>
								</tr>
								");
							}
						}
						?>

					</tbody>
				</table>
			</div>
			<div class="white-text">.</div>
			<div class="white-text">.</div>
        </div>

    </div>


    <!--Contenido del tab de categorias-->
    <div id="test3" class="col s12">
    
        <!-- Barra de busqueda -->
        <div class="container">
            <div class="row">
                <form method="post">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s10">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="categoria" name="busqueda_categoria">
                                <label for="categoria" class="black-text">Buscar categor&iacute;a</label>
                            </div>
                            <div class="input-field col s2">
                                <button type='submit' name='buscar_categoria' class='btn waves-effect blue-grey darken-4 tooltipped' data-tooltip='Buscar por nombre'><i class='material-icons'>search</i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    
        <!--Boton fijo en la pantalla para agregar nuevas categorias-->
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large modal-trigger blue-grey darken-3 tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nueva categoria" href="create_categoria.php">
                <i class="large material-icons">add</i>
            </a>
        </div>

        <div class="container">
            <!--Parte de clasificacion de la tabla-->
            <table class="bordered highlight responsive-table espacio_inf">
                <thead class="blue-grey darken-4 white-text">
                    <tr>
                        <th>Categor&iacute;a</th>
                        <th>Marca</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                    if($data_categorias){
                        foreach($data_categorias as $categoria){
                            print("
                            <tr>
                                <td>$categoria[categoria]</td>
                                <td>$categoria[marca]</td>
                                <td>
                                    <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='right' data-delay='50' data-tooltip='Editar categoria' href='update_categoria.php?id=$categoria[id_categoria]'><i class='material-icons blue-text text-darken-3 prefix'>edit</i></a>
                                    <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='right' data-delay='50' data-tooltip='Eliminar categoria' href='delete_categoria.php?id=$categoria[id_categoria]'><i class='material-icons red-text text-darken-3 prefix'>delete</i></a>
                                </td>
                            </tr>
                            ");
                        }
                    }
                    ?>

                </tbody>
            </table>
        </div>
    
    </div>

</div>