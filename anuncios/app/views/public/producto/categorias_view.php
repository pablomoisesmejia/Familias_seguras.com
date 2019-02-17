<div class='container'>
    <div class='row'>
    <div class='col s12 m6'><h5 style='font-size:1.36em;' class='left-align'>Directorio</h5></div>
    <div class='col s12 m6'><a id='btn_anunciate' href="../dashboard/account/register.php" class='right-align'>Añade tu Anuncio</a></div>
    </div>
    <div class='row'>

    <?php
    foreach($categorias as $categoria){

        print("
            <div class='col s12 m12 l4'>
            <a href='productos.php?id=$categoria[id_categoria]'>
                <div class='card hoverable'>
                    <div id='grays' class='card-image waves-effect waves-block waves-light'>
                    <img class='activator' src='../web/img/categorias/$categoria[imagen].jpg'>
                    </div>
                    <div class='card-content purple darken-3'>

                        <p style='padding-left:8%;'><a href='productos.php?id=$categoria[id_categoria]' class='tooltipped' style='color:white;'>$categoria[nombre_categoria]</a></p>
                    </div>
                </div>
                </a>
            </div>
        ");
    }
    ?>
    </div>
     
</div>