<!DOCTYPE html>
<html lang="es">
<head>
    <title>Productos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="imagenes/icon-low.png" sizes="16x16">

    <link rel="stylesheet" href="css/mystyles.css">
	<link rel="stylesheet" href="css/cards.css">
	<link rel="stylesheet" href="css/control.css">
    <link rel="stylesheet" href="css/filter.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/nav.css">

	<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>
    
    <?php
        include('include/nav.php');
    ?>



    
    <?php
        include('php_include/getProductPage.php');
    ?>
    

           

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