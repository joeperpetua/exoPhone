<?php
require_once("php_config/connect.php");

	if(isset($_GET['cod'])){
        ?>

<!DOCTYPE html>
  <html>
    <head>
      
        <title>exoPhone - Recuperar Contrasena</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="imagenes/icon-low.png" sizes="16x16">
        
        <link rel="stylesheet" href="css/mystyles.css">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/modal.css">
	<link rel="stylesheet" href="css/control.css">
    <link rel="stylesheet" href="css/abm.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/recuperar.css">


        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    </head>

    <body>
    <?php include('include/nav.php'); ?>  

    <div class="hero is-medium has-background">
          <img src="imagenes/slider2.jpg" alt="" class="hero-background">
    </div>
    
    <section class="section">
        <p class="title abm">Recuperar contraseña <a href="add_product.php" class="button is-pulled-right"><i class="fas fa-arrow-left"></i></a></p>

        
        <div class="box" id="body">
            <div class="columns is-multiline is-centered" style="overflow: auto; max-height: 100%;">

                <div class="column is-full container is-active">
                <form method="POST" class="form"> 
                            <label class="label">Nueva contraseña</label>
                            <input type="password" class="input" name="password_ch" placeholder="Nueva contraseña"> <br><br>
                            
                            <label class="label">Repetir contraseña</label>
                            <input type="password" class="input" name="password_confirm_ch" placeholder="Repetir Contraseña"> <br><br>
                            <input type="submit" class="button is-primary" name="enviar_ch" value="Cambiar contraseña">
                            <br><br>     
                  <span>¿Recordo su contraseña? <br><a href="index.php" class="button">Volver atras</a> </span>
                  <br>
                          
                </form>
                </div>

            </div>
        </div>

</section>
    
 

    <?php include('include/footer.html'); ?>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/jquery.scrollto@2.1.2/jquery.scrollTo.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/jquery.localscroll@2.0.0/jquery.localScroll.min.js"></script>
    <script type="text/javascript" src="js/nav.js"></script>

    
</body>
</html>


 <?php
        if(isset($_REQUEST['enviar_ch'])){
            $pass = md5($_REQUEST['password_ch']);
            $code = $_GET ['cod'];

            if($_REQUEST['password_ch'] == $_REQUEST['password_confirm_ch']){
                $sql="UPDATE user SET user_pass='$pass' WHERE user_pass_code='$code'";
                if(mysqli_query($connection, $sql)){
                    echo "<script>alert('Contraseña cambiada correctamente.');</script>";
                    echo "<script>
                        location.replace('index.php');
                      </script>";    
                }else{
                    echo "<script>alert('Error al cambiar la contraseña.');</script>";
                    echo "<script>
                        location.replace('index.php');
                      </script>";
                }
                
            }
            else if($_REQUEST['password_ch'] != $_REQUEST['password_confirm_ch']){
                echo "<script>alert('Las contraseñas no son iguales.');</script>";
            }
        }
	}
?>
