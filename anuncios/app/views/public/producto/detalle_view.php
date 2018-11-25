<div class='container'>
    <div class='row'>
        <div class='col s12'>
        <?php
        print("
          
            <div class='card horizontal'>
                <div class='card-image'>
             
                </div>
                <div class='card-stacked'>
                    <div class='card-content'>
                     <input value='.$producto->getNombre'></input>
                        
                    </div>
                    <div class='card-action'>
                        <form method='post'>
                            <div class='row center'>
                                <div class='input-field col s12 m6'>
                                    <i class='material-icons prefix'>list</i>
                                    <input id='cantidad' type='number' name='cantidad' min='1' class='validate'>
                                    <label for='cantidad'>Cantidad</label>
                                </div>
                                <div class='input-field col s12 m6'>
                                    <button type='submit' name='agregar' class='btn waves-effect waves-light blue tooltipped' data-tooltip='Agregar al carrito'><i class='material-icons'>add_shopping_cart</i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        ");
        ?>
        </div>
    </div>
</div>