<!--- Informacion del carrito y mis productos -->
<!--Creo un contenedor para la informacion del carrito -->
<div class="container">
    <div class="row">
        <h2 style="color: rgb(30,140,100); font-family: calibri light">Mi Carrito</h2>

<!--Aqui empieza la tabla de carrito -->
<table class=' highlight responsive-table centered ' >
    <thead>
        <tr>
        
            <th>Imagen</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Subtotal</th>
            <th>Accion</th> 
        </tr>
    </thead>
    <tbody>
    <?php
	foreach($carrito as $carrito2){
        
        print("
        
        <tr>
            
			<td><img src='../../web/img/productos/$carrito2[imagen_url]' class='' width='100' height='100'></td>
            <td>$carrito2[nombre_producto]</td>
            <td>$carrito2[cantidad]</td>
            <td>$carrito2[precio]</td>
            <td>$carrito2[sub_total]</td>
            
            <td>
                <a href='updatecarrito.php?id=$carrito2[ID_detalle]' class='waves-effect waves-light modal-trigger'><i class='material-icons black-text'>create</i></a>
                <a href='borrarcarrito.php?id=$carrito2[ID_detalle]' id='space' class='waves-effect waves-light'href='#'><i class='material-icons red-text'>delete</i></a>
			</td>
		</tr>
		");
	}
	?>
    </tbody>
</table>

    <?php
    
    print("
    <div class='divider'></div>
    <!--Aqui termina la tabla de productos -->
      <div class='col s12 m12 l12'>
          <div class='col s12 m6 offset-m7 l6 offset-l9'>

          
              <h4 style='color: rgb(30,140,100); font-family: calibri light; margin-top: 40px;' >Total: ".$detalle->getTotal()."</h4>
                  
    ");
        ?>
            <form method='post'>
        <button type='submit'  name='pagofinal' class=' waves-effect waves-light btn modal-trigger' >Pago final<i class='material-icons'></i></button>
            </form>
          </div>
      </div>
      



    


  </div>
  </div>
</div>