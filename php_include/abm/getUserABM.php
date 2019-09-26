<?php
require('php_config/connect.php');
require('queries/query_user.php');

    if (mysqli_num_rows($query_user)>0) {
        while ($query_u=mysqli_fetch_assoc($query_user)) {
?>



<div class="column is-full card">
    <span>
        <a href="user_view.php?id=<?php echo $query_u['id_user'];?>" class="is-pulled-left"><?php echo $query_u['usuario'] .' ('. $query_u['email'] .')';?></a>
            <span class="is-pulled-right">
                <a href="user_modify.php?id=<?php echo $query_u['id_user'];?>" class="button is-rounded"><i class="fas fa-pen"></i></a>
                &nbsp;
                <a href="" class="button is-rounded"><i class="fas fa-trash-alt"></i></a>
            </span>
    </span>
</div>

<?php
        }
    }else{
        echo "error al mostrar productos";
    }
?>
