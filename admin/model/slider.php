<?php

require_once 'pdo.php';
class slideModel extends sqlQuery{
    function selectAllSlide(){
        $sql = "SELECT*from sliders";
        return $this->selectAll($sql);
    }
    function selectOneSlide(){
        $id=$_GET['id'];
        $sql = "SELECT name, image from sliders where id=$id";
        return $this->selectOne($sql);
    }
    function insertSlide($name, $image){
        $sql = "INSERT into sliders values(null, '$name', '$image')";
        return $this->executeSQL($sql);
    }
    function updateSlide($name, $image){
        $id=$_GET['id'];
        $sql = "UPDATE sliders SET  name='$name' where id=$id";
        return $this->executeSQL($sql);
    }
    function deleteSlide(){
    	$id=$_GET['id'];
    	$sql = "DELETE from sliders where id = $id";
    	return $this->selectOne($sql);
    }
}

?>
