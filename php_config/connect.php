<?php

$connection = mysqli_connect("localhost","root","") or DIE ("error: ".mysqli_connect_errno($connection));
$db = mysqli_select_db($connection, "tienda2") or DIE ("Error: ".mysqli_error($connection));
?>

