<div class='container'>

<?php
$categoria = 'Categoria';
print(" <div style='margin-top:22px;' ><h5 class='titles'><a href='index.php' id='btn_lines'>Directorio ></a>$categoria</h5></div>");

print("<div class='row'>");
foreach($productos as $producto){
    print("
        <div class='col s12 m6 l4'>
        <a href='detalle_producto.php?id=$producto[id_anuncio]'>
            <div class='card hoverable'>
            <div class='card-image'>
                <img href='detalle_producto.php?id=$producto[id_anuncio]' src='../web/img/productos/$producto[imagen_producto].jpg' class='materialboxed'>
                <a href='detalle_producto.php?id=$producto[id_anuncio]' class='btn-floating halfway-fab waves-effect waves-light red tooltipped' data-tooltip='Ver detalle'><i class='material-icons'>add</i></a>
            </div>
            <div class='card-content' href='detalle_producto.php?id=$producto[id_anuncio]'>
                <span class='card-title'>$producto[nombre_anuncio]</span>
            
            </div>
            </div>
            </a>
        </div>
    ");
}
?>
    </div>
</div>