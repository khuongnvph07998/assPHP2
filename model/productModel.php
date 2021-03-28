<?php

// require_once 'admin/model/pdo.php';
// class productModel extends sqlQuery{
//     function selectAllNew(){
//         $sql = "select*from products";
//         return $this->selectAll($sql);
//     }
//     // function selectOne(){
//     //     $id=$_GET['id'];
//     //     $sql = "SELECT name, image, price, detail, cate_id from products where id=$id";
//     //     return $this->selectOne($sql);
//     // }
//     function selectOneProduct(){
//         $id=$_GET['id'];
//         $sql = "SELECT* from products where id=$id";
//         return $this->selectOne($sql);
//     }
//     
// }
// class categoryModel extends sqlQuery{
//     function selectAllCategory(){
//         $sql = "select*from categories";
//         return $this->selectAll($sql);
//     }
// }

?>





<?php

require_once 'admin/model/pdo.php';
class productModel extends sqlQuery{
    function selectAllNew(){
        $sql = "SELECT*from products";
        return $this->selectAll($sql);
    }
    // function listOneProduct(){
    //     $id = $_GET['id'];
    //     $sql = "SELECT*from products where id = '$id' order by view desc limit 4";
    //     return $this->selectOne($sql);
    // }
    function selectOneProduct(){
        $id = $_GET['id'];
        $sql = "SELECT name, image, price, detail, cate_id from products where id=$id";
        return $this->selectOne($sql);
    }
    
    function insertPro($name, $image , $price, $detail, $cate_id){
        $sql = "INSERT into products values(null, '$name', '$image', $price, '$detail', '$cate_id')";
        return $this->executeSQL($sql);
    }
    function updatePro($name, $image , $price, $detail, $cate_id){
        $id=$_GET['id'];
        $sql = "UPDATE products set name='$name',
                                    image='$image', 
                                    price=$price, 
                                    detail='$detail', 
                                    cate_id='$cate_id'
                            where id=$id";
        return $this->executeSQL($sql);
    }
    function deletePro(){
        $id=$_GET['id'];
        $sql = "DELETE from products where id = $id";
        return $this->selectAll($sql);
    }
}
class categoryModel extends sqlQuery{
    function selectAllCategory(){
        $sql = "select*from categories";
        return $this->selectAll($sql);
    }
}

?>

