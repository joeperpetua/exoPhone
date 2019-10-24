

<form action="" method="post">

    <?php
        if(isset($_COOKIE['user'])){
            echo '<div>
                    <label class="label">Nombre de usuario</label>
                    <input name="user" type="text" class="input" placeholder="@userexample" value="'. $_COOKIE['usuario'] .'" required>
                  </div><br>';
        }else{
            echo '<div>
                    <label class="label">Nombre de usuario</label>
                    <input name="user" type="text" class="input" placeholder="@userexample" required>
                  </div><br>';
        }
    ?>

    <div class="field">
        <label class="label">Contraseña</label>
        <input type="password" name="password" placeholder="password" class="input" pattern=".{6,}">
    </div>

    <div class="field">
        <label class="checkbox">
            <input type="checkbox" class="checkbox">Recordarme
        </label>
    </div>

    <div class="field">
        <label class="label"> <a href="recuperar2.php">Olvide mi contrasenia</a> </label>
    </div>

    <div class="field"> 
        <button type="submit" name="entrar" class="button" name="entrar">Iniciar Sesion</button>
    </div>
</form>


<?php 
  if (isset($_REQUEST['entrar'])) {
    $use = $_REQUEST['user'];
    $pass = md5($_REQUEST['password']);
    

    $sql = "SELECT id_user, user_alias, user_pass FROM user where user_alias = '$use' and user_pass = '$pass'";
    $consulta = mysqli_query($connection,$sql);
 
    $registro = mysqli_fetch_assoc($consulta);
 
    if ($use == $registro['user_alias'] && $pass == $registro['user_pass']) {
        session_start();
        $_SESSION['user'] = $use;
        $_SESSION['id_user'] =  $registro['id_user'];
        echo "<script>
            alert('".$_SESSION['id_user']."');
          location.replace('index.php');
        </script>";
    }
  }
?>