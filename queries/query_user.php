<?php 
require('php_config/connect.php');
$sql_con=
"SELECT id_user, usuario, email, verificado FROM user";



$query_user=mysqli_query($connection,$sql_con);
 ?>