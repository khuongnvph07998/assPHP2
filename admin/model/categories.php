<?php

require_once 'pdo.php';
class categoryModel extends sqlQuery{
    function selectAllCate(){
        $sql = "SELECT*from categories";
        return $this->selectAll($sql);
    }
    // function selectOneCate(){
    //     $id=$_GET['id'];
    //     $sql = "SELECT name, image from categories where id=$id";
    //     return $this->selectOne($sql);
    // }
    function selectOneCate(){
        $id=$_GET['id'];
        $sql = "SELECT name, image from categories where id=$id";
        return $this->selectOne($sql);
    }
    function insertCate($name, $image){
        $sql = "INSERT into categories values(null, '$name', '$image')";
        return $this->executeSQL($sql);
    }
    function updateCate($name, $image){
        $id=$_GET['id'];
        $sql = "UPDATE categories SET  name='$name',image='$image' where id=$id";
        return $this->executeSQL($sql);
    }
    function deleteCate(){
    	$id=$_GET['id'];
    	$sql = "DELETE from categories where id = $id";
    	return $this->selectOne($sql);
    }
}

?>
