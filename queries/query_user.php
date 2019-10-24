<?php 
require('php_config/connect.php');
$sql_con=
"SELECT id_user, user_alias, user_mail, user_name, user_surname, user_is_verified, user_last_con, user_signup, user_adress FROM user ORDER BY user_last_con DESC";



$query_user=mysqli_query($connection,$sql_con);
 ?>