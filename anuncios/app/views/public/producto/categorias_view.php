<div class='container'>
    <h4 class='center'>NUESTRAS CATEGORIAS</h4>
    <div class='row'>
    <?php
    foreach($categorias as $categoria){
        print("
            <div class='col s12 m6 l4'>
                <div class='card hoverable'>
                    <div class='card-image waves-effect waves-block waves-light'>
                        
                    </div>
                    <div class='card-content'>
                        <span class='card-title activator grey-text text-darken-4'>$categoria[nombre_categoria]<i class='material-icons right'></i></span>
                        <p class='center'><a href='productos.php?id=$categoria[id_categoria]' class='tooltipped' data-tooltip='Ver más'><i class='small material-icons'>add_circle_outline</i></a></p>
                    </div>
                </div>
            </div>
        ");
    }
    ?>
    </div>
</div>