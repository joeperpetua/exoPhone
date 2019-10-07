<?php
require('php_config/connect.php');

$sql = "SELECT user_alias, user_mail, user_signup, user_name, user_surname, user_adress FROM user WHERE user_alias = '".$_REQUEST['user']."';";

$consulta=mysqli_query($connection, $sql);

$query=mysqli_fetch_assoc($consulta);

?>

<section class="section">
    <form action="" method="" class="form">
        <label class="label">Datos de la cuenta</label><br>

        <label class="label">Nombre de usuario</label>
        <input type="text" class="input" value="<?php echo $query['user_alias']; ?>" disabled>

        <label class="label">Correo electronico</label>
        <input type="text" class="input" value="<?php echo $query['user_mail']; ?>" disabled>
        
        <label class="label">Fecha de registro</label>
        <input type="text" class="input" value="<?php echo $query['user_signup']; ?>" disabled>
        <br>
        <br>
        <br>

        <label class="label">Datos Personales</label><br>

        <label class="label">Nombre</label>
        <input type="text" class="input" value="<?php echo $query['user_name']; ?>" disabled>

        <label class="label">Apellido</label>
        <input type="text" class="input" value="<?php echo $query['user_surname']; ?>" disabled>

        <label class="label">Domicilio</label>
        <input type="text" class="input" value="<?php echo $query['user_adress']; ?>" disabled>
    </form>


</section>

