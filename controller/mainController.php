<?php
session_start();
require_once 'model/productModel.php';
require_once 'model/slideModel.php';
require_once 'model/userModel.php';
require_once 'admin/model/pdo.php';
class mainController{
    function showNew(){
        require_once './view/index.php';
    }
}
class productControll {
    function listProduct(){
        $model = new productModel();
        $allProduct = $model->selectAllNew();
        $modelSlide = new slideModel();
        $allSlide = $modelSlide->selectAllSlide();
        require_once './view/index.php';
    }
    function sanPham(){
        $model = new productModel();
        $OneNew = $model->selectOneNew();
        require_once './view/san_pham.php';
    }
    function selectOnePro(){
        // $id=$_GET['id'];
        $model = new productModel();
        $listOnePro = $model->selectOneProduct();
        $allProduct = $model->selectAllNew();
        require_once './view/chi_tiet_sp.php';
    }
    // function listOneProduct(){
    //     $model = new productModel();
    //     $oneProduct = $model->listOneProduct();
    //     require_once './view/chi_tiet_sp.php';
    // }
}
class categoryControll{
    function listCategory(){
        $modelCate = new categoryModel();
        $modelPro = new productModel();
        $allCate = $modelCate->selectAllCategory();
        $allProduct = $modelPro->selectAllNew();
        require_once './view/san_pham.php';
    }
}
// class slideControll{
    // $modelSlide = new slideModel();
    // $allSlide = $modelSlide->selectAllSlide();
    // // function listSlide(){
    // //     $modelSlide = new slideModel();
    // //     // $modelPro = new productModel();
    // //     $allSlide = $modelSlide->selectAllSlide();
    // //     // $allProduct = $modelPro->selectAllNew();
    //     require_once './view/index.php';
    // }
// }
// class userControll{
//     function listUser(){
//         $model = new userModel();
//         $allUser = $model->selectAllUser();
//         require_once './view/tai_khoan.php';
//     }
//     function loginUser(){
//         $model = new userModel();
//         // $allUser = $model->selectAllUser();
//         require_once './view/dang_nhap.php';
//         if (isset($_POST['btn_submit'])) {
//             $name = $_GET['username'];
//             $password = $_GET['password'];
//             $Error = "";

//             if ($name == "") {
//                 $Error.="name-err=Tên không được để trống";
//             }elseif($password==""){
//                 $Error.='password-err=Password không được để trống';
//             }
//         }
//     }
//     function registerUser(){
//         $model = new userModel();
//         require_once './view/dang_ki.php';
//         if (isset($_POST['submit_register'])) {
//             $name = $_POST['name'];
//             $password = password_hash($_GET['password'], PASSWORD_DEFAULT);
//             $password2 = $_GET['repw'];
//             $phone = $_POST['phone'];
//             $email = $_POST['email'];
//             $role_id = $_POST['role_id'];
            

//             // $Error="";

//             // $regexName = '/^[a-zA-Z0-9\_]{3,20}$/';
//             // $regexPhone = '/^[09|03]+([0-9]{8})\b$/';
//             // // if ($name=="" & $name=$regexName) {
//             // //     $Error .= "name-err=Tên sách không được để trống";
//             // // }
//             // if ($phone = $regexPhone) {
//             //     $Error .= "phone-err=Số điện thoại không hợp lệ";
//             // }


//             // if ($model->insertUser($name, $filename)) {
//             //     header("Location: ?page=user&user=listUser");
//             // }
//             // else{
//             //     echo "<p style=\"color:red\">Error</p>";
//             // }
//         }
//     }
// }



?>