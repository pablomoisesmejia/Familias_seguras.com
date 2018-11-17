<div class='white-text'>.</div>
<div class='white-text'>.</div>

<div class='center-align'><h4>Cuadro comparativo</h4></div>

<div class='container'>
    <div class='row'>
<?php

foreach($data as $row){
//for($i = 1;$i <= $cant;$i++){

    if($data[0]['FK_id_tipo_seguro'] == 2){
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

    }else if($data[0]['FK_id_tipo_seguro'] == 4){

    }else{
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






