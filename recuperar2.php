<?php
    require_once("php_config/connect.php");
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
                        
                
                            <p class="pi1">Email:</p>
                            <div class="control">
                                <input type="email" placeholder="example@" name="email" class="input">
                            </div>
                            <br>
                            <input type="submit" class="button is-primary" name="enviar_pass" value="Enviar verificacion">
                            <br>    
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
        if (isset($_POST['enviar_pass'])){
            
            $email=$_POST['email'];
            $codigo=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 25);
            $msg = 'Se ha solicitado el cambio de contraseña para la cuenta vinculada con '.$email."<br>".
                    'Por favor valide su petición haciendo click en '.
                    "<a href='http://exophone.rf.gd/recuperar.php?cod=".$codigo."'style='text-decoration:none;'> este enlace</a>";
    
          $sql = "SELECT user_name, user_alias, user_mail FROM user WHERE user_mail='".$email."'";
          $consulta = mysqli_query($connection, $sql);
    
            while($registro=mysqli_fetch_assoc($consulta)){
                if ($email == $registro['user_mail']){
                    

                    // Edit this path if PHPMailer is in a different location.
                    require('./PHPMailer/PHPMailerAutoload.php');

                    $mail = new PHPMailer;
                    $mail->isSMTP();

                    /*
                    * Server Configuration
                    */

                    $mail->Host = 'smtp.gmail.com'; // Which SMTP server to use.
                    $mail->Port = 587; // Which port to use, 587 is the default port for TLS security.
                    $mail->SMTPSecure = 'tls'; // Which security method to use. TLS is most secure.
                    $mail->SMTPAuth = true; // Whether you need to login. This is almost always required.
                    $mail->Username = "mail@gmail.com"; // Your Gmail address.
                    $mail->Password = "pass"; // Your Gmail login password or App Specific Password.

                    /*
                    * Message Configuration
                    */

                    $mail->setFrom('mail@gmail.com', 'exoPhone'); // Set the sender of the message.
                    $mail->addAddress($email, $registro['user_alias']); // Set the recipient of the message.
                    $mail->Subject = 'Recuperacion contrasena de cuenta exophone.rf.gd'; // The subject of the message.

                    /*
                    * Message Content - Choose simple text or HTML email
                    */
                    

                    // ... or send an email with HTML.
                    $mail->msgHTML($msg);
                    $mail->IsHTML(true);
                    // Optional when using HTML: Set an alternative plain text message for email clients who prefer that.
                    $mail->AltBody = 'Se ha solicitado el cambio de contraseña para la cuenta vinculada con '.$email."<br>".
                    'Por favor valide su petición haciendo click en http://exophone.rf.gd/recuperar.php?cod='.$codigo; 
                    
    
                    $sql1='UPDATE user SET user_pass_code="'.$codigo.'" WHERE user_mail="'.$email.'"';
                    if(mysqli_query($connection, $sql1)){
                        
                    }else{
                        echo "<script>alert('Error al enviar la verificacion.');</script>";
                    }

                    if ($mail->send()) {
                        echo '<script>alert("Verificacion enviada exitosamente!")</script>';
                        header("location: index.php");
                    } else {
                        echo '<script>alert("Error: '.$mail->ErrorInfo.'")</script>';
                    }
    
                }
                else{
                    echo "<script>alert('email incorrecto.');</script>";
                }
            }
        }
    
?>
