<?php
require_once "./exp/config/Conn.php";
class Exp extends Conn{

    public static function shData(){
        try{
        $sql = "SELECT * FROM expediente";
        $stmt = Conn::getConn()->prepare($sql);
        $stmt->execute();
        $res = $stmt->fetchAll();
        return $res;
        }catch(PDOException $e){
            $e->getMessage();
        }
    }

    public static function getData($idexp){
        try{
            $sql = "SELECT * FROM expediente WHERE idexp = :idexp";
            $stmt = Conn::getConn()->prepare($sql);
            $stmt->bindValue(":id", $idexp);
            $stmt->execute();
            $res = $stmt->fetch();
            return $res;
        } catch(PDOException $e){
            $e->getMessage();
        }
    }

    public static function addData($data){
        try{
            $sql = "INSERT INTO expediente (idexp, dnte, dndo, ofen, desch, fden, fsuc) VALUES (:idexp, :dnte, :dndo, :ofen, :desch, :fden, :fsuc)";
            $stmt = Conn::getConn()->prepare($sql);
            $stmt->bindValue(":dnte", $data['dnte']);
            $stmt->bindValue(":dndo", $data['dndo']);
            $stmt->bindValue(":ofen", $data['ofen']);
            $stmt->bindValue(":desch", $data['desch']);
            $stmt->bindValue(":fden", $data['fden']);
            $stmt->bindValue(":fsuc", $data['fsuc']);
            $stmt->execute();
            return true;
        } catch(PDOException $e){
            $e->getMessage();
        }
    }

    public static function editData($data){
        try{
            $sql = "UPDATE expediente SET dnte = :dnte, dndo = :dndo, ofen = :ofen, desch = :desch, fden = :fden, fsuc = :fsuc WHERE idexp = :idexp";
            $stmt = Conn::getConn()->prepare($sql);
            $stmt->bindValue(":dnte", $data['dnte']);
            $stmt->bindValue(":dndo", $data['dndo']);
            $stmt->bindValue(":ofen", $data['ofen']);
            $stmt->bindValue(":desch", $data['desch']);
            $stmt->bindValue(":fden", $data['fden']);
            $stmt->bindValue(":fsuc", $data['fsuc']);
            $stmt->execute();
            return true;
        } catch(PDOException $e){
            $e->getMessage();
        }
    }


    public static function delData($idexp){
        try{
            $sql = "DELETE FROM expediente WHERE idexp = :idexp";
            $stmt = Conn::getConn()->prepare($sql);
            $stmt->bindValue(":idexp", $idexp);
            $stmt->execute();
            return true;
        } catch(PDOException $e){
            $e->getMessage();
        }
    }
}
?>