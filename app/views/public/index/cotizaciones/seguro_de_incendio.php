<h1 class="form_sub_title">Seguro De Incendio</h1>




<form id="form_coti_incendio">



        <div class='row'>
            <div class='input-field col s12 '>
                <select name="" id="">
                    <option value="" selected disabled>Seleccione una opción</option>
                    <option value="Casa de Habitación">Casa de Habitación</option>
                    <option value="Oficina">Oficina</option>
                    <option value="Local Comercial">Local Comercial</option>
                    <option value="Apartamento">Apartamento</option>
                    <option value="Casa de playa">Casa de playa</option>
                    <option value="Casa de campo">Casa de campo</option>
                    <option value="Casa de de lago">Casa de de lago</option>
                </select>
                <label class="" for="tipo_inmueble_segv">Tipo de Inmueble</label>
            </div>           
        </div>


        <div class='row' style="margin-bottom:15px;">
            <div class='input-field col s12 '>
            <input id="address" type="text" class="validate" required/>
                <label class="active" for="address">Dirección de Inmueble</label>
            
            <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
            <?php
                require_once("mapa.php");
    
            ?>
            </head>
           <div class="row">
            <div id="myMap" class='input-field col s12 '></div>
            </div>

              
            </div>
        </div>


        <div class='row'>
            <div class='input-field col s12 '>
                <select name="" id="">
                    <option value="" selected disabled>Seleccione una opción</option>
                    <option value="Propietario">Propietario</option>
                    <option value="Inquilino">Inquilino</option>
                    <option value="Arrendante">Arrendante</option>
                </select>
                <label class="" for="tipo_inmueble_segv">Asegurar Inmueble en calidad de:</label>
            </div>           
        </div>
        
        
  
         <div class='row'>
            <div class='input-field col s1 '>
               
               <p class="signo_de_campo">$</p>
           </div>  
            <div class='input-field col s6 '>
                <input id="valor_de_constr_segm" type="number" class="validate" min="1000" step="500" value="1000" required/>
                <label class="" for="valor_de_constr_segm">Valor de Construcciones</label>
                
            </div>  
            <div class='input-field col s5 '>
               
                <p class="frm_p_text_alert">No incluir terreno.</p>
            </div>   
            
        </div>

        

            <a onclick="new_frm=2; next_frm();" id="return_btn">Continuar</a> 
</form>