<?php
require('php_config/connect.php');
require('queries/query_user.php');

    if (mysqli_num_rows($query_user)>0) {
        while ($query_u=mysqli_fetch_assoc($query_user)) {
?>


<tr>
    <th><p> <?php echo $query_u['usuario'];?> </p> </th>
    <th><p> <?php echo $query_u['email'];?> </p></th>
    <th><p> <?php echo $query_u['fecha_registro'];?> </p></th>
    <th><p> <?php echo $query_u['ultima_conexion'];?> </p></th>
    <th><p> <?php echo $query_u['verificado'];?> </p></th>
</tr>

<?php
        }
    }else{
        echo "error al mostrar productos";
    }
?>
