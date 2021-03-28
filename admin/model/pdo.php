<?php

class sqlQuery{
    public $conn;
    function __construct(){
        $this->conn = new PDO(
            "mysql:host=localhost;dbname=assphp2;charset=utf8","root", ""
        );
    }
    function selectAll($sql){
        return $this->conn->query($sql);
    }
    function selectOne($sql){
        $result=$this->conn->query($sql);
        return $result->fetch();
    }
    function executeSQL($sql){
        $result=$this->conn->prepare($sql);
        return $result->execute();
    }
}



?>