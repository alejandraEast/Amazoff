<?php
session_start();
// define variables and set to empty values



// if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $login = test_input($_POST['login']);
  $nombre = test_input($_POST['nombre']);
  $apellidos = test_input($_POST['apellidos']);
  $fechaNac=$_POST['fechaNac'];
  $fechaNacex=explode('/',$fechaNac);
 
  $fechaNac=implode('/',$fechaNac);
  $donde = $_POST['donde'];
  $donde = implode(', ', $donde);
  $email = $_POST['email'];
  $pass = test_input($_POST['pass']);


  
  echo "Nombre: " . $nombre . "<br>";
  echo "login: " . $login . "<br>";
  echo "apellidos: " . $apellidos . "<br>";
  echo "fechaNac: " . $fechaNac . "<br>";
  echo "donde: " . $donde . "<br>";
  echo "email: " . $email . "<br>";
  echo "pass: " . $pass . "<br>";

  
// }

function test_input($data) {
  $data = trim($data);
  $data = addslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  
}

if(!$nombre || !$apellidos || !$login || !$pass){
  echo "<script>alert('Faltan datos');history.back();<script>";
  exit;
}


$patron_email="/^([0-9a-z]+)([0-9a-z\.-_]+)@([0-9a-z\.-_]+)\.([0-9a-z]+)$/";
if (!preg_match($patron_email,$email)) {
  $emailerr = "Invalid Email";
  echo "<script>alert('Email incorrecto');history.back();<script>";
  exit;
}



include('conexBD.php');

$query1="select * from usuarios where login ='" . $login . "'";
$resultado1=mysqli_query($db,$query1);
$num=mysqli_num_rows($resultado1);
echo "<br>" . $num. "<br>";
if($num>0){
    echo "<script>alert('login ya existe');history.back();</script>";
    exit;
}
else{
$query="insert into usuarios values ('".$login."','".$pass."','".$nombre."','".$apellidos."','".$fechaNac."','C','".$donde."','".$email."')";
// echo "<br>" . $query . "<br>";
$resultado=mysqli_query($db,$query);
echo "<br>" . $resultado . "<br>";
if($resultado){
    $_SESSION['login']=$login;
    $_SESSION['privilegio']='C';
    header('location:index.php');
}
else
    echo "sesion no creada";

}



?>