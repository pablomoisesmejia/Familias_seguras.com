<h3 style="display:none;" id='name'><?php print($_SESSION['nombres_usuario']) ?> </h3> 
<div style="">
	<div class="row" id="clock_verg">
		<div class="col">
			<h4 id='clockyd' class='center-align'><?php print(date('d')); ?></h4>
		</div>

		<div class="col">
			<h4 id='clockym' class='center-align'><?php print(date('M')); ?></h4>
			<h4 id='clockyy' class='center-align'><?php print(date('Y')); ?></h4>	
		</div>
		

	</div>

	<h4 id='clockyt'><?php print(date('h:i A')) ?> <i class='material-icons prefix' style="color:rgb(99, 99, 99);">access_alarm</i></h4>
	<h4  style="display:none;" id='horadedia'><?php print(date('H')) ?></h4>

</div>
<h3 id='welcom_text' class='black-text'>Bienvenido al dashboard de Mister Robot</h3> 
<img src onerror='bienvenida_al_sistema();'>