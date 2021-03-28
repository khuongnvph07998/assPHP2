<?php
require_once './model/users.php';
class userControll{
    function listUser(){
        $model = new userModel();
        $allUser = $model->selectAllUser();
        require_once './view/users/users.php';
    }
    function insertUser(){
        $model = new userModel();
        require_once './view/users/userAdd.php';
        if (isset($_POST['btn_submit'])) {
            $username = $_POST['username'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $password2 = password_hash($_POST['password2'], PASSWORD_DEFAULT);
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            if ($username=="") {
                header('location: ?page=user&user=insertUser&name_err=Name trống');
                // echo "name_err=".$password;
            }
            // elseif ($password==password_hash("", PASSWORD_DEFAULT)) {
            //     header('location: ?page=user&user=insertUser&pass_err=Pass trống');
            // }
            elseif ($password2=="") {
                header('location: ?page=user&user=insertUser&repass_err=Nhập pass');
            }
            elseif($password2 != $password){
                header('location: ?page=user&user=insertUser&repass_err=Nhập lại pass');
            }
            else if ($model->insertUser($name, $password, $phone, $email, $role_id)) {
                header("Location: ?page=user&user=listUser");
            }else{
                echo "<p style=\"color:red\">Error</p>";
            }
        }
    }
    // function updateCategory(){
    //     $model = new categoryModel();
    //     $allCate = $model->selectOneCate();
    //     require_once './view/category/categoryUpdate.php';
    //     if (isset($_POST['btn_submit'])) {
    //         $tensp = $_POST['name'];
    //         if ($tensp=="") {
    //             echo "<p style=\"color:red\">Điền tên</p>";
    //         }
    //         else if ($model->updateCate($tensp)) {
    //             header("Location: ?page=cate&category=listCategory");
    //         }else{
    //             echo "<p style=\"color:red\">Error</p>";
    //         }
    //     }
    // }
    function deleteUser(){
        $model = new userModel();
        $allUser = $model->deleteUser();
        require_once 'view/users/users.php';
        header('location: ?page=user&user=listUser');
    }
}



?>