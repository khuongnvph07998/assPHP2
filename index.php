<?php


// require_once 'view/layout/content.php';
require_once 'controller/mainController.php';
require_once 'controller/userController.php';
$page = isset($_GET['page'])?$_GET['page']:"";
switch ($page) {
    case '':
        $ctr = new productControll();
        $ctr->listProduct();
        break;
    case 'cate':
        $cate = isset($_GET['cate'])?$_GET['cate']:"";
        switch ($cate) {
            case '':
                $ctr = new categoryControll();
                $ctr->listCategory();
                break;        
        }
    case 'product':
        $product = isset($_GET['product'])?$_GET['product']:"";
        switch ($product) {
            case '':
                $ctr = new productControll();
                $ctr->sanPham();
                break;  
            case 'selectOne':
                $ctr = new productControll();
                $ctr->selectOnePro();
                break; 
            case 'listOnePro':
                $ctr = new productControll();
                $ctr->listOneProduct();
                break;        
        }
    case 'user':
        $user = isset($_GET['user'])?$_GET['user']:"";
        switch ($user) {
            case 'listUser':
                $ctr = new userControll();
                $ctr->listUser();
                break;
            case 'loginUser':
                $ctr = new userControll();
                $ctr->loginUser();
                break;
            case 'register':
                $ctr = new userControll();
                $ctr->registerUser();
                break;
        }
    default:
        echo "Đường dẫn lỗi";
        break;
}
// $cate = isset($_GET['page'])?$_GET['page']:"";
// switch ($cate) {
//     case '':
//         $ctr = new productControll();
//         $ctr->listCategory();
//         break;
//     default:
//         echo "Đường dẫn lỗi";
//         break;
// }



?>