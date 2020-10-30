<?php
    class userSesion{
        //iniciamos la sesión
        public function __construct()
        {
            session_start();
        }

        //asignamos al usuario
        public function setCurrentUser($user){
            $_SESSION['user'] = $user;
        }

        //asiganos al rol
        public function setCurrentRol($rol){
            $_SESSION['rol'] = $rol;
        }

        //asiganamos el id
        public function setCurrentId($id){
            $_SESSION['id'] = $id;
        }

        //obtener sus valores
        public function getCurrentUser(){
            return $_SESSION['user'];
        }

        public function getCurrentRol(){
            return $_SESSION['rol'];
        }

        public function getCurrentId(){
            return $_SESSION['id'];
        }

        //función para cerrar sesión
        public function closeSesion(){
            session_unset();
            session_destroy();
        }
    }

?>