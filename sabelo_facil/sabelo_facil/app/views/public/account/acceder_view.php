<!-- Formularios para acceder -->
<div class='container' id='acceder'>
	<h4 class='center-align'>ACCEDER</h4>
	<ul class='tabs center-align'>
	<li class='tab'><a href='#sesion'>INICIAR SESIÓN</a></li>
		<li class='tab'><a href='#cuenta'>CREAR CUENTA</a></li>
	
	</ul>

	<!-- Formulario para iniciar sesión -->
	<div id='sesion'>
		<form method='post' autocomplete='off'>
			<div class='row'>
				<div class='input-field col s12 m6 offset-m3'>
					<i class='material-icons prefix'>email</i>
					<input id='usuario' type='text' name='alias_usuario' class='validate'>
					<label for='usuario' data-error='Error' data-success='Bien'>Alias</label>
				</div>
				<div class='input-field col s12 m6 offset-m3'>
					<i class='material-icons prefix'>security</i>
					<input id='clave' type='password' name='clave_usuario' class='validate'>
					<label for='clave' data-error='Error' data-success='Bien'>Contraseña</label>
				</div>

			</div>
			<div >
					<p style='padding-left:5%;
							  text-align:center;
							  '>Para iniciar sesion, ingresa el alias y la contraseña <br>registradas anteriormente</p>
				</div>
			<div class='row center-align' style='margin-top:30px;'>
				<a  class=' btn waves-effect green' href="recovery.php">Recuperar contraseña</a>
				<button type='submit' name='iniciar' class='btn waves-effect green'><i class='material-icons'>send</i></button>
			</div>
		</form>
	</div>
		<!-- Formulario para nueva cuenta -->
		<div id='cuenta' style='display:none;'>
		<form method='post' autocomplete='off'>
			<div class='row'>
				<div class='input-field col s12 m6'>
					<i class='material-icons prefix'>account_box</i>
					<input id='nombres' type='text' name='nombres' class='validate'>
					<label for='nombres'>Nombres</label>
				</div>
				<div class='input-field col s12 m6'>
					<i class='material-icons prefix'>account_box</i>
					<input id='apellidos' type='text' name='apellidos' class='validate'>
					<label for='apellidos'>Apellidos</label>
				</div>
				<div class='input-field col s12 m6'>
					<i class='material-icons prefix'>account_box</i>
					<input id='alias' type='text' name='alias' class='validate'>
					<label for='alias'>Nombre de usuario </label>
				</div>
				<div class='input-field col s12 m6'>
					<i class='material-icons prefix'>email</i>
					<input id='correo' type='email' name='correo' class='validate'>
					<label for='correo' data-error='Error' data-success='Bien'>Correo</label>
				</div>
				<div class='input-field col s12 m6'>
        			<i class="material-icons prefix">insert_invitation</i>
            		<input id="fecha_nac" name="fecha_nac" type="text" class="datepicker">
            		<label for="fecha_nac">Fecha de nacimiento</label>
        		</div>
				<div class='input-field col s12 m6'>
					<?php
						Page::showSelect("Tipo de documento", "tipo_documento", $cliente->getTipoDocumento(), $cliente->getTipoDocumentos());
					?>
        		</div>
				<div class='input-field col s12 m6'>
          			<i class='material-icons prefix'>import_contacts</i>
          			<input id='documento_admin' type='number' name='documento' class='validate'/>
          			<label for='documento_admin'>Documento</label>
        		</div>
				<div class='input-field col s12 m6'>
					<i class='material-icons prefix'>security</i>
					<input id='clave1' type='password' name='clave1' class='validate'>
					<label for='clave1' data-error='Error' data-success='Bien'>Contraseña</label>
				</div>
				<div class='input-field col s12 m6'>
					<i class='material-icons prefix'>security</i>
					<input id='clave2' type='password' name='clave2' class='validate'>
					<label for='clave2' data-error='Error' data-success='Bien'>Confirmar contraseña</label>
				</div>
				<div class='input-field col s12 m6'>
					<i class='material-icons prefix'>place</i>
					<input id='direccion' type='text' name='direccion' ></input>
					<label for='direccion'>Dirección</label>
				</div>
			</div>
			<div class='row center-align'>
			<div class="g-recaptcha col s12 m6" data-sitekey="6LcRq2YUAAAAAPf76su6EsO6DpraVU1GiROrB9Xl">
        </div>
			

				<div class='col s12'>
					<button type='submit' name='crear' class='btn waves-effect '><i class='material-icons'>send</i></button>
				</div>
			</div>
		</form>
	</div>
</div>