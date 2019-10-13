<?php

require("../../php_config/connect.php");

if(isset($_REQUEST["term"])){
    // Prepare a select statement
    $sql = "SELECT id_dispositives, disp_brand, disp_model FROM dispositives WHERE disp_brand LIKE ? OR disp_model LIKE ?";
    
    if($stmt = mysqli_prepare($connection, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "ss", $param_term, $param_term);
        
        // Set parameters
        $param_term = '%'. $_REQUEST["term"] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo '<a href="item.php?id='.$row['id_dispositives'].'">' . $row["disp_brand"] .' '. $row["disp_model"] . '</a>';
                }
            } else{
                echo "<a>No se encontraron coincidencias</a>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}
 
// close connection
mysqli_close($connection);
?>

