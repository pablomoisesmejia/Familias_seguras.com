<div class='container'>
<div class='row'>
    <div class='col s12 m6'><h5 style='font-size:1.36em;' class='left-align'>Propiedades en Venta</h5></div>
    <div class='col s12 m6'><a id='btn_anunciate' class='right-align'>Añade tu Anuncio</a></div>
    </div>
    <div class='row'>

<?php
    foreach($data as $row)
    {
        $propiedad->setIdPropiedad($row['PK_id_propiedad']);
        $imgPropiedad = $propiedad->getImgPropiedad();
        print("
        <div class='col s12 m12 l4'>
            <a href='pagina.php?id=$row[PK_id_propiedad]'>
                <div class='card hoverable'>
                    <div class='card-image waves-effect waves-block waves-light'>
                    <img class='activator' src='../web/img/propiedades/$imgPropiedad[0]'> 
                    </div>
                   
                    <div class='purple darken-3 lop'>
                        <a style='color:white; height:80px;' href='pagina.php?id=$row[PK_id_propiedad]'>
                            <div class='col s7' id='previnfo_vehi'>
                                <div class='row' style='padding:0; margin:0;  font-size:1em'>CV-201811_0002</div>
                                <div class='row' id='name_dir_style' style='padding:0; margin:0; font-size:0.8em'>Colonia $row[colonia]</div>
                            </div>
                            <div class=''>
                                <div class='row' style='text-align:center; font-size:1.2em; padding-top:12px;'>$$row[valor]</div>
                            </div>
                        </a>
                    </div>
                    <div class='block_proper'>
                        <div class=' icon_prop'><img class='proper_ico' src='../web/img/ico/garage.png'><span class='proper_ico_txt'>$row[cochera]</span></div>
                        <div class='icon_prop'><img class='proper_ico' src='../web/img/ico/banera.png'><span class='proper_ico_txt'>$row[baños]</span></div>
                        <div class='icon_prop'><img class='proper_ico' src='../web/img/ico/bed.png'><span class='proper_ico_txt'>$row[habitaciones]</span></div>
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
    include_once('complemento_random/propiedades_venta.php');
    ?>

         
</div>