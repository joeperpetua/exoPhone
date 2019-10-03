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
                <a class="button is-rounded delete"><i class="fas fa-trash-alt"></i></a>

                <div class="modal modal-login">
                    <div class="modal-background login-bg"></div>
                        <div class="modal-card">
                            <header class="modal-card-head">
                                <p>Confirmar</p> 
                            </header>
                            <section class="modal-card-body">
                                <p>Desea eliminar el producto <?php echo $query['disp_brand']. ' ' .$query['disp_model'];?>?</p>

                                <div class="buttons">
                                    <input class="button is-secondary" type="submit" value="Si" name="submit">
                                    <a href="" class="button deny">No</a>

                                    <?php
                                        $id = $query['id_dispositive'];
                                        if (isset($_POST['submit'])) {
                                            $sql = "DELETE "
                                        }
                                    ?>
                                </div>
                            </section>
                        </div>
              </div>
            </span>
    </span>
</div>

<?php
        }
    }else{
        echo "error al mostrar productos";
    }
?>
