<?php
require('php_config/connect.php');
require('queries/query_user.php');

    if (mysqli_num_rows($query_user)>0) {
        while ($query_u=mysqli_fetch_assoc($query_user)) {
?>


<tr>
    <th><p> <?php echo $query_u['user_alias'];?> </p> </th>
    <th><p> <?php echo $query_u['user_name'];?> </p> </th>
    <th><p> <?php echo $query_u['user_surname'];?> </p> </th>
    <th><p> <?php echo $query_u['user_adress'];?> </p> </th>
    <th><p> <?php echo $query_u['user_mail'];?> </p></th>
    <th><p> <?php echo $query_u['user_signup'];?> </p></th>
    <th><p> <?php echo $query_u['user_last_con'];?> </p></th>
    <th><p> <?php echo $query_u['user_is_verified'];?> </p></th>
</tr>

<?php
        }
    }else{
        echo "error al mostrar productos";
    }
?>
