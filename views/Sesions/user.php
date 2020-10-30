<?php
    include('database.php');

    class User extends DB{
        private $id;
        private $user;
        private $clave;
        private $rol;

        //decirnos si existe un usuario - 
        public function userExist($user1, $clave1){
            $query = $this->connect()->prepare("select * from Usuarios where Clave = :clave and Nombre = :nombre ;");
            $query->execute(['clave' => $clave1, 'nombre' => $user1]);

            if($query->rowCount()){
                return true;
            }else{
                return false;
            }
        }

        //obtener los datos del usuario - nombre, clave, gustos etc.
        public function setUser($user, $clave){
            $query = $this->connect()->prepare("select * from Usuarios where Clave = :clave and Nombre = :nombre ;");
            $query->execute(['clave' => $clave, 'nombre' => $user]);

            foreach($query as $currectUser){
                $this->id = $currectUser['ID'];
                $this->clave = $currectUser['Clave'];
                $this->user = $currectUser['Nombre'];
                $this->rol = $currectUser['Rol'];
            }
        }

        //hacer accesibles las variable
        public function getId(){
            return $this->id;
        }
        public function getNombre(){
            return $this->user;
        }
        public function getRol(){
            return $this->rol;
        }
    }
?>