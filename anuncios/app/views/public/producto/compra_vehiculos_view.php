<div class='container'>
    <div class='row'>
        <div class='col s12 m6'><h5 style='font-size:1.36em;' class='left-align'>Vehiculos en Venta</h5></div>
        <div class='col s12 m6'>
        
        </div>
        <div class='col s12 m6'><a id='btn_anunciate'  href="../dashboard/account/register.php"  class='right-align'>Añade tu Anuncio</a></div>
    </div>
    <div class='row'>

        <?php
        foreach($data as $row)
        {
            $vehiculo->setIdVehiculo($row['PK_id_vehiculo']);
            $imgVehiculo = $vehiculo->getImgVehiculos();
            print("
            <div class='col s12 m12 l4'>
                <a href='vehiculos_detalle_v.php?id=$row[PK_id_vehiculo]'>
                    <div class='card hoverable'>
                        <div class='card-image waves-effect waves-block waves-light'>
                        <img class='activator' src='../web/img/vehiculos/$imgVehiculo[0]'>
                    
                        </div>

                        <div class='purple darken-3'>
                            <a style='color:white; height:80px;' href='vehiculos_detalle_v.php?id=$row[PK_id_vehiculo]'>
                                <div class='col s7' id='previnfo_vehi'>
                                    <div class='row' style='padding:0; margin:0;  font-size:1em'>$row[modelos_vehiculo]</div>
                                    <div class='row' style='padding:0; margin:0; font-size:0.8em'>$row[marca_vehiculo]-$row[anio]</div>
                                </div>
                                <div class=''>
                                    <div class='row' style='text-align:center; font-size:1.2em; padding-top:12px;'>$$row[valor]</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            ");
        }
        ?>
    </div>

<!-- Aqui incluyo el codigo php de random -->
    <?php
    include_once('complemento_random/vehiculos.php');
    ?>

      
</div>