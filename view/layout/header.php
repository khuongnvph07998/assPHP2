<?php
require_once  './controller/userController.php';

?>


<style>

.dropbtn {
  background-color: #fff;
  color: black;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

</style>


<nav class="header__top">
            <nav class="container">
                <nav class="row">
                    <nav class="col-3">
                        <nav class="header__logo">
                            <a href="index.php"><img src="img/logo.png" alt=""></a>
                        </nav>
                    </nav>
                    <nav class="col-6">
                        <nav class="header__menu">
                            <?php require_once 'menu.php'?>
                        </nav>
                        <nav class="header__search">
                            <form action="" class="form-group">
                                <input type="text" placeholder="Search" class="form-control">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </form>
                        </nav>
                    </nav>
                    <nav class="col-3">
                        <nav class="header__user">
                            <nav class="row">
                                <nav class="col-2">
                                    <nav class="dropdown">
                                        <button class="dropbtn"><i class="fas fa-user"></i></button>
                                        <nav class="dropdown-content">
                                            <a class="dropdown-item" href="?page=user&user=listUser&id=<?=$oneUser['id']?>">Tài khoản</a>
                                            <a class="dropdown-item" href="?page=user&user=loginUser">Đăng nhập</a>
                                            <hr>
                                            <a class="dropdown-item" href="?page=user&user=register">Đăng kí</a>
                                        </nav>
                                    </nav>
                                </nav>
                                <nav class="col-2"> 
                                    <nav class="dropdown">
                                        <button class="dropbtn">
                                            <i class="fa fa-shopping-cart"></i>
                                            <!-- <span>0</span> -->
                                        </button>
                                        <nav class="dropdown-content">
                                            <a class="dropdown-item" href="">Giỏ hàng</a>
                                            <a class="dropdown-item" href="">Thanh toán</a>
                                        </nav>
                                    </nav>
                                </nav>
                                
                            </nav>
                        </nav>
                    </nav>
                </nav>
            </nav>
        </nav>