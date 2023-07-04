<?php
class db
{
    private $host = "localhost";
    private $dbname = "piedrasportsdb";
    private $user = "Administrador";
    private $password = "J1013105691o+";

    public function conexion()
    {
        try {
            $pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
            return $pdo;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
