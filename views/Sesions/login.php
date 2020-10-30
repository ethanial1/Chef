<?php
    include('user.php');
    include('user_sesion.php');

    $user_sesion = new userSesion();
    $user = new User();

    if(isset($_SESSION['user'])){
        echo 'hay sesión';

    }else if(isset($_POST['nombre']) && isset($_POST['clave'])){
        $Nuser = $_POST['nombre'];
        $clave = $_POST['clave'];

        if($user->userExist($Nuser, $clave)){
            
            $user_sesion->setCurrentUser($Nuser);
            $user->setUser($Nuser,$clave);

            //obtenemos el id y rol del usuario
            $rol = $user->getRol();
            $id = $user->getId();
            
            //los asignamos
            $user_sesion->setCurrentRol($rol);
            $user_sesion->setCurrentId($id);

            header('Location: http://localhost:8888/Recetario/index.php?idx=1');
            die();
        }else{
            echo 'Error';
        }
    }else{
        echo 'no hay sesión';
    }