<div class='white-text'>.</div>
<div class='white-text'>.</div>

<div class='center-align'><h4>Cuadro comparativo</h4></div>

<div class='container'>
    <div class='row z-depth-2'>
<?php

//foreach($data as $row){

if($data[0]['FK_id_tipo_seguro'] == 2){
    foreach($data as $row){
        print("
            <div class='col s12 m$long'>
                <div class='card'>
                    <div class='card-image'>
                        <div class='center-align titulo_aseguradora'>$row[nombre_aseguradora]</div>
                    </div>
                    <div class='card-content '>
                        <table class='highlight centered'>
                            <thead>
                                <tr>
                                    <!--<th>Name</th>-->
                                </tr>
                            </thead>
                    
                            <tbody>
                                <tr>
                                    <td><strong>Plan: </strong>$row[plan]</td>
                                </tr>
                                <tr>
                                    <td><strong>Oferta: </strong><a href='../../web/dashboard/ofertas/$row[oferta]'  target='_blank'>Descargue el pdf haciendo click</a></td>
                                </tr>
                                <tr>
                                    <td><strong>Prima: </strong>$row[prima]</td>
                                </tr>
                                <tr>
                                    <td><strong>Recuperaci&oacute;n a 50 a&ntilde;os: </strong>$$row[valor_recuperacion_50]</td>
                                </tr>
                                <tr>
                                    <td><strong>Recuperaci&oacute;n a 60 a&ntilde;os: </strong>$$row[valor_recuperacion_60]</td>
                                </tr>
                                <tr>
                                    <td><strong>Recuperaci&oacute;n a 70 a&ntilde;os: </strong>$$row[valor_recuperacion_70]</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class='card-action center-align'>
                        <a href='contratacion.php' class='btn waves-effect morado'>Contratar</a>
                    </div>
                </div>
            </div>
            
        ");
    }

}else if($data[0]['FK_id_tipo_seguro'] == 4){
    foreach($data3 as $row2){
        $primas = $cuadro->getPrimasVehiculos($row2['PK_id_cuadro_comparativo']);
        print("
            <div class='col s12 m$long2'>
                <div class='card'>
                    <div class='card-image'>
                        <div class='center-align titulo_aseguradora'>$row2[nombre_aseguradora]</div>
                    </div>
                    <div class='card-content '>
                        <table class='highlight centered'>
                            <thead>
                                <tr>
                                    <!--<th>Name</th>-->
                                </tr>
                            </thead>
                    
                            <tbody>
                                <tr>
                                    <td><strong>Plan: </strong>$row2[plan]</td>
                                </tr>
                                <tr>
                                    <td><strong>Oferta: </strong><a href='../../web/dashboard/ofertas/$row2[oferta]'  target='_blank'>Descargue el pdf haciendo click</a></td>
                                </tr>");
                                
                                $cont = 1;
                                foreach($primas as $indiv){
                                    print("
                                        <tr>
                                            <td><strong>Prima del vehiculo $cont: </strong>$indiv[prima]</td>
                                        </tr>
                                    ");
                                    $cont ++;
                                }
            print("                    
                            </tbody>
                        </table>
                    </div>
                    <div class='card-action center-align'>
                        <a href='contratacion.php' class='btn waves-effect morado'>Contratar</a>
                    </div>
                </div>
            </div>
            
        ");
    }
}else{

    foreach($data as $row){
        print("
            <div class='col s12 m$long'>
                <div class='card'>
                    <div class='card-image'>
                        <div class='center-align titulo_aseguradora'>$row[nombre_aseguradora]</div>
                    </div>
                    <div class='card-content '>
                        <table class='highlight centered'>
                            <thead>
                                <tr>
                                    <!--<th>Name</th>-->
                                </tr>
                            </thead>
                    
                            <tbody>
                                <tr>
                                    <td><strong>Plan: </strong>$row[plan]</td>
                                </tr>
                                <tr>
                                    <td><strong>Oferta: </strong><a href='../../web/dashboard/ofertas/$row[oferta]'  target='_blank'>Descargue el pdf haciendo click</a></td>
                                </tr>
                                <tr>
                                    <td><strong>Prima: </strong>$row[prima]</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class='card-action center-align'>
                        <a href='contratacion.php' class='btn waves-effect morado'>Contratar</a>
                    </div>
                </div>
            </div>
            
        ");
    }
}

?>

    </div>
</div>






