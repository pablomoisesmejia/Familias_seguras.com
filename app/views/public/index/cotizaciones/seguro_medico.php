<h1 class="form_sub_title">Seguro Médico</h1>




<form id="form_coti_medico">
        <div class='row'>
            <div class='input-field col s12 '>
                <input  type="text" class="datepicker" id="fecha_naci" required/>
                <label class="" for="fecha_naci">Fecha de Nacimiento</label>
            </div>
        </div>
        
        <div class='row'>
		<div class='input-field col s12 '>
			<input id="nombre_conyugue_medico" type="text" class="validate" required/>
			<label class="" for="nombre_conyugue_medico">Nombre de conyugue</label>
		</div>
    </div>
    <div class='row'>
		<div class='input-field col s12 '>
			<input id="nombre_asegurado_medico" type="text" class="validate" required/>
			<label class="" for="nombre_asegurado_medico">Nombre de asegurado principal</label>
		</div>
    </div>
    <div class='row'>
            <div class='input-field col s12 '>
                <input  type="text" class="datepicker" id="fecha_naci_conyugue" required/>
                <label class="" for="fecha_naci_conyugue">Fecha de Nacimiento del conyugue</label>
            </div>
        </div>
        <div class='row'>
		<div class='input-field col s12 '>
			<input id="hijos_cantidad_medico" type="number" class="validate" min="0" max="15" step="1" value="0"required/>
			<label class="" for="hijos_cantidad_medico">Cantidad de hijos menores de 25 años </label>
		</div>


    
                
            </div>

              <div class='row'>
            <div class='input-field col s12 '>
                <select name="" id="cobertura">
                    <option value="" selected disabled>Seleccione una opción</option>
                    <option value="Centroamericana">Centroamericana</option>
                    <option value="Mundial">Mundial</option>
                </select>
                <label class="" for="tel_segv">Cobertura deseada</label>
            </div>

            
        </div>

            <a id="return_btn" class="continuar">Continuar</a> 
</form>