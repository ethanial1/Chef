<?php
class DB{
    private $host;
    private $db;
    private $user;
    private $pass;

    public function __construct()
    {
        $this->host = "beirmoae6wnbbif9kpqo-mysql.services.clever-cloud.com";
        $this->db = "beirmoae6wnbbif9kpqo";
        $this->user = "u9dtlbktibcwz5cc";
        $this->pass = "BAd9l8dQ6cjoIqUTdFbK";
    }

    function connect(){
        try{
            $pdo = new PDO('mysql:host=' .$this->host .';dbname='.$this->db, $this->user, $this->pass);

            return $pdo;
        }catch(PDOException $e){
            echo 'Error al conectarse '. $e->getMessage();
            exit;
        }
    }
}
?>