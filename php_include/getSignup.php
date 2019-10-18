<form action="" method="post">
    <div class="field">
        <label class="label">Nombre de usuario</label>
        <input type="text" placeholder="user" name="user" class="input" required>
    </div>

    <div class="field">
        <label class="label">Correo electronico</label>
        <input type="email" placeholder="example@" name="email" class="input" required>
    </div>

    <div class="field">
        <label class="label">Nombres</label>
        <input type="text" name="name" class="input" required>
    </div>

    <div class="field">
        <label class="label">Apellidos</label>
        <input type="text" name="surname" class="input" required>
    </div>

    <div class="field">
        <label class="label">Domicilio</label>
        <input type="text" name="adress" class="input" required>
    </div>

    <div class="field">
        <label class="label">Contrasenia</label>
        <input type="password" name="pass" placeholder="password" class="input" pattern=".{6,}" required>
    </div>

    <div class="field">
        <label class="label">Repetir contrasenia</label>
        <input name="confirmPass" type="password" class="input" placeholder="confirm password">
    </div>

    <div class="field"> 
        <button class="button" type="submit" name="enviar">Registrarse</button>
    </div>
</form>


<?php 
if (isset($_REQUEST['enviar'])) {
	$user = $_REQUEST['user'];
	$email = $_REQUEST['email'];
    $pass = md5($_REQUEST['pass']);
    $confirmPass = md5($_REQUEST['confirmPass']);

    $name = $_REQUEST['name'];
    $surname = $_REQUEST['surname'];
    $adress = $_REQUEST['adress'];
	
    $codigo=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 15);
    $msg = 'Se ha registrado a'."<a href='http://www.exophone.rf.gd/' style='text-decoration:none;'> Mercado exoPhone </a> con el usuario ".$user."\r\n\n".
        'Por favor valide su registro haciendo click en'. "<a href='http://www.exophone.rf.gd/verificar.php?cod=".$codigo."'style='text-decoration:none;'> este enlace</a>";
        
	
	$fecha_actual= date("Y/m/d");

	if ($pass === $confirmPass) {
		/*ACA SE AGREGA EN LA BDD LO INGRSADO EN EL FORMULARIO DE REGISTRO, INCLUYENDO LA FECHA ACTUAL JEJE*/
		$sql = "INSERT INTO user (user_alias, user_mail, user_pass, user_name, user_surname, user_adress, user_last_con, user_signup, user_is_verified, user_verification_code, user_pass_code) 
        VALUES ('$user', '$email', '$pass', '$name', '$surname', '$adress', '$fecha_actual', '$fecha_actual', '0', '$codigo', '')";

		mysqli_query($connection,$sql);
        

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
        $mail->Password = "password"; // Your Gmail login password or App Specific Password.

        /*
        * Message Configuration
        */

        $mail->setFrom('mail@gmail.com', 'exoPhone'); // Set the sender of the message.
        $mail->addAddress($email, $name); // Set the recipient of the message.
        $mail->Subject = 'Verificacion de cuenta exophone.rf.gd'; // The subject of the message.

        /*
        * Message Content - Choose simple text or HTML email
        */
        

        // ... or send an email with HTML.
        $mail->msgHTML($msg);
        $mail->IsHTML(true);
        // Optional when using HTML: Set an alternative plain text message for email clients who prefer that.
        $mail->AltBody = 'Se ha registrado a Mercado exoPhone con el usuario '.$user.'\r\n\n
                        Por favor valide su registro ingresando en http://www.exophone.rf.gd/verificar.php?cod='.$codigo; 


        if ($mail->send()) {
            echo '<script>alert("Usuario registrado exitosamente!")</script>';
        } else {
            echo '<script>alert("Error: '.$mail->ErrorInfo.'")</script>';
        }


	} 
	else{
		echo "Las contraseñas no son iguales.";
	}
}

?>