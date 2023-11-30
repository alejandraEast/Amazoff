<?php

session_start();

include('conexBD.php');



$buscador=$_POST["buscador"];
$buscador=trim($buscador);

$query="select * from  where  ='" . $ . "'";


