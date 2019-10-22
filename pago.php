<!DOCTYPE html>
<html lang="es">
<head>
    <title>Productos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="imagenes/icon-low.png" sizes="16x16">

    <link rel="stylesheet" href="css/mystyles.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/pago.css">

	<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>
    
    <?php
        include('include/nav.php');
    ?>


  <section class="section">
    <form action="" class="form">
        
      <div class="field">
        <label class="label">Nombre y Apellido</label>
        <div class="control">
          <input class="input" type="text" placeholder="Nombre / Apellido">
        </div>
      </div>

      <div class="field">
        <label class="label">Tarjeta de credito</label>
        <div class="control">
          <input class="input is-success" type="text" placeholder="N de Tarj" value="">
        </div>
        
      </div>

      <div class="field">
        <label class="label">Domicilio</label>
        <div class="control">
          <input class="input is-danger" type="email" placeholder="Domicilio" value="">
        </div>
      </div>


      <div class="field">
        <label class="label">Notas adicionales</label>
        <div class="control">
          <textarea class="textarea" placeholder="Escriba aqui"></textarea>
        </div>
      </div>

      <div class="field is-grouped">
        <div class="control">
          <button class="button is-link">Finalizar compra</button>
        </div>
        <div class="control">
          <button class="button is-link is-light">Cancelar</button>
        </div>
      </div>
    </form>
  </section>
    

           

    <?php
        include('include/footer.html');
    ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/jquery.scrollto@2.1.2/jquery.scrollTo.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/jquery.localscroll@2.0.0/jquery.localScroll.min.js"></script>
    <script type="text/javascript" src="js/nav.js"></script>
</body>
</html>

<?php mysqli_close($connection); ?>