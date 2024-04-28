<?php
    class Con{
    //Parameters for PostgreSQL
    public $host = "localhost";
    public $bd = "hw";
    public $port = "5432";
    public $user = "postgres";
    public $pass = "qwerqwer";
    public $driver = "pgsql";
    public $conn;

    public static function getConn(){
        try {
            $con = new Con();
            $con->conn = new PDO("{$con->driver}:host={$con->host}; port={$con->port}; 
            dbname={$con->bd}", $con->user, $con->pass);
            $con->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //return $conn->connect;
        echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
