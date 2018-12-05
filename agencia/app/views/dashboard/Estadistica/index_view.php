
<div class="row">
    <div class="col s12 m12 l12 ">
        
			<div class="col s12 m3 l3">
				<div class="card-panel ">
					<h5 class="card-title ">Productos mas vendidos</h6>
					<div class="divider"></div>
					<div class="card-action">
						<canvas id="myChart"  height="300"></canvas>
					</div>
				</div>
			</div>
			<div class="col s12 m3 l3">
				<div class="card-panel ">
					<h5 class="card-title ">Productos por proveedor</h6>
					<div class="divider"></div>
					<div class="card-action">
						<canvas id="myChart2"  height="300"></canvas>
					</div>
				</div>
			</div>
        	
        
        <div class="col s12 m6 l6 ">
            <div class="card-panel ">
                <h5 class="card-title ">Ganancias por mes del año actual</h5>
                <div class="divider"></div>
                <div class="card-action">
                    <canvas id="myChart3"  height="138"></canvas>
                </div>
            </div>
        </div>
	</div>
	<div class="col s12 m12 l12 ">
        
			<div class="col s12 m6 l6">
				<div class="card-panel ">
					<h5 class="card-title ">Ganancias por año</h6>
					<div class="divider"></div>
					<div class="card-action">
						<canvas id="myChart4"  height="138"></canvas>
					</div>
				</div>
			</div>
			<div class="col s12 m3 l3">
				<div class="card-panel ">
					<h5 class="card-title ">Productos por proveedor</h6>
					<div class="divider"></div>
					<div class="card-action">
						<canvas id="myChart5"  height="300"></canvas>
					</div>
				</div>
			</div>
        	
        
        <div class="col s12 m3 l3 ">
            <div class="card-panel ">
                <h5 class="card-title ">Ventas año actual</h5>
                <div class="divider"></div>
                <div class="card-action">
                    <canvas id="myChart6"  height="300"></canvas>
                </div>
            </div>
        </div>
	</div>
	<div class="col s12 m12 l12 ">
        
			<div class="col s12 m3 l3">
				<div class="card-panel ">
					<h5 class="card-title ">Productos mas vendidos</h6>
					<div class="divider"></div>
					<div class="card-action">
						<canvas id="myChart7"  height="300"></canvas>
					</div>
				</div>
			</div>
			<div class="col s12 m3 l3">
				<div class="card-panel ">
					<h5 class="card-title ">Productos mas comentados</h6>
					<div class="divider"></div>
					<div class="card-action">
						<canvas id="myChart8"  height="300"></canvas>
					</div>
				</div>
			</div>
        	
        
        <div class="col s12 m3 l3 ">
            <div class="card-panel ">
                <h5 class="card-title ">Clientes y membresias</h5>
                <div class="divider"></div>
                <div class="card-action">
                    <canvas id="myChart9"  height="300"></canvas>
                </div>
            </div>
		</div>
		
		<div class="col s12 m3 l3">
				<div class="card-panel ">
					<h5 class="card-title ">Productos con mejor valoracion</h6>
					<div class="divider"></div>
					<div class="card-action">
						<canvas id="myChart10"  height="300"></canvas>
					</div>
				</div>
			</div>
	</div>
	
</div>


