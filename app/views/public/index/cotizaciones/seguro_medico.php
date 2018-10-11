<h1 class="form_sub_title">Seguro Médico</h1>




<form id="form_coti_medico">
        <div class='row'>
            <div class='input-field col s12 '>
                <input  type="text" class="datepicker" required/>
                <label class="" for="fecha_nac_segm">Fecha de Nacimiento</label>
            </div>
        </div>
        
        <div class='row'>
		<div class='input-field col s12 '>
			<input id="nombre_conyugue_segm" type="text" class="validate" required/>
			<label class="" for="nombre_conyugue_segm">Nombre de conyugue</label>
		</div>
    </div>
    <div class='row'>
		<div class='input-field col s12 '>
			<input id="nombre_conyugue_segm" type="text" class="validate" required/>
			<label class="" for="nombre_asegurado_segm">Nombre de asegurado principal</label>
		</div>
    </div>
    <div class='row'>
            <div class='input-field col s12 '>
                <input  type="text" class="datepicker" required/>
                <label class="" for="fecha_nac_segm">Fecha de Nacimiento del conyugue</label>
            </div>
        </div>
        <div class='row'>
		<div class='input-field col s12 '>
			<input id="hijos_cantidad_segm" type="number" class="validate" min="0" max="15" step="1" value="0"required/>
			<label class="" for="hijos_cantidad_segm">Cantidad de hijos menores de 25 años </label>
		</div>


    
                
            </div>

              <div class='row'>
            <div class='input-field col s12 '>
                <select name="" id="">
                    <option value="1">Centroamericana</option>
                    <option value="1">Mundial</option>
                </select>
                <label class="" for="tel_segv">Cobertura deseada</label>
            </div>

            
        </div>

            <a onclick="new_frm=2; next_frm();" id="return_btn">Continuar</a> 
</form>