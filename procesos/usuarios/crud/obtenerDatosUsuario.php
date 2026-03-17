<?php
error_reporting(0);  // ← agrega esta línea, oculta los warnings
ini_set('display_errors', 0);  // ← y esta

$idUsuario = $_POST['idUsuario'];
include "../../../clases/Usuarios.php";
$Usuarios = new Usuarios(); 
echo json_encode($Usuarios->obtenerDatosUsuario($idUsuario));
