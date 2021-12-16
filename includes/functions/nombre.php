<?php
session_start();
$nombre=$_SESSION['nombre'];
$respuesta2 = array(
    'nombre' => $nombre
);

echo json_encode($respuesta2);