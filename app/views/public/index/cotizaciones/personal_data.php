<form id="form_coti_personal" >
	<div class='row'>
		<div class='input-field col s12 '>
			<input id="nombre_segv" type="text" class="validate" required/>
			<label class="" for="nombre_segv">Tu Nombre</label>
		</div>
    </div>
    
    <div class='row'>
		<div class='input-field col s12 '>
			<input id="tel_segv" type="number" class="validate" required/>
			<label class="" for="tel_segv">Telefono</label>
		</div>
    </div>
    <div class='row'>
		<div class='input-field col s12 '>
			<input id="email_segv" name="correo" type="email" class="validate" required/>
			<label class="" for="email_segv">Correo | Email</label>
		</div>
    </div>
     
    <div class='row'>
            <div class='input-field col s12 '>
                <select id="hora"> 
                    <optgroup label="Mañana">
                        <option value="manana_1">7:00 - 9:00am</option>
                        <option value="manana_2">10:00 - 12:00am</option>
                    </optgroup>
                    <optgroup label="Tarde">
                            <option value="tarde_1">1:00 - 3:00pm</option>
                            <option value="tarde_2">4:00 - 7:00pm</option>
                        </optgroup>
                        
                </select>
               
            </div>
        </div>
        

        <a name="cotizar" id="return_btn" class="solicitar">Solicitar Cotización</a>
       
</form>