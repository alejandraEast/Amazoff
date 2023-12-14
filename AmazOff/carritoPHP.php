<?php
session_start();

@$id_prod=test_input($_POST['id_prod']);

function test_input($id_prod) {
    $id_prod = trim($id_prod);
    $id_prod = addslashes($id_prod);
    $id_prod = htmlspecialchars($id_prod);
    return $id_prod;
    
  }

include('conexBD.php');
// $query = "select * from productos where id_prod ='$id_prod'";
//echo $query;
if($_SESSION['carrito'][$id_prod])
    $_SESSION['carrito'][$id_prod]++;
else
    $_SESSION['carrito'][$id_prod]=1;    
header('location: index.php');
    ?>
