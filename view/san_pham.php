<?php 

require_once 'controller/mainController.php';
require_once './aside/db.php';
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X-BROW | SHOP</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>
<body>
    <header>
        <?php require_once 'layout/header.php'; ?>
    </header>

    <main>
        <nav class="shop__text text-center">
            <h2>X-Brow</h2>
            <nav class="shop__text__options">
                <a href="index.php">Trang chủ</a>
                <i class="fa fa-chevron-right"></i>
                <a href="./san_pham.php">Sản phẩm</a>
            </nav>
        </nav>
        <nav class="container">
            <nav class="row">
                <!--Left-->
                <nav class="col-4">
                    <nav class="shop__cateName">
                        <h3>Danh mục</h3>
                        <?php foreach($allCate as $cate): ?>
                            <ul>
                                <li><a href="?page=cate&id=<?=$cate['id']?>"><?=$cate['name']?></a></li>
                            </ul>
                        <?php endforeach ?>
                    </nav>
                </nav>
                <!--End Left-->
                <!--Right-->
                <nav class="col-8">
                    <nav class="row">
                        <nav class="col-12">
                            <nav class="shop__productTitle">
                                <h3>Sản phẩm</h3>
                            </nav>
                        </nav>
                    </nav>
                    <nav class="form__product">
                        <nav class="row">
                            <?php foreach ($allProduct as $rows): ?>
                                <nav class="col-4">
                                    <nav class="main__product">
                                        <a href="./?page=product&product=selectOne&id=<?=$rows['id']?>">
                                            <img src="admin/<?= $rows['image'] ?>" height="280px" alt="">
                                        </a>
                                        <nav class="product__name">
                                            <a href="./?page=product&product=selectOne&id=<?=$rows['id']?>">
                                                <h5><?=$rows['name'] ?></h5>
                                            </a>
                                            <h6>
                                                <span><?= number_format($rows['price'],0,'','.') ?>đ</span>
                                            </h6>
                                        </nav>
                                        <nav class="product__cart">
                                            <button type="submit" class="btn btn-primary">Thêm giỏ hàng</button>
                                        </nav>
                                    </nav>
                                </nav>
                            <?php endforeach ?>
                        </nav>
                    </nav>
                </nav>
            </nav>
        </nav>
    </main>

    <footer>
        <nav class="container">
            <nav class="row">
                <nav class="col-3">
                    <nav class="footer__logo">
                        <a href=""><img src="img/logo.png" alt=""></a>
                    </nav>
                    <nav class="footer__add">
                        <p>Address: Trịnh Văn Bô</p>
                        <p>Email: <a href=""> khuongnvph07998@fpt.edu.vn</a></p>
                        <p>Phone: 0366178611</p>
                    </nav>
                </nav>
                <nav class="col-6">
                    <nav class="row">
                        <nav class="col-6">
                            <nav class="footer__about">
                                <h4>About</h4>
                                <p><a href="">About Us</a></p>
                                <p><a href="">About Our Shop</a></p>
                                <p><a href="">Secure Shopping</a></p>
                                <p><a href="">Delivery infomation</a></p>
                                <p><a href="">Privacy Policy</a></p>
                            </nav>
                        </nav>
                        <nav class="col-6">
                            <nav class="footer__about">
                                <h4>Top</h4>
                                <p><a href="">About Us</a></p>
                                <p><a href="">About Our Shop</a></p>
                                <p><a href="">Secure Shopping</a></p>
                                <p><a href="">Delivery infomation</a></p>
                                <p><a href="">Privacy Policy</a></p>
                            </nav>
                        </nav>
                    </nav>
                </nav>
                <nav class="col-3">
                    <nav class="footer__link">
                        <a href=""><i class="fab fa-facebook"></i></a>
                        <a href=""><i class="fas fa-envelope"></i></a>
                        <a href=""><i class="fab fa-instagram-square"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                    </nav>
                </nav>
            </nav>
        </nav>
    </footer>

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
</body>
</html>