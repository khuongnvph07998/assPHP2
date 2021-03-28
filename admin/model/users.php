<?php

require_once 'pdo.php';
class userModel extends sqlQuery{
    function selectAllUser(){
        $sql = "SELECT*from users";
        return $this->selectAll($sql);
    }
    // function selectOneCate(){
    //     $id=$_GET['id'];
    //     $sql = "SELECT*from categories where id=$id";
    //     return $this->selectAll($sql);
    // }
    function insertUser($username, $password, $phone, $email, $role_id){
        $sql = "INSERT into users values(null, '$username', '$password', '$phone', '$email', 1)";
        return $this->executeSQL($sql);
    }
    // function updateCate($name){
    //     $id=$_GET['id'];
    //     $sql = "UPDATE categories SET  name='$name' where id=$id";
    //     return $this->executeSQL($sql);
    // }
    function deleteUser(){
    	$id=$_GET['id'];
    	$sql = "DELETE from users where id = $id";
    	return $this->selectOne($sql);
    }
}

?>
