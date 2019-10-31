<?php
require('php_config/connect.php');


session_start();
if (isset($_SESSION['user'])) {
    echo "<script>
          console.log('sesion iniciada');
          var session = 1;
          var user = '".$_SESSION['user']."';
          console.log('".$_SESSION['id_user']."');
        </script>"; 

  $sqlV = "SELECT user_is_verified FROM user WHERE id_user =".$_SESSION['id_user'];
  $queryV = mysqli_query($connection,$sqlV);

  $queryconsulta = mysqli_fetch_assoc($queryV);
  if($queryconsulta["user_is_verified"] == 0){

    echo '<script>
            var $popUp = document.getElementById("popup");
            $popUp.classList.add("notification");
            $popUp.classList.add("is-danger");
            $popUp.innerHTML = "Por favor verifique su cuenta.";
          </script>';
  }

}else {
    echo "<script>
          console.log('sesion no iniciada');
          var session = 0;
        </script>";
  }
 

?>

<nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation" id="scroll">

        <div class="navbar-brand">
          <a class="navbar-item" href="index.php">
            <img src="imagenes/icon.png">
          </a>
  
          <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
      </div>
  
      <div class="navbar-menu" id="navMenu">
  
        <div class="navbar-start">
          <a class="navbar-item" href="productos.php">Productos</a>  
          <a class="navbar-item" href="smart.php">Herramienta de selección</a> 
          <a class="navbar-item" href="#contact">Contacto</a>
          <span class="navbar-item search-box"><input type="text" class="input" autocomplete="off" placeholder="Buscar producto"> <div class="result"></div></span>
        </div>

        
  
        <div class="navbar-end">
            <div class="navbar-item">


              <a href="carrito.php" class="button"><i class="fas fa-shopping-cart"></i></a>
              &nbsp;
              <a class="button is-primary login-btn"><i class="fas fa-user" onclick="openProfile()"></i></a>
              &nbsp;
              <?php
                if (isset($_SESSION['user'])) { ?>
                  <a class="button" href="salir.php">Cerrar Sesion</a>
              <?php } ?>

              <div class="modal modal-login">
                <div class="modal-background login-bg"></div>
                  <div class="modal-card">
                    <header class="modal-card-head">
                      <div class="tabs is-toggle" id="tabs">
                        <ul>
                          <li class="login-tab is-active" data-tab="1"><a>Iniciar Sesion</a></li>
                          <li class="signup-tab" data-tab="2"><a>Registrarse</a></li>
                        </ul>
                      </div>
                    </header>
                    <section class="modal-card-body" id="body">
                      <div class="container is-active" data-content="1">
                        <?php
                          include("php_include/getLogin.php");
                        ?>
                      </div>

                      <div class="container" data-content="2">
                        <?php
                          include("php_include/getSignup.php");
                        ?>
                      </div>

                      
                    </section>
                </div>
              </div>
              </div>
            </div>
        </div>
  
      </div>  
  </nav>
  