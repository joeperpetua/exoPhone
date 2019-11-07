<?php 

    function agregarPrimerProducto($id){
        include("php_config/connect.php");
        $sql="SELECT p.id_product, p.id_dispositive, p.id_cat ,p.product_price, p.listed,
        d.disp_brand, d.disp_model, d.disp_pic,
        c.cat
        FROM products p
        
        LEFT JOIN dispositives d ON p.id_dispositive = d.id_dispositives
        LEFT JOIN category c ON p.id_cat = c.id_cat
        WHERE id_product=".$id."";

        $resultado=$connection->query($sql);
        while($registro=$resultado->fetch_array()){

            $Id_prod=$registro['id_product'];
            $Marca=$registro['disp_brand'];
            $Modelo=$registro['disp_model'];
            $Foto=$registro['disp_pic'];
            $Precio=$registro['product_price'];
            $Cantidad=1; //por ser la primera vez que cargo el producto
        }
        $prods_compra[] = array('id'=>$Id_prod,'marca'=>$Marca, 'modelo'=>$Modelo, 'foto'=>$Foto, 'precio'=>$Precio,'cantidad'=>$Cantidad);
        //CREAMOS LA VARIABLE DE SESSION $_SESSION['carrito']
            $_SESSION['carrito']=$prods_compra;	
        $resultado->free();
        $connection->close();
    }


    function mostrarProductosCarrito(){
        //a veces llamamos a la funcion y el carrito ya no existe por ejemplo porque
        // eliminamos el ultimo producto por lo cual eliminamos la variable de sesion carrito
        echo '<div class="columns">
            <div class="column left-container">
            
            <div class="has-background-light order-details-title has-border">
                <div class="container">
                    <h2 class="title">Carrito</h2>
                </div>
            </div>';
    
    
    
        if(!isset($_SESSION['carrito'])){
            echo '<p class="title empty">Carrito vacio</p>'.'<br>';	
        }else{
            $total=0;
            $prods_compra=$_SESSION['carrito'];
            // print_r($prods_compra);
            echo '<br>';
            foreach ($prods_compra as  $indice => $producto) {
        
                    echo ' <div class="container">
                    <div class="columns box vertical-centering details-box">
                        <div class="column">
                            <div class="right">
                                <span class="title">'.$producto["marca"].' '.$producto["modelo"].'</span><br />
                            </div>
                        </div>
                    
                        <div class="column">
                            <div class="left">
                                <span><img src="'.$producto["foto"].'" alt=""></span>
                            </div>
                        </div>
                        <div class="column">
                            <div class="field ">
                                <label class="label is-small">Cantidad</label>
                                <div class="control">
                                    <span><a href="carrito.php?id_resta='.$prods_compra[$indice]['id'].'">-</a><span>
                                    <input type="number" class="input"  value="'.$producto["cantidad"].'" disabled>
                                    <span><a href="carrito.php?id_suma='.$prods_compra[$indice]['id'].'">+</a></span><br>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <span class="is-bold">Precio unitario</span><br />
                            <span>$'.$producto["precio"].'</span>
                        </div>
                        <div class="column">
                            <span class="is-bold">Precio sub-total</span><br />
                            <span>$'.$prods_compra[$indice]["cantidad"]*$prods_compra[$indice]["precio"].'</span>
                        </div>
                        <div class="column">
                            <a  href="carrito.php?id_borra='.$prods_compra[$indice]["id"].'" class="button is-danger  is-bold">Eliminar</a>
                        </div>
                    </div>';
                
                
                $total=$total+($prods_compra[$indice]['cantidad']*$prods_compra[$indice]['precio']);

                echo '<p class="title empty">Total: $'.$total.'</p>';

                
            }
        
        }
    }
    



	




function buscarSiProductoExite($id){
	$prods_compra=$_SESSION['carrito'];
	$existe=0;
	foreach ($prods_compra as $indice => $producto) {
		if($producto['id']==$id){
			$existe=1;
			$prods_compra[$indice]['cantidad']++;
		}
	}
	$_SESSION['carrito']=$prods_compra;
	return $existe;		
}


function agregarNuevoProducto($id){
	$prods_compra=$_SESSION['carrito'];
	include("php_config/connect.php");
	$sql="SELECT p.id_product, p.id_dispositive, p.id_cat ,p.product_price, p.listed,
    d.disp_brand, d.disp_model, d.disp_pic,
    c.cat
    FROM products p
    
    LEFT JOIN dispositives d ON p.id_dispositive = d.id_dispositives
    LEFT JOIN category c ON p.id_cat = c.id_cat
    WHERE id_product=".$id."";

	$resultado=$connection->query($sql);
    
    while($registro=$resultado->fetch_array()){
        $Id_prod=$registro['id_product'];
        $Marca=$registro['disp_brand'];
        $Modelo=$registro['disp_model'];
        $Foto=$registro['disp_pic'];
        $Precio=$registro['product_price'];
        $Cantidad=1; //por ser la primera vez que cargo el producto
    }
    
	$nuevo_prod=array('id'=>$Id_prod,'marca'=>$Marca, 'modelo'=>$Modelo, 'foto'=>$Foto, 'precio'=>$Precio, 'cantidad'=>$Cantidad);
		array_push($prods_compra, $nuevo_prod);
		$_SESSION['carrito']=$prods_compra;
	$resultado->free();
	$connection->close();
}


function sumarCantidad($id){
	$prods_compra=$_SESSION['carrito'];
	foreach ($prods_compra as $indice => $producto) {
		if($producto['id']==$id){
			$prods_compra[$indice]['cantidad']++;
		}
	}
	$_SESSION['carrito']=$prods_compra;
}


function restarCantidad($id){
	$prods_compra=$_SESSION['carrito'];
	foreach ($prods_compra as $indice => $producto) {
		if($producto['id']==$id){
			$prods_compra[$indice]['cantidad']--;
		}
	}
	$_SESSION['carrito']=$prods_compra;
}



function eliminarProdCarrito($id){
	$prods_compra=$_SESSION['carrito'];
	foreach ($prods_compra as $indice => $producto) {
		if($producto['id']==$id){
			unset($prods_compra[$indice]);
		}
    }
    
	// hay que fijarse si el carrito esta vacio 
    //eliminar la variable de sesion carrito
    
	if(count($prods_compra)>0){
	$_SESSION['carrito']=$prods_compra;
	}else{
		unset($_SESSION['carrito']);
	}
}

function confirmarCompra(){
	$prods_compra=$_SESSION['carrito'];
	$total=0;
	foreach ($prods_compra as  $indice => $producto) {
            echo '<p class="subtitle">'.$producto['marca'].' '.$producto['modelo'].'</p><br>';
			echo '<p class="subtitle">Precio unitario: $'.$producto['precio'].'</p><br>';
			echo '<p class="subtitle">Cantidad: '.$producto['cantidad'].'</p><br>';
			echo '<p class="subtitle">Subtotal: $'.$prods_compra[$indice]['cantidad']*$prods_compra[$indice]['precio'].'</p><br><br>';

		    $total=$total+($prods_compra[$indice]['cantidad']*$prods_compra[$indice]['precio']);
	}
	echo '<p class="subtitle"><strong>TOTAL: $'.$total.'</strong></p><br><br>';
}

 function comprar(){

 	include("php_config/connect.php");
 	$fecha=date("Y-m-d");
 	$usuario=$_SESSION['id_user'];
 	
 	$sql="INSERT INTO orders (order_date, id_user) VALUES ('$fecha','$usuario')";
 	$insert=$connection->query($sql);
	

 	$sqlc="SELECT id_order FROM orders ORDER BY id_order desc LIMIT 1";
 	$consulta=$connection->query($sqlc);
 	$registro=$consulta->fetch_array();
 	
 	$id_order=$registro[0];

 	$prods_compra=$_SESSION['carrito'];
 	$total=0;
 	foreach ($prods_compra as $indice => $producto) {
 		$id_prod=$producto['id'];
 		$precio=$producto['precio'];
 		$cantidad=$producto['cantidad'];

 		$sqli="INSERT INTO prodxorder (id_order, id_dispositives, product_price, product_cant) VALUES ('$registro[0]','$id_prod','$precio','$cantidad')";
 		$insertar=$connection->query($sqli)? print(""): print("Ups, :(");

 		$total=$total+($prods_compra[$indice]['precio']*$prods_compra[$indice]['cantidad']);
	}
	
 	$sql="UPDATE orders SET order_total='$total' WHERE id_order='$registro[0]'";
     $actualizar=$connection->query($sql)? print("<script>alert('Compra realizada correctamente');
                                                window.location.replace('index.php');    
                                                </script>"): print("Ups, :(");
 	}

?>