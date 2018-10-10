<h1 class="form_sub_title">Seguro de Vida</h1>




<form id="form_coti_vida">
        <div class='row'>
            <div class='input-field col s12 '>
                <input  type="text" class="datepicker" required/>
                <label class="" for="nombre_segv">Fecha de Nacimiento</label>
            </div>
        </div>
        
        <div class='row'>
            <div class='input-field col s12 '>
                <select name="" id="">
                    <option value="" disabled selected>Selecciona una opción</option>
                    <option value="1" disabled>se considera fumador cualquier persona que en los últimos 12 meses haya consumido 1 cigarro o más, o que tiempo atrás haya tenido un consumo superior a un cigarrillo diario.</option>
                    <option value="2">SI</option>
                    <option value="3">NO</option>
                </select>
                <label class="" for="tel_segv">¿Eres Fumador?</label>
            </div>

            <p class="frm_p_text"></p>
        </div>
        <div class='row'>
            <div class='input-field col s12 '>
                <input id="suma_segv" type="number" class="validate" required/>
                <label class="" for="email_segv">Suma Asegurada</label>
            </div>
        </div>
         
        <div class='row'>
                <div class='input-field col s12 '>
                    <select name="" id="">
                        <option value="1">SI</option>
                        <option value="1">NO</option>
                    </select>
                    <label class="" for="tel_segv">¿La necesita para un banco?</label>
                </div>
    
                
            </div>

            <a onclick="new_frm=2; next_frm();" id="return_btn">Continuar</a> 
</form>


