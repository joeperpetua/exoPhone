<?php 
require_once("php_config/connect.php");
$cod = $_GET['cod'];
$sql = 'UPDATE user SET user_is_verified = "1" WHERE user_verification_code = "'.$cod.'";';
if (mysqli_multi_query($connection, $sql)) {
    echo "<script>alert('Se ingreso el equipo correctamente');</script>";
} else {
    echo "Error: <br>" . mysqli_error($connection);
}
header('Location: index.php');

?>