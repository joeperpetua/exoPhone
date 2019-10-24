<?php

function mostrarProductosCarrito(){
	//a veces llamamos a la funcion y el carrito ya no existe por ejemplo porque
    // eliminamos el ultimo producto por lo cual eliminamos la variable de sesion carrito
    echo '<div class="columns is-uppercase">
        <div class="column left-container">
        
        <div class="has-background-light order-details-title has-border">
            <div class="container">
                <h2 class="has-text-success">Detalle de orden</h2>
            </div>
        </div>';



	if(!isset($_SESSION['carrito'])){
	echo "carrito vacio <br>";	
	}else{
	$total=0;
	$prods_compra=$_SESSION['carrito'];
	print_r($prods_compra);
	echo '<br>';
	foreach ($prods_compra as  $indice => $producto) {

			echo ' <div class="container">
            <div class="columns box vertical-centering details-box">
                <div class="column">
                    <div class="left">
                        <span class="">'.$productos["marca"].' '.$productos["modelo"].'</span><br />
                        <span><img src="img/accuve.png" alt=""></span>
                    </div>
                </div>
                <div class="column">
                    <div class="field ">
                        <label class="label is-small">Cantidad</label>
                        <div class="control">
                            <span><a href="carrito.php?id_resta='.$prods_compra[$indice]['id'].'">- |</a><span>
                            <input type="numer" class="input" value="'.$productos["cantidad"].'">
                            <span><a href="carrito.php?id_suma='.$prods_compra[$indice]['id'].'">+ </a></span><br>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <span class="is-bold">Precio unitario</span><br />
                    <span>'.$productos["precio"].'</span>
                </div>
                <div class="column">
                    <span class="is-bold">Precio sub-total</span><br />
                    <span>$'.$prods_compra[$indice]["cantidad"]*$prods_compra[$indice]["precio"].'</span>
                </div>
                <div class="column">
                    <a <a href="carrito.php?id_borra='.$prods_compra[$indice]["id"].'"> class="button is-info is-rounded is-bold">Eliminar</a>
                </div>
            </div>';
		
        // if($prods_compra[$indice]['cantidad']>1){
        //     echo '<a href="carrito.php?id_resta='.$prods_compra[$indice]['id'].'">- |</a> ';
        //     echo '<a href="carrito.php?id_suma='.$prods_compra[$indice]['id'].'">+ </a><br> ';
        // }else{
        //     echo '<a href="carrito.php?id_suma='.$prods_compra[$indice]['id'].'">
        //     + </a><br> ';
        // }
        // echo 'Subtotal: $'.$prods_compra[$indice]['cantidad']*$prods_compra[$indice]['precio'];
        // echo '<br>';
        // echo '<a href="carrito.php?id_borra='.$prods_compra[$indice]['id'].'">
        //         Eliminar producto del carrito </a> <br><br>';
        $total=$total+($prods_compra[$indice]['cantidad']*$prods_compra[$indice]['precio']);
    }
    
	}
}


?>


            
           
                
            
            
            <div class="columns has-border-bottom is-small section order-details">
                <div class="column">
                    <span class="is-bold">Enviar a</span><br />
                    <span>{NOMBRE}</span>
                </div>
                
                <div class="column">
                    <span class="is-bold">Cantidad</span><br />
                    <span>{CANT}</span>
                </div>

                <div class="column">
                    <span class="is-bold">Total</span><br />
                    <span>{PRECIO}</span>
                </div>
                
            </div>
        </div>
        
    </div>

