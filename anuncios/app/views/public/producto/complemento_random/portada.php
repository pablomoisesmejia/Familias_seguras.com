 <!-- Scripts solo para banner aleatorio -->

 <?php 
    $total_imagenes = count(glob('../web/img/banners/portada/{*.JPEG}',GLOB_BRACE));
    echo'<p style="display:none" id="number_mage">'.$total_imagenes.'</p>';
    
    ?>

   <script src='../web/js/jquery-3.2.1.min.js'></script>
   <script>
   var numero_de_imagen = 0;
   var numero_maximo = $("#number_mage").text();
   var ok = 0;
        numero_de_imagen = Math.floor((Math.random() * numero_maximo) + 1); 
        
        
        
        
        
            $.get("../web/img/banners/portada/banner_port_"+numero_de_imagen+".JPEG")
            .done(function() { 
                $('#banner_set').attr('src', '../web/img/banners/portada/banner_port_'+numero_de_imagen+'.JPEG');
                ok=10;
            }).fail(function() { 
                ok=10;
            })
        
        
   </script>
   <!-- Scripts END -->