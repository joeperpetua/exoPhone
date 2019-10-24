<?php
    require('php_config/connect.php');
    require('queries/query_preview.php');
    require('php_include/cartLogic.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>exoPhone</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="imagenes/icon-low.png" sizes="16x16">
	<link rel="stylesheet" href="css/mystyles.css">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/carrito.css">

	<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>

<?php
    include('include/nav.php');

    echo '<section class="section">';
   
    if(isset($_SESSION['user'])){
        if(isset($_SESSION['carrito'])){	
            if(isset($_GET['id'])){
            //ingresa un nuevo producto o un producto existente para actualizar cantidad
            $existe=buscarSiProductoExite($_GET['id']);
                if($existe==0){
                    //ingresa un nuevo producto
                    agregarNuevoProducto($_GET['id']);
                }
            }
            if(isset($_GET['id_suma'])){
                sumarCantidad($_GET['id_suma']);
            }
            if(isset($_GET['id_resta'])){
                restarCantidad($_GET['id_resta']);
            }
            if(isset($_GET['id_borra'])){
                eliminarProdCarrito($_GET['id_borra']);
            }	
            mostrarProductosCarrito();	
            
            if(isset($_SESSION['carrito'])){	
            echo '<a href="pago.php" class="button is-primary">Finalizar compra</a><br><br>';
            }	
        }elseif(isset($_GET['id'])){
            // COMO NO EXISTE $_SESSION['carrito']
            //quiere decir que ingresa el primer producto al carrito
            agregarPrimerProducto($_GET['id']);
            mostrarProductosCarrito();
            
            echo '<a href="pago.php" class="button is-primary">Finalizar compra</a><br><br>';
            }else{
                echo '<p class="title empty">Carrito vacio</p>'.'<br>';
            }	
        echo '<a href="productos.php" class="button">Seguir viendo productos</a>';
    }else{
        //si no existe $_SESSION['usuario']
        echo '<p class="title empty">Debes iniciar sesion para utilizar el carrito</p>';
       
    }

    echo '</section>';


    
    include('include/footer.html');
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/jquery.scrollto@2.1.2/jquery.scrollTo.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/jquery.localscroll@2.0.0/jquery.localScroll.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/nav.js"></script>
<script type="text/javascript" src="js/carousel.js"></script>

</body>
</html>

<?php mysqli_close($connection); ?>