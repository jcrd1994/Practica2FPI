<?php
$sUser = $_GET["user"];
$sPass = $_GET["pass"];
$sResponse = "";

if ($sUser == "admin" && $sPass == "admin") {
  $sResponse = "Ok";
} else {
  $sResponse = "Usuario o Contrasena incorrecto";
}

echo json_encode($sResponse);




 ?>
