<?php
class db
{
    private $host = "localhost";
    private $dbname = "piedrassportsdb";
    private $user = "root";
    private $password = "";
    private $puerto = "3307";

    public function conexion()
    {
        try {
            $pdo = new PDO("mysql:host = $this->host;port=$this->puerto;dbname =$this->dbname", $this->user, $this->password);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
