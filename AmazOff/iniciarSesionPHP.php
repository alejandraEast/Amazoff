<?php
session_start();
include('conexBD.php');
function test_input($data) {
    $data = trim($data);
    $data = addslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    
  }
$login = test_input($_POST['login']);
$pass = test_input($_POST['pass']);


$query="select * from usuarios where login='" . $login . "' and pass='" . $pass . "'";
$resultado=mysqli_query($db,$query);
$num=mysqli_num_rows($resultado);
if($num>0){
    $fila=mysqli_fetch_array($resultado);
    $_SESSION['login']=$login;
    $_SESSION['privilegio']=$fila['privilegio'];
    header('location:index.php');

}
else{
    echo "<script>alert('Datos erroneos');history.back();<script>";
    exit;
}

?>