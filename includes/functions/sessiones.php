<?php

function usuario_autenticado() {
    if(!revisar_usuario() ){
        header('Location:ingresosala.php');
        exit();
    }
}
function revisar_usuario() {
    return isset($_SESSION['login']);
}
session_start();
usuario_autenticado();