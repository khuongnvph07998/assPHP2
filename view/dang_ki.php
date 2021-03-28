<?php 

// session_start();
ob_start();
require_once 'controller/mainController.php';
 
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X-BROW | HOME</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
</head>

<body>
    <header>
        <?php require_once 'layout/header.php'; ?>
    </header>
    <br>
    <main>
        <!--Sản phẩm mới-->
        <nav class="container">
            <nav class="row">
                <nav class="col-12">
                    <nav class="col-12">
                        <nav class="main__title">
                            <h3>Đăng ký</h3>
                        </nav>
                    </nav>
                </nav>
            </nav>
            <nav class="form__product">
                <nav class="row">
                    <nav class="col-6 offset-3">
                        <form action="" method="post" name="frm" onsubmit="return register()">
                            <nav>
                                <label for="">Username</label>
                                <input type="text" class="form-control" name="username">
                            </nav>
                            <nav>
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password">
                            </nav>
                            <nav>
                                <label for="">Repassword</label>
                                <input type="password" class="form-control" name="password2">
                            </nav>
                            <nav>
                                <label for="">Phone</label>
                                <input type="number" class="form-control" name="phone">
                            </nav>
                            <nav>
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email">
                            </nav>
                            <br>
                            <nav>
                                <input type="submit" name="submit_register" value="Đăng kí" class="btn btn-primary">
                                <a href="?page=user&user=loginUser" class="btn btn-success">Đã có tk</a>
                            </nav>
                        </form>
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


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        function register(){
            name=/^(a-zA-Z0-9)$/;
            if(frm.username.value=="")
            {
                alert("Bạn chưa nhập tên đăng nhập. Vui lòng kiểm tra lại");     
                frm.username.focus();
                return false;
            }
            else if(frm.username.value.length<3)
            {
                alert("Tên đăng nhập quá ngắn. Vui lòng điền đủ họ tên");
                frm.username.focus();
                return false;
            }
            else if(frm.password.value=="")
            {
                alert("Bạn chưa nhập password. Vui lòng nhập password");
                frm.password.focus();
                return false;
            }
            else if(frm.password.value.length<6)
            {
                alert("Mật khẩu phải hơn 6 ký tự.");
                frm.password.focus();
                return false;
            }
            else if(frm.password2.value=="")
            {
                alert("Bạn chưa nhập lại password");
                frm.password2.focus();
                return false;
            }
            mk=frm.password.value;
            mk1=frm.password2.value;
            if(mk!=mk1)
            {
                alert("Password chưa đúng");
                frm.password.focus();
                return false;
            }
            else if(frm.phone.value=="")
            {
                alert("Bạn chưa nhập phone");
                frm.phone.focus();
                return false;
            }
            var ph=document.querySelector(".phone");
            ph.onblur = function(){
                var val= this.value;
                var dt=/(09|03)+([0-9]{8})\b/g;
                var check = dt.test(val);
                if(!check){
                    alert("Bạn nhập k đúng phone");
                }
            }
            // if(!dt.test(phone))
            // {
            //     alert("Bạn nhập k đúng phone");
            //     frm.phone.focus();
            //     return false;
            // }
            mail=frm.email.value;
            m=/^([A-z0-9])+[@][a-z]+[.][a-z]+[.]*([a-z]+)*$/;
            if(mail=="")
            {
                alert("Bạn chưa nhập email");
                mail.focus();
                return false;
            }
            if(!m.test(email))
            {
                alert("Bạn nhập sai email");
                frm.email.focus();
                return false;
            }
        }
    </script>
</body>

</html>