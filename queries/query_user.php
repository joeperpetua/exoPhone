<?php 
require('php_config/connect.php');
$sql_con=
"SELECT id_user, usuario, email, verificado, ultima_conexion, fecha_registro FROM user ORDER BY fecha_registro DESC";



$query_user=mysqli_query($connection,$sql_con);
 ?>