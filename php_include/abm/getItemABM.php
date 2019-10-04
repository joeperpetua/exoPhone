<?php
require('php_config/connect.php');
require('queries/query_basic.php');

    if (mysqli_num_rows($query_basic)>0) {
        while ($query=mysqli_fetch_assoc($query_basic)) {
?>



<div class="column is-full card">
    <span>
        <a href="view.php?id=<?php echo $query['id_dispositive'];?>" class="is-pulled-left"><?php echo $query['disp_brand']. ' ' .$query['disp_model'];?></a>
            <span class="is-pulled-right">
                <a href="modify.php?id=<?php echo $query['id_dispositive'];?>" class="button is-rounded"><i class="fas fa-pen"></i></a>
                &nbsp;
                <a href="abm.php?delete=<?php echo $query['id_dispositive'];?>" class="button is-rounded delete"><i class="fas fa-trash-alt"></i></a>

                
            </span>
    </span>
</div>



<?php
        }
    }else{
        echo "error al mostrar productos";
    }
?>