<script>
    var ctx = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'doughnut',
		data: {
			labels: [
				
				<?php
					$sql = "SELECT proveedor.nombre_proveedor AS nombresito, COUNT(producto.nombre_producto) AS datas FROM producto 
                    INNER JOIN proveedor ON proveedor.ID_proveedor = producto.FK_ID_proveedor
                    GROUP by producto.FK_ID_proveedor";
					$params = array(null);
					$result = Database::getRows($sql, $params);
					foreach($result as $row){
				?> 
					'<?php print("$row[nombresito]"); ?>', 
				<?php 
					}
				?>
			],
			datasets: [{
				label: 'Cantidad',
				data: [
					
					<?php
						$sql = "SELECT proveedor.nombre_proveedor AS nombresito, COUNT(producto.nombre_producto) AS datas FROM producto 
                        INNER JOIN proveedor ON proveedor.ID_proveedor = producto.FK_ID_proveedor
                        GROUP by producto.FK_ID_proveedor";
						$params = array(null);
						$result = Database::getRows($sql, $params);
						foreach($result as $row){
					?> 
						<?php print("$row[datas]"); ?>, 
					<?php 
						}
					?>
				],
				backgroundColor: [
					'rgba(84, 94, 117, 1)',
					'rgba(93, 211, 158, 1)',
					'rgba(52, 138, 167, 1)',
					'rgba(120, 192, 224, 1)',
					'rgba(99, 173, 242, 1)',
					'rgba(120, 192, 224, 1)'
				],
				borderColor: [
					'rgba(84, 94, 117, 1)',
					'rgba(93, 211, 158, 1)',
					'rgba(52, 138, 167, 1)',
					'rgba(120, 192, 224, 1)',
					'rgba(99, 173, 242, 1)',
					'rgba(120, 192, 224, 1)'
				],
				hoverBackgroundColor: [
					'rgba(84, 94, 117, 0.8)',
					'rgba(93, 211, 158, 0.8)',
					'rgba(52, 138, 167, 0.8)',
					'rgba(120, 192, 224, 0.8)',
					'rgba(99, 173, 242, 0.8)',
					'rgba(120, 192, 224, 0.8)'
				],
				borderWidth: 2
			}]
		},
		options: {
			responsive : true,
			
		}
    }, 10000);

    var ctx = document.getElementById("myChart2").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'doughnut',
		data: {
			labels: [
				
				<?php
					$sql = "SELECT proveedor.nombre_proveedor AS nombresito, COUNT(producto.nombre_producto) AS datas FROM producto 
                    INNER JOIN proveedor ON proveedor.ID_proveedor = producto.FK_ID_proveedor
                    GROUP by producto.FK_ID_proveedor";
					$params = array(null);
					$result = Database::getRows($sql, $params);
					foreach($result as $row){
				?> 
					'<?php print("$row[nombresito]"); ?>', 
				<?php 
					}
				?>
			],
			datasets: [{
				label: 'Cantidad',
				data: [
					
					<?php
						$sql = "SELECT proveedor.nombre_proveedor AS nombresito, COUNT(producto.nombre_producto) AS datas FROM producto 
                        INNER JOIN proveedor ON proveedor.ID_proveedor = producto.FK_ID_proveedor
                        GROUP by producto.FK_ID_proveedor";
						$params = array(null);
						$result = Database::getRows($sql, $params);
						foreach($result as $row){
					?> 
						<?php print("$row[datas]"); ?>, 
					<?php 
						}
					?>
				],
				backgroundColor: [
					'rgba(84, 94, 117, 1)',
					'rgba(93, 211, 158, 1)',
					'rgba(52, 138, 167, 1)',
					'rgba(120, 192, 224, 1)',
					'rgba(99, 173, 242, 1)',
					'rgba(120, 192, 224, 1)'
				],
				borderColor: [
					'rgba(84, 94, 117, 1)',
					'rgba(93, 211, 158, 1)',
					'rgba(52, 138, 167, 1)',
					'rgba(120, 192, 224, 1)',
					'rgba(99, 173, 242, 1)',
					'rgba(120, 192, 224, 1)'
				],
				hoverBackgroundColor: [
					'rgba(84, 94, 117, 0.8)',
					'rgba(93, 211, 158, 0.8)',
					'rgba(52, 138, 167, 0.8)',
					'rgba(120, 192, 224, 0.8)',
					'rgba(99, 173, 242, 0.8)',
					'rgba(120, 192, 224, 0.8)'
				],
				borderWidth: 1
			}]
		},
		options: {
			responsive : true,
			
		}
	}, 5000);
	
	var ctx = document.getElementById("myChart3").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: [
				
				<?php
					$sql = "SELECT  DATE_FORMAT(venta.fecha,'%M') AS nombresito , SUM(detalle_factura.sub_total) AS datas , detalle_factura.estadoventa FROM venta 
					INNER JOIN detalle_factura ON venta.ID_venta = detalle_factura.FK_ID_venta
					WHERE YEAR(venta.fecha) = YEAR(NOW()) AND detalle_factura.estadoventa = 1
					GROUP BY MONTH(venta.fecha)";
					$params = array(null);
					$result = Database::getRows($sql, $params);
					foreach($result as $row){
				?> 
					'<?php print("$row[nombresito]"); ?>', 
				<?php 
					}
				?>
			],
			datasets: [{
				label: 'Cantidad',
				data: [
					
					<?php
						$sql = "SELECT  DATE_FORMAT(venta.fecha,'%M') AS nombresito , SUM(detalle_factura.sub_total) AS datas , detalle_factura.estadoventa FROM venta 
						INNER JOIN detalle_factura ON venta.ID_venta = detalle_factura.FK_ID_venta
						WHERE YEAR(venta.fecha) = YEAR(NOW()) AND detalle_factura.estadoventa = 1
						GROUP BY MONTH(venta.fecha)";
						$params = array(null);
						$result = Database::getRows($sql, $params);
						foreach($result as $row){
					?> 
						<?php print("$row[datas]"); ?>, 
					<?php 
						}
					?>
				],
				backgroundColor: [
					'rgba(99, 173, 242, 1)',
					'rgba(93, 211, 158, 1)',
					'rgba(52, 138, 167, 1)',
					'rgba(120, 192, 224, 1)',
					'rgba(99, 173, 242, 1)',
					'rgba(120, 192, 224, 1)'
				],
				borderColor: [
					'rgba(99, 173, 242, 1',
					'rgba(93, 211, 158, 1)',
					'rgba(52, 138, 167, 1)',
					'rgba(120, 192, 224, 1)',
					'rgba(99, 173, 242, 1)',
					'rgba(120, 192, 224, 1)'
				],
				hoverBackgroundColor: [
					'rgba(99, 173, 242, 1)',
					'rgba(93, 211, 158, 0.8)',
					'rgba(52, 138, 167, 0.8)',
					'rgba(120, 192, 224, 0.8)',
					'rgba(99, 173, 242, 0.8)',
					'rgba(120, 192, 224, 0.8)'
				],
				borderWidth: 2,
				fill: false
			}]
		},
		options: {
			responsive : true,
			showLines: true,
			scales: {
            yAxes: [{
                stacked: true
            }]
        }
			
		}
	}, 5000);
	
	var ctx = document.getElementById("myChart4").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: [
				
				<?php
					$sql = "SELECT venta.ID_venta , DATE_FORMAT(venta.fecha,'%Y') AS nombresito , SUM(detalle_factura.sub_total) AS datas , detalle_factura.estadoventa FROM venta 
					INNER JOIN detalle_factura ON venta.ID_venta = detalle_factura.FK_ID_venta
					WHERE detalle_factura.estadoventa = 1
					GROUP BY DATE_FORMAT(venta.fecha,'%Y')";
					$params = array(null);
					$result = Database::getRows($sql, $params);
					foreach($result as $row){
				?> 
					'<?php print("$row[nombresito]"); ?>', 
				<?php 
					}
				?>
			],
			datasets: [{
				label: 'Cantidad',
				data: [
					
					<?php
						$sql = "SELECT venta.ID_venta , DATE_FORMAT(venta.fecha,'%Y') AS nombresito , SUM(detalle_factura.sub_total) AS datas , detalle_factura.estadoventa FROM venta 
						INNER JOIN detalle_factura ON venta.ID_venta = detalle_factura.FK_ID_venta
						WHERE detalle_factura.estadoventa = 1
						GROUP BY DATE_FORMAT(venta.fecha,'%Y')";
						$params = array(null);
						$result = Database::getRows($sql, $params);
						foreach($result as $row){
					?> 
						<?php print("$row[datas]"); ?>, 
					<?php 
						}
					?>
				],
				backgroundColor: [
					'rgba(99, 173, 242, 1)',
					'rgba(93, 211, 158, 1)',
					'rgba(52, 138, 167, 1)',
					'rgba(120, 192, 224, 1)',
					'rgba(99, 173, 242, 1)',
					'rgba(120, 192, 224, 1)'
				],
				borderColor: [
					'rgba(99, 173, 242, 1',
					'rgba(93, 211, 158, 1)',
					'rgba(52, 138, 167, 1)',
					'rgba(120, 192, 224, 1)',
					'rgba(99, 173, 242, 1)',
					'rgba(120, 192, 224, 1)'
				],
				hoverBackgroundColor: [
					'rgba(99, 173, 242, 1)',
					'rgba(93, 211, 158, 0.8)',
					'rgba(52, 138, 167, 0.8)',
					'rgba(120, 192, 224, 0.8)',
					'rgba(99, 173, 242, 0.8)',
					'rgba(120, 192, 224, 0.8)'
				],
				borderWidth: 2,
				fill: true
			}]
		},
		options: {
			responsive : true,
			showLines: true,
			scales: {
            yAxes: [{
                stacked: true
            }]
        }
			
		}
	}, 5000);
	
	var ctx = document.getElementById("myChart5").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: [
				
				<?php
					$sql = "SELECT proveedor.nombre_proveedor AS nombresito, COUNT(producto.nombre_producto) AS datas FROM producto 
                    INNER JOIN proveedor ON proveedor.ID_proveedor = producto.FK_ID_proveedor
                    GROUP by producto.FK_ID_proveedor";
					$params = array(null);
					$result = Database::getRows($sql, $params);
					foreach($result as $row){
				?> 
					'<?php print("$row[nombresito]"); ?>', 
				<?php 
					}
				?>
			],
			datasets: [{
				label: 'Cantidad',
				data: [
					
					<?php
						$sql = "SELECT proveedor.nombre_proveedor AS nombresito, COUNT(producto.nombre_producto) AS datas FROM producto 
                        INNER JOIN proveedor ON proveedor.ID_proveedor = producto.FK_ID_proveedor
                        GROUP by producto.FK_ID_proveedor";
						$params = array(null);
						$result = Database::getRows($sql, $params);
						foreach($result as $row){
					?> 
						<?php print("$row[datas]"); ?>, 
					<?php 
						}
					?>
				],
				backgroundColor: [
					'rgba(84, 94, 117, 1)',
					'rgba(93, 211, 158, 1)',
					'rgba(52, 138, 167, 1)',
					'rgba(120, 192, 224, 1)',
					'rgba(99, 173, 242, 1)',
					'rgba(120, 192, 224, 1)'
				],
				borderColor: [
					'rgba(84, 94, 117, 1)',
					'rgba(93, 211, 158, 1)',
					'rgba(52, 138, 167, 1)',
					'rgba(120, 192, 224, 1)',
					'rgba(99, 173, 242, 1)',
					'rgba(120, 192, 224, 1)'
				],
				hoverBackgroundColor: [
					'rgba(84, 94, 117, 0.8)',
					'rgba(93, 211, 158, 0.8)',
					'rgba(52, 138, 167, 0.8)',
					'rgba(120, 192, 224, 0.8)',
					'rgba(99, 173, 242, 0.8)',
					'rgba(120, 192, 224, 0.8)'
				],
				borderWidth: 1
			}]
		},
		options: {
			responsive : true,
			
		}
	}, 5000);
	
	var ctx = document.getElementById("myChart6").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: [
				
				<?php
					$sql = "SELECT COUNT(venta.ID_venta) AS datas , YEAR(venta.fecha) AS nombresito FROM venta
					WHERE YEAR(venta.fecha) = YEAR(NOW())";
					$params = array(null);
					$result = Database::getRows($sql, $params);
					foreach($result as $row){
				?> 
					'<?php print("$row[nombresito]"); ?>', 
				<?php 
					}
				?>
			],
			datasets: [{
				label: 'Cantidad',
				data: [
					
					<?php
						$sql = "SELECT COUNT(venta.ID_venta) AS datas, YEAR(venta.fecha) AS nombresito FROM venta
						WHERE YEAR(venta.fecha) = YEAR(NOW())";
						$params = array(null);
						$result = Database::getRows($sql, $params);
						foreach($result as $row){
					?> 
						<?php print("$row[datas]"); ?>, 
					<?php 
						}
					?>
				],
				backgroundColor: [
					'rgba(120, 192, 224, 1)',
					'rgba(93, 211, 158, 1)',
					'rgba(52, 138, 167, 1)',
					'rgba(120, 192, 224, 1)',
					'rgba(99, 173, 242, 1)',
					'rgba(120, 192, 224, 1)'
				],
				borderColor: [
					'rgba(120, 192, 224, 1)',
					'rgba(93, 211, 158, 1)',
					'rgba(52, 138, 167, 1)',
					'rgba(120, 192, 224, 1)',
					'rgba(99, 173, 242, 1)',
					'rgba(120, 192, 224, 1)'
				],
				hoverBackgroundColor: [
					'rgba(120, 192, 224, 1)',
					'rgba(93, 211, 158, 0.8)',
					'rgba(52, 138, 167, 0.8)',
					'rgba(120, 192, 224, 0.8)',
					'rgba(99, 173, 242, 0.8)',
					'rgba(120, 192, 224, 0.8)'
				],
				borderWidth: 2,
				fill: true
			}]
		},
		options: {
			responsive : true,
			showLines: true,
			scales: {
            yAxes: [{
                stacked: true
            }]
        }
			
		}
	}, 5000);
	
	var ctx = document.getElementById("myChart7").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'doughnut',
		data: {
			labels: [
				
				<?php
					$sql = "SELECT producto.nombre_producto AS nombresito, detalle_factura.FK_ID_producto AS datas 
					FROM detalle_factura 
					INNER JOIN producto ON producto.ID_producto = detalle_factura.FK_ID_producto 
					GROUP by detalle_factura.FK_ID_producto order by cantidad DESC";
					$params = array(null);
					$result = Database::getRows($sql, $params);
					foreach($result as $row){
				?> 
					'<?php print("$row[nombresito]"); ?>', 
				<?php 
					}
				?>
			],
			datasets: [{
				label: 'Cantidad',
				data: [
					
					<?php
						$sql = "SELECT producto.nombre_producto AS nombresito, detalle_factura.FK_ID_producto AS datas 
						FROM detalle_factura 
						INNER JOIN producto ON producto.ID_producto = detalle_factura.FK_ID_producto 
						GROUP by detalle_factura.FK_ID_producto order by cantidad DESC";
						$params = array(null);
						$result = Database::getRows($sql, $params);
						foreach($result as $row){
					?> 
						<?php print("$row[datas]"); ?>, 
					<?php 
						}
					?>
				],
				backgroundColor: [
					'rgba(84, 94, 117, 1)',
					'rgba(93, 211, 158, 1)',
					'rgba(52, 138, 167, 1)',
					'rgba(120, 192, 224, 1)',
					'rgba(99, 173, 242, 1)',
					'rgba(120, 192, 224, 1)'
				],
				borderColor: [
					'rgba(84, 94, 117, 1)',
					'rgba(93, 211, 158, 1)',
					'rgba(52, 138, 167, 1)',
					'rgba(120, 192, 224, 1)',
					'rgba(99, 173, 242, 1)',
					'rgba(120, 192, 224, 1)'
				],
				hoverBackgroundColor: [
					'rgba(84, 94, 117, 0.8)',
					'rgba(93, 211, 158, 0.8)',
					'rgba(52, 138, 167, 0.8)',
					'rgba(120, 192, 224, 0.8)',
					'rgba(99, 173, 242, 0.8)',
					'rgba(120, 192, 224, 0.8)'
				],
				borderWidth: 1
			}]
		},
		options: {
			responsive : true,
			
		}
	}, 5000);
	
	var ctx = document.getElementById("myChart8").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: [
				
				<?php
					$sql = "SELECT proveedor.nombre_proveedor AS nombresito, COUNT(producto.nombre_producto) AS datas FROM producto 
                    INNER JOIN proveedor ON proveedor.ID_proveedor = producto.FK_ID_proveedor
                    GROUP by producto.FK_ID_proveedor";
					$params = array(null);
					$result = Database::getRows($sql, $params);
					foreach($result as $row){
				?> 
					'<?php print("$row[nombresito]"); ?>', 
				<?php 
					}
				?>
			],
			datasets: [{
				label: 'Cantidad',
				data: [
					
					<?php
						$sql = "SELECT proveedor.nombre_proveedor AS nombresito, COUNT(producto.nombre_producto) AS datas FROM producto 
                        INNER JOIN proveedor ON proveedor.ID_proveedor = producto.FK_ID_proveedor
                        GROUP by producto.FK_ID_proveedor";
						$params = array(null);
						$result = Database::getRows($sql, $params);
						foreach($result as $row){
					?> 
						<?php print("$row[datas]"); ?>, 
					<?php 
						}
					?>
				],
				backgroundColor: [
					'rgba(84, 94, 117, 1)',
					'rgba(93, 211, 158, 1)',
					'rgba(52, 138, 167, 1)',
					'rgba(120, 192, 224, 1)',
					'rgba(99, 173, 242, 1)',
					'rgba(120, 192, 224, 1)'
				],
				borderColor: [
					'rgba(84, 94, 117, 1)',
					'rgba(93, 211, 158, 1)',
					'rgba(52, 138, 167, 1)',
					'rgba(120, 192, 224, 1)',
					'rgba(99, 173, 242, 1)',
					'rgba(120, 192, 224, 1)'
				],
				hoverBackgroundColor: [
					'rgba(84, 94, 117, 0.8)',
					'rgba(93, 211, 158, 0.8)',
					'rgba(52, 138, 167, 0.8)',
					'rgba(120, 192, 224, 0.8)',
					'rgba(99, 173, 242, 0.8)',
					'rgba(120, 192, 224, 0.8)'
				],
				borderWidth: 1
			}]
		},
		options: {
			responsive : true,
			
		}
	}, 5000);
	//Grafica de clientes con membresia!!!
	var ctx = document.getElementById("myChart9").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'doughnut',
		data: {
			labels: [
				
				<?php
					$sql = "SELECT COUNT(*) AS datas, 
					IF(FK_ID_membresia > 0,'Cuentas suscritas','Cuentas gratuitas')as nombresito 
					from cliente GROUP BY nombresito ";
					$params = array(null);
					$result = Database::getRows($sql, $params);
					foreach($result as $row){
				?> 
					'<?php print("$row[nombresito]"); ?>', 
				<?php 
					}
				?>
			],
			datasets: [{
				label: 'Cantidad',
				data: [
					
					<?php
						$sql = "SELECT COUNT(*) AS datas,
						 IF(FK_ID_membresia > 0,'Cuentas suscritas','Cuentas gratuitas')as nombresito 
						 from cliente GROUP BY nombresito";
						$params = array(null);
						$result = Database::getRows($sql, $params);
						foreach($result as $row){
					?> 
						<?php print("$row[datas]"); ?>, 
					<?php 
						}
					?>
				],
				backgroundColor: [
					'rgba(84, 94, 117, 1)',
					'rgba(93, 211, 158, 1)',
					'rgba(52, 138, 167, 1)',
					'rgba(120, 192, 224, 1)',
					'rgba(99, 173, 242, 1)',
					'rgba(120, 192, 224, 1)'
				],
				borderColor: [
					'rgba(84, 94, 117, 1)',
					'rgba(93, 211, 158, 1)',
					'rgba(52, 138, 167, 1)',
					'rgba(120, 192, 224, 1)',
					'rgba(99, 173, 242, 1)',
					'rgba(120, 192, 224, 1)'
				],
				hoverBackgroundColor: [
					'rgba(84, 94, 117, 0.8)',
					'rgba(93, 211, 158, 0.8)',
					'rgba(52, 138, 167, 0.8)',
					'rgba(120, 192, 224, 0.8)',
					'rgba(99, 173, 242, 0.8)',
					'rgba(120, 192, 224, 0.8)'
				],
				borderWidth: 1
			}]
		},
		options: {
			responsive : true,
			
		}
	}, 5000);

	//Grafico de productos con mejor valoracion!!!!!!!!!
	var ctx = document.getElementById("myChart10").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'doughnut',
		data: {
			labels: [
				
				<?php
					$sql = "SELECT producto.nombre_producto AS nombresito, valoracion.valoracion AS datas FROM valoracion
                    INNER JOIN producto ON producto.ID_producto = valoracion.FK_ID_producto
                    GROUP by valoracion.FK_ID_producto order by valoracion DESC";
					$params = array(null);
					$result = Database::getRows($sql, $params);
					foreach($result as $row){
				?> 
					'<?php print("$row[nombresito]"); ?>', 
				<?php 
					}
				?>
			],
			datasets: [{
				//label: 'Valoracion',
				data: [
					
					<?php
						$sql = "SELECT producto.nombre_producto AS nombresito, valoracion.valoracion AS datas FROM valoracion
						INNER JOIN producto ON producto.ID_producto = valoracion.FK_ID_producto
						GROUP by valoracion.FK_ID_producto order by valoracion DESC";
						$params = array(null);
						$result = Database::getRows($sql, $params);
						foreach($result as $row){
					?> 
						<?php print("$row[datas]"); ?>, 
					<?php 
						}
					?>
				],
				backgroundColor: [
					'rgba(84, 94, 117, 1)',
					'rgba(93, 211, 158, 1)',
					'rgba(52, 138, 167, 1)',
					'rgba(120, 192, 224, 1)',
					'rgba(99, 173, 242, 1)',
					'rgba(120, 192, 224, 1)'
				],
				borderColor: [
					'rgba(84, 94, 117, 1)',
					'rgba(93, 211, 158, 1)',
					'rgba(52, 138, 167, 1)',
					'rgba(120, 192, 224, 1)',
					'rgba(99, 173, 242, 1)',
					'rgba(120, 192, 224, 1)'
				],
				hoverBackgroundColor: [
					'rgba(84, 94, 117, 0.8)',
					'rgba(93, 211, 158, 0.8)',
					'rgba(52, 138, 167, 0.8)',
					'rgba(120, 192, 224, 0.8)',
					'rgba(99, 173, 242, 0.8)',
					'rgba(120, 192, 224, 0.8)'
				],
				borderWidth: 1
			}]
		},
		options: {
			responsive : true,
			
		}
    }, 5000);
    
    </script>