<!DOCTYPE html>
<html lang="es">
<head>
    <title>Productos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/mystyles.css">
	<link rel="stylesheet" href="css/cards.css">
	<link rel="stylesheet" href="css/control.css">
	<link rel="stylesheet" href="css/filter.css">

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

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/jquery.localscroll/jquery.localscroll.js"></script>
    <script src="node_modules/jquery.scrollto/jquery.scrollto.js"></script>
    <script type="text/javascript" src="js/nav.js"></script>
</body>
</html>