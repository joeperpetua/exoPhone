<?php

if (isset($_SESSION['user'])) {
    echo "<script>
          console.log('sesion iniciada');
          var session = 1;
          var user = '".$_SESSION['user']."';
          console.log('".$_SESSION['id_user']."');
        </script>"; 

  $sqlV = "SELECT user_is_verified FROM user WHERE id_user =".$_SESSION['id_user'];
  $queryV = mysqli_query($connection,$sqlV);

  $queryconsulta = mysqli_fetch_assoc($queryV);
  if($queryconsulta["user_is_verified"] == 0){

    echo '<div class="notification is-danger">
            <button class="delete"></button> 
            Por favor verifique su cuenta
          </div>';
  }

}else {
    echo "<script>
          console.log('sesion no iniciada');
          var session = 0;
        </script>";
  }

  ?>