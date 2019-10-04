<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
                include('php_include/abm/getItemABM.php');
                $id = $_REQUEST['delete'];
                if($id){
                   
                    
                    $sql_con=
                        "SELECT p.id_product, p.id_dispositive, p.listed,
                        d.disp_brand, d.disp_model
                        FROM products p

                        LEFT JOIN dispositives d ON p.id_dispositive = d.id_dispositives
                        WHERE id_product = '". $id ."';";



                        $query_del=mysqli_query($connection,$sql_con);

                    if (mysqli_num_rows($query_del)>0) {
                        while ($query=mysqli_fetch_assoc($query_del)) {
            ?>      
                    <div class="modal modal-delete is-active">
                    <div class="modal-background delete-bg"></div>
                        <div class="modal-card">
                            <header class="modal-card-head">
                                <p>Confirmar</p> 
                            </header>
                            <section class="modal-card-body">
                                <p>Desea eliminar el producto <?php echo $query['disp_brand']. ' ' .$query['disp_model'];?>?</p>

                                <div class="buttons">
                                    <form action="" method="post">
                                    <input class="button is-secondary" type="submit" value="Si" name="submit">
                                    <a href="abm.php" class="button deny">No</a>
                                    </form>

                                    <?php
                                        $id = $query['id_dispositive'];
                                        if (isset($_POST['submit'])) {
                                            $sql = "UPDATE products SET listed = '0' WHERE id_product = '".$id."';";
                                            
                                            if (mysqli_multi_query($connection, $sql)) {
                                                echo "<script>alert('Producto eliminado.');</script>";
                                                echo "<script>
                                                        location.replace('abm.php');
                                                    </script>";
                                            } else {
                                                echo "<script>alert('Error la eliminar producto. ".mysqli_error($connection)."');</script>";
                                            }
                                        }
                                    ?>
                                </div>
                            </section>
                        </div>
            </div>
        <?php        
            }
        }
    }
        ?>