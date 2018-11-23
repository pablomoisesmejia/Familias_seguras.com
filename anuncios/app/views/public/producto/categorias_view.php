<div class='container'>
    <h5 class='center'>Directorio</h5>
    <div class='row'>
    <?php
    foreach($categorias as $categoria){
        print("
            <div class='col s12 m12 l4'>
                <div class='card hoverable'>
                    <div class='card-image waves-effect waves-block waves-light'>
                    <img class='activator' src='../web/img/categorias/$categoria[imagen].jpg'>
                    </div>
                    <div class='card-content purple'>

                        <p class='center'><a href='productos.php?id=$categoria[id_categoria]' class='tooltipped' style='color:white;' data-tooltip='Ver más'>$categoria[nombre_categoria]</a></p>
                    </div>
                </div>
            </div>
        ");
    }
    ?>
    </div>
</div>