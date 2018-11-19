<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link type='text/css' rel='stylesheet' href='../web/css/materialize.min.css'  media='screen,projection'/>
        <link type="text/css" rel="stylesheet" href="../web/css/css_materias.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="../web/css/edicion_de_header_publico.css"  media="screen,projection"/>
        <link rel='stylesheet' href='../web/css/material_icons.css'>
        
        
        <title>Sabelofacil</title>
    </head>

<body>

<!-- SEGUNDO BLOQUE DE INFO | SE ACTIVA DESDE JS -->
    <div id="primer_bloque_index">
        <div class="row">
            <div class="col s12 center-align">
                <img src="../web/img/logos/sabelofacil.png" alt="Logo de la empresa" id="logo_enterpr">
            </div>
        </div>
        <div class="row">
            <a onclick=" T_or_A=2; ocultar_primer_bloque(); ver_sitio_academico();">
                <div class="col s12 m6 right-align">
                    <div class="cinta_1">
                        <h4 class="sec_title">Sitio Academico</h4>
                        <div class="col s10 offset-s2"><p class="sub_txt2">En este apartado del sitio podras tener acceso al contenido de materias academicas!</p></div>
                    </div>
                </div>
            </a>

            <a href="productos/index.php">
                <div class="col s12 m6 left-align">
                    <div class="cinta_2">
                    <h4 class="sec_title">Tienda en Línea</h4>

                    <div class="col s10"><p class="sub_txt2">En este apartado del sitio podras ver los productos disponibles para tu compra en línea</p></div>
                    
                    </div>
                </div>
            </a>

        </div>
    </div>
<!--FIN PRIMER BLOQUE DE INFO -->




    <script type='text/javascript' src='../web/js/jquery-3.2.1.min.js'></script>
    <script type='text/javascript' src='../web/js/materialize.min.js'></script>
    

    <script type='text/javascript' src='../web/js/public.js'> </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
</body>


</html>