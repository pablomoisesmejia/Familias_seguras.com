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
                <select>
                    <optgroup label="Mañana">
                        <option value="1">7:00 - 9:00am</option>
                        <option value="2">10:00 - 12:00am</option>
                    </optgroup>
                    <optgroup label="Tarde">
                            <option value="1">1:00 - 3:00am</option>
                            <option value="2">4:00 - 7:00am</option>
                        </optgroup>
                        
                </select>
               
            </div>
        </div>
        

        <a  onclick="new_frm=3; enviar();" name="cotizar" id="return_btn">Solicitar Cotización</a>
       
</form>