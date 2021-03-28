<?php 

// session_start();
require_once 'model/userModel.php';
require_once 'admin/model/pdo.php';

class userControll{
    function listUser(){
        // $id = $_GET['id'];
        $model = new userModel();
        $oneUser = $model->selectOneUser();
        require_once './view/tai_khoan.php';
        // header('Location: ?page=user&user=listUser');
    }
    function loginUser(){
        $model = new userModel();
        $allUser = $model->selectAllUser();
        require_once './view/dang_nhap.php';
        
        // if (isset($_POST['btn_submit'])) {
        //     $username = isset($_POST['username']) ? $_POST['username'] : "";
        //     $password = isset($_POST['password']) ? $_POST['password'] : "";
        //     if($username=="" && $password==""){
        //     // $name = $_POST['username'];
        //     // $password = $_POST['password'];
        //         if ($model->selectAllUser()) {
                    header('location: ?page=user&user=loginUser&msg=Username/Password trống');
        //         }
                
        //     }
        // }
    }
    function registerUser(){
        $model = new userModel();
        require_once './view/dang_ki.php';
        if (isset($_POST['submit_register'])) {
        	$id = $_GET['id'];
            $name = $_POST['username'];
            $password = password_hash($_GET['password'], PASSWORD_DEFAULT);
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $regexPhone = '/(09|03)+([0-9]{8})\b/g';

            if ($model->insertRegister($name, $password, $phone, $email, 0)) {
                header("Location: ?page=user&user=loginUser");
            }
            else{
                echo "<p style=\"color:red\">Error</p>";
            }

            // $Error="";

            // $regexName = '/^[a-zA-Z0-9\_]{3,20}$/';
            // $regexPhone = '/^[09|03]+([0-9]{8})\b$/';
            // // if ($name=="" & $name=$regexName) {
            // //     $Error .= "name-err=Tên sách không được để trống";
            // // }
            // if ($phone = $regexPhone) {
            //     $Error .= "phone-err=Số điện thoại không hợp lệ";
            // }


            // if ($model->insertUser($name, $filename)) {
            //     header("Location: ?page=user&user=listUser?id=$id");
            // }
            // else{
            //     echo "<p style=\"color:red\">Error</p>";
            // }
        }
    }
}


 ?>