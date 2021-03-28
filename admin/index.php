<?php


require_once 'controller/main.php';
require_once 'controller/categories.php';
require_once 'controller/products.php';
require_once 'controller/users.php';
require_once 'controller/slider.php';
$page = isset($_GET['page'])?$_GET['page']:"";
switch ($page) {
    case '':
        $ctr = new main();
        $ctr->index();
        break;
    
    case 'cate':
        $cate = isset($_GET['category'])?$_GET['category']:"";
        switch ($cate) {
            case 'listCategory':
                $ctrCate = new categoryControll();
                $ctrCate->listCategory();
                break;
            case 'insertCategory':
                $ctrCate = new categoryControll();
                $ctrCate->insertCategory();
                break;
            case 'updateCategory':
                $ctrCate = new categoryControll();
                $ctrCate->updateCategory();
                break;
            case 'deleteCategory':
                $ctrCate = new categoryControll();
                $ctrCate->deleteCategory();
                break;
            default:
            break;
        }
    
    case 'sp':
        $product = isset($_GET['product'])?$_GET['product']:"";
        switch ($product) {
            case 'listProduct':
                $ctr = new productControll();
                $ctr->listProduct();
                break;
            case 'insertProduct':
                $ctr = new productControll();
                $ctr->insertProduct();
                break;
            case 'updateProduct':
                $ctr=new productControll();
                $ctr->updateProduct();
                break;
            case 'deleteProduct':
                $ctr=new productControll();
                $ctr->deleteProduct();
                break;
        }
    case 'user':
        $user = isset($_GET['user'])?$_GET['user']:"";
        switch ($user) {
            case 'listUser':
                $ctrUser = new userControll();
                $ctrUser->listUser();
                break;
            case 'insertUser':
                $ctrUser = new userControll();
                $ctrUser->insertUser();
                break;
            case 'deleteUser':
                $ctrUser = new userControll();
                $ctrUser->deleteUser();
                break;
        }
        break;
    case 'slide':
        $slide = isset($_GET['slide'])?$_GET['slide']:"";
        switch ($slide) {
            case 'listSlide':
                $ctrSlide = new slideControll();
                $ctrSlide->listSlide();
                break;
            case 'insertSlide':
                $ctrSlide = new slideControll();
                $ctrSlide->insertSlide();
                break;
            case 'updateSlide':
                $ctrSlide = new slideControll();
                $ctrSlide->updateSlide();
                break;
            case 'deleteSlide':
                $ctrSlide = new slideControll();
                $ctrSlide->deleteSlide();
                break;
            default:
            break;
        }
        break;
    default:
        
        break;
}



?>