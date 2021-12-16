<?php
$password = $_POST['contraseña'];

$opciones = array(
    'cost'=> 10
);

    if(password_verify($password,'$2y$10$mZ0QmBnKooA.fy/ZHScO3elOIH2Tr5Xxlz28bLHteDtSld9HC1fxu') || password_verify($password,'$2y$10$KmNIc1QPunW/KnKAnTDdDeAGNjOuXVWWQruGL467A/Hk0ivhdhAKW')){
        session_start();
        $_SESSION['login'] = true;
            $respuesta=array(
                'respuesta'=> 'correcto',
                'password' => $hash_password,
            );
        
    }else{
        $respuesta=array(
            'respuesta'=> 'incorrecto',
            );
    }


echo json_encode($respuesta);