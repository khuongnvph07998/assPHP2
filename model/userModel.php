<?php

require_once 'admin/model/pdo.php';
class userModel extends sqlQuery{
    function selectAllUser(){
        $sql = "select*from users";
        return $this->selectAll($sql);
    }
    function selectOneUser(){
        $id=$_GET['id'];
        $sql = "SELECT username, password, phone, email, role_id from users where id=$id";
        return $this->selectOne($sql);
    }
    // function selectOneUser(){
    //     $sql = "SELECT username, password, phone, email, role_id from users where id=?";
    //     return $this->selectOne($sql);
    // }

    function insertRegister($username, $password, $phone, $email, $role_id){
        $sql = "INSERT into users values(null, '$username', '$password', '$phone', '$email', 0)";
        return $this->executeSQL($sql);
    }
}

?>
