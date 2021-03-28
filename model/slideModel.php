
<?php

require_once 'admin/model/pdo.php';
class slideModel extends sqlQuery{
    function selectAllSlide(){
        $sql = "SELECT*from sliders";
        return $this->selectAll($sql);
    }
    // function selectOneProduct(){
    //     $id = $_GET['id'];
    //     $sql = "SELECT name, image, price, detail, cate_id from products where id=$id";
    //     return $this->selectOne($sql);
    // }
    
    // function insertPro($name, $image , $price, $detail, $cate_id){
    //     $sql = "INSERT into products values(null, '$name', '$image', $price, '$detail', '$cate_id')";
    //     return $this->executeSQL($sql);
    // }
    // function updatePro($name, $image , $price, $detail, $cate_id){
    //     $id=$_GET['id'];
    //     $sql = "UPDATE products set name='$name',
    //                                 image='$image', 
    //                                 price=$price, 
    //                                 detail='$detail', 
    //                                 cate_id='$cate_id'
    //                         where id=$id";
    //     return $this->executeSQL($sql);
    // }
    // function deletePro(){
    //     $id=$_GET['id'];
    //     $sql = "DELETE from products where id = $id";
    //     return $this->selectAll($sql);
    // }
}

?>

