<?php
session_start();
// define variables and set to empty values



// if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $login = test_input($_POST['login']);
  $nombre = test_input($_POST['nombre']);
  $apellidos = test_input($_POST['apellidos']);
  $fechaNac=$_POST['fechaNac'];
  $fechaNacex=explode('/',$fechaNac);
 
    if(strlen($fechaNacex[0])==4){
        $anio=$fechaNacex[0];
        echo "soy el 0";
       
    }
    else if(strlen($fechaNac[1])==4){
        $anio=$fechaNacex[1];
        echo "soy el 1";
        
    }
    else if(strlen($fechaNac[2])==4){
        $anio=$fechaNacex[2];
        echo "soy el 2";
       
    }

    
  


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



$patron_email="/^([0-9a-z]+)([0-9a-z\.-_]+)@([0-9a-z\.-_]+)\.([0-9a-z]+)$/";
if (!preg_match($patron_email,$email)) {
  $emailerr = "Invalid Email";
 
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
echo "<br>" . $query . "<br>";
$resultado=mysqli_query($db,$query);
echo "<br>" . $resultado . "<br>";
if($resultado){
    echo "OK";
    $_SESSION['login']=$login;
    $_SESSION['privilegio']='C';

}
else
    echo "sesion no creada";

}



?>