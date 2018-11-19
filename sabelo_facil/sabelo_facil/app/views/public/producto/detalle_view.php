
<div class='container'>
    
    <div class='row'>
        <div class="col s12 m12 l12 ">
            <?php
            echo($valoracion->getValoracion());
            print("
                    <div class='card '>
                        <div class='card-stacked'>
                        <form method='post'>
                                <div class='card-content col s12 m12 l12'>
                                    <div class='col s12 m7  l3 offset-l3'><img src='../../web/img/productos/".$producto->getImagen()."' height='200px'>
                                    </div>
                                    <div class='col s12 m5 l5'>
                                        <h5 class=''>".$producto->getNombre()."</h5>
                                        <p>".$producto->getDescripcion()."</p>
                                        <p><b>Precio (US$) ".$producto->getPrecio()."</b></p>
                                        <br>
                                        <h6><b>Valoracion actual:  ".$valoracion->getValoracion()." Estrellas</b></h6>
                                        
                                    </div>
                                </div>
                            <div class='card-action'>
                                
                                    <div class='row '>
                                    
                                        <div class='input-field col s5 m5 l2 offset-l4'>
                                            <i class='material-icons prefix'>list</i>
                                            <input id='cantidad' type='number' name='cantidad' min='1'  value='<?php print(".$carrito->getCantidad().") ?>' class='validate' required>
                                            <label for='cantidad'>Cantidad</label>
                                        </div>
                                        <div class='input-field col s12 m7 l6'>
                                        <input type='submit' class='btn' name='anadircarrito' value='Añadir al carrito'>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                ");
            ?>

                <div class='col s12 m12 l12 '>
                    <div class='card '>
                        <div class='card-stacked'>
                            
                            <div class='card-content'>
                                <form method='post'>
                                <div class="row">
                                    <div class="col s12 m6 l6 offset-l4">
                                        <h5 class=''>Valoracion </h5>
                                
                                    <p class='clasificacion'>
                                        <input id='radio1' type='radio' name='estrellas' value='5'><!--
                                        --><label for='radio1'>★</label><!--
                                            
                                        --><input id='radio2' type='radio' name='estrellas' value='4'><!--
                                        --><label for='radio2'>★</label><!--
                                        --><input id='radio3' type='radio' name='estrellas' value='3'><!--
                                        --><label for='radio3'>★</label><!--
                                        --><input id='radio4' type='radio' name='estrellas' value='2'><!--
                                        --><label for='radio4'>★</label><!--
                                        --><input id='radio5' type='radio' name='estrellas' value='1'><!--
                                        --><label for='radio5'>★</label>
                                    </p>
                                    </div>
                                
                                </div>
                                    <div class='row '>
                                        <div class='input-field col s12 m12 l6 offset-l4'>
                                            <h5 class=''>Comentar</h5>
                                            <i class='material-icons prefix'>speaker_notes</i>
                                            <input id='cantidad' type='text' name='comentario'  placeholder="Comentario"class='validate' value='<?php print($valoracion->getComentario()) ?>' required>
                                            
                                        </div>
                                        <div class='input-field col s12 m12 l6 offset-l4 '>
                                            <button type='submit' name='crearvaloracion' class='btn_menu_action  tooltipped' data-tooltip='Agregar Comentario'>Comentar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            
                            <div class='card-action'>
                                
                            </div>
                        </div>
                    </div>
                </div>
            
       

        <div class=" col s12 m12 l12">
            <?php
            print("
            <div class='row'>
                <div class='col s12 m12 l12'>
                    <div class='card ' >
                        <div class='card-content black-text'>
                        <h4 class=''>Comentarios</h4>
                            <ul class='collapsible ' data-collapsible='accordion'>");
                        foreach($comentarios as $comentarios2){
                            print("
                            <!--Bloque de codigo para la forma en que se mostraran los productos-->
                            <li>
                                <div class='collapsible-header'><i class='material-icons'>people</i>$comentarios2[nombre] $comentarios2[apellido]  $comentarios2[fecha]
                                </div>
                                <div class='collapsible-body'><span> $comentarios2[comentario]</span></div>
                            </li>
                            ");}
                            
                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            
        </div>

  </div>       