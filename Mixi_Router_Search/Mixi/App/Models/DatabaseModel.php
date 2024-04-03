<?php
namespace App\Models;
use PDOException;
use PDO;
class DatabaseModel{
    private $dbhost=DB_HOST;
    private $dbname=DB_NAME;    
    private $dbuser=DB_USER;
    private $dbpass=DB_PASS;
    private $conn;
    private $stmt;

    function __construct(){
        try {
        $this->conn = new PDO("mysql:host=".$this->dbhost.";dbname=".$this->dbname, $this->dbuser, $this->dbpass);
        // set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
        } catch(PDOException $e) {
        //echo "Connection failed: " . $e->getMessage();
        }
    }
    

    function get_all($sql){
        $this->stmt=$this->conn->prepare($sql);
        $this->stmt->execute();
        $this->stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $this->stmt->fetchAll();
    }

    function pdo_insert($sql){
        $sql_args = array_slice(func_get_args(), 1);
            $this->stmt=$this->conn->prepare($sql);
            $this->stmt->execute($sql_args); 
    }

    function pdo_execute($sql, ...$params)
    {
        try {
            $this->stmt = $this->conn->prepare($sql);
            $this->stmt->execute($params);
            $this->stmt->setFetchMode(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw $e;
        }
    }
    function pdo_query_value($sql, ...$params)
    {
        try {
            $this->stmt = $this->conn->prepare($sql);
            $this->stmt->execute($params);
            return $this->stmt->fetchColumn();
        } catch (PDOException $e) {
            throw $e;
        }
    }
    
    function get_one($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
           $this->stmt=$this->conn->prepare($sql);
           $this->stmt->execute($sql_args);
           $this->stmt->setFetchMode(PDO::FETCH_ASSOC);
           return $this->stmt->fetch();
        }
        catch(PDOException $e){
            throw $e;
        }
    }

    function pdo_execute_id($sql, ...$params)
    {
        try {
            $this->stmt = $this->conn->prepare($sql);
            $this->stmt->execute($params);
            return $this->conn->lastInsertId();
        } catch (PDOException $e) {
            throw $e;
        }
    }

    function __destruct(){
        unset($this->conn);
    }
}