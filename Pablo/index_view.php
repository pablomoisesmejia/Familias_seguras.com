<!--Tabs para separar cada categoria en la que se puede ingresar informacion-->
<div class="row">
	
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
                        <th>Estado</th>
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
                                <td>$row[estado_solicitud]</td>
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
    