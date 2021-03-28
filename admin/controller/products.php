<?php
require_once './model/products.php';
require_once './model/categories.php';
class productControll{
    function listProduct(){
        $model = new productModel();
        $allProduct = $model->selectAllProduct();
        // $cateModel = new categoryModel();
        // $allCate = $cateModel->selectAllCate();
        require_once './view/product/products.php';
    }
    function insertProduct(){
        $model = new productModel();
        $cateModel = new categoryModel();
        $allCate = $cateModel->selectAllCate();
        require_once './view/product/productAdd.php';
        if (isset($_POST['btn_submit'])) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $image = $_FILES['image'];
            $editor1 = $_POST['editor1'];
            $cate_id = $_POST['categories'];
            $filename = "";
            if ($image['size']>0) {
                $filename = uniqid().'-'.$image['name'];
                move_uploaded_file($image['tmp_name'], 'dist/img/product/' . $filename);
                $filename = 'dist/img/product/' . $filename;
                if ($model->insertPro($name, $filename, $price, $editor1, $cate_id )) {
                    header("Location: ?page=sp&product=listProduct");
                }else{
                    echo "<p style=\"color:red\">Error</p>";
                }
            }
        }
    }
    function updateProduct(){
        $model = new productModel();
        $oneProduct = $model->selectOneProduct();
        $cateModel = new categoryModel();
        $allCate = $cateModel->selectAllCate();
        require_once './view/product/productUpdate.php';
        if (isset($_POST['btn_submit'])) {
            $id = $_GET['id'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $anhsp = $_FILES['image'];
            $editor1 = $_POST['editor1'];
            $cate_id = $_POST['cate_id'];
            $filename = "";
            if ($anhsp['size']>0) {
                $filename .= $anhsp['name'];
                move_uploaded_file($anhsp['tmp_name'], 'dist/img/product/' . $filename);
                $filename = 'dist/img/product/' . $filename;
                if ($model->updatePro($name, $filename, $price, $editor1, $cate_id )) {
                    header("Location: ?page=sp&product=listProduct");
                }else{
                    echo "<p style=\"color:red\">Error</p>";
                }
            }
        }
    }
    function deleteProduct(){
        $model = new productModel();
        $allProduct = $model->deletePro();
        require_once './view/product/products.php';
        header('location: ?page=sp&product=listProduct');
    }
}



?>