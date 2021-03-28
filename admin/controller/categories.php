<?php
require_once './model/categories.php';
class categoryControll{
    function listCategory(){
        $model = new categoryModel();
        $allCate = $model->selectAllCate();
        require_once './view/category/category.php';
    }
    function insertCategory(){
        $model = new categoryModel();
        require_once './view/category/categoryAdd.php';
        if (isset($_POST['btn_submit'])) {
            $name = $_POST['name'];
            $image = $_FILES['image'];
            $filename = "";
            if ($image['size']>0) {
                $filename = uniqid().'-'.$image['name'];
                move_uploaded_file($image['tmp_name'], 'dist/img/category/' . $filename);
                $filename = 'dist/img/category/' . $filename;
                if ($model->insertCate($name, $filename)) {
                    header("Location: ?page=cate&category=listCategory");
                }
                else{
                    echo "<p style=\"color:red\">Error</p>";
                }
            }
        }
    }
    function updateCategory(){
        $model = new categoryModel();
        $oneCate = $model->selectOneCate();
        // $allCate = $model->selectAllCate();
        require_once './view/category/categoryUpdate.php';
        if (isset($_POST['btn_submit'])) {
            $name = $_POST['name'];
            $image = $_FILES['image'];
            $filename = "";
            if ($image['size']>0) {
                $filename .= $image['name'];
                move_uploaded_file($image['tmp_name'], 'dist/img/category/' . $filename);
                $filename = 'dist/img/category/' . $filename;
                if ($model->updateCate($name, $filename)) {
                    header("Location: ?page=cate&category=listCategory");
                }else{
                    echo "<p style=\"color:red\">Error</p>";
                }
            }
        }

        // $model = new productModel();
        // $oneProduct = $model->selectOneProduct();
        // require_once './view/product/productUpdate.php';
        // if (isset($_POST['btn_submit'])) {
        //     $id = $_GET['id'];
        //     $name = $_POST['name'];
        //     $price = $_POST['price'];
        //     $anhsp = $_FILES['image'];
        //     $detail = $_POST['detail'];
        //     $cate_id = $_POST['cate_id'];
        //     $filename = "";
        //     if ($anhsp['size']>0) {
        //         $filename .= $anhsp['name'];
        //         move_uploaded_file($anhsp['tmp_name'], 'dist/img/' . $filename);
        //         $filename = 'dist/img/' . $filename;
        //         if ($model->updatePro($name, $filename, $price, $detail, $cate_id )) {
        //             header("Location: ?page=sp&product=listProduct");
        //         }else{
        //             echo "<p style=\"color:red\">Error</p>";
        //         }
        //     }
        // }
    }
    function deleteCategory(){
        $model = new categoryModel();
        $allCate = $model->deleteCate();
        require_once 'view/category/category.php';
        header('location: ?page=cate&category=listCategory');
    }
}



?>