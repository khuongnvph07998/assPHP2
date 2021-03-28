
<?php 
    ob_start();
    $name_err = isset($_GET['name_err']) ? $_GET['name_err'] : "";
    $pass_err = isset($_GET['pass_err']) ? $_GET['pass_err'] : "";
    $repass_err = isset($_GET['repass_err']) ? $_GET['repass_err'] : "";

 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
            crossorigin="anonymous">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
            integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="crossorigin="anonymous"
            />
    </head>
    <body>
        <nav class="row">
            <nav class="col-2">
                <nav class="menu__sidebar">
                    <h3>Admin</h3>
                    <?php require_once 'view/layout/menu.php'; ?>
                </nav>
            </nav>
            <nav class="col-10">
                <nav class="header__sidebar">
                    <nav class="row">
                        <nav class="col-12">
                            <nav class="dropdown">
                                <button class="btn btn-submit dropdown-toggle"
                                    type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-user"></i>
                                </button>
                                <nav class="dropdown-menu"
                                    aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Tài khoản</a>
                                    <a class="dropdown-item" href="#">Đăng xuất</a>
                                </nav>
                            </nav>
                        </nav>
                    </nav>
                </nav>
                <section>
                    <nav class="show-admin">
                        <h1>Thêm Admin</h1>
                        <form action="" method="post"  enctype="multipart/form-data">
                            <div>
                                <label for="">Username</label>
                                <input type="text" class="form-control" name="username" id="name">
                                <?php if($name_err != ""):?>
                                    <p class="text-danger"><?php echo $name_err ?></p>
                                <?php endif ?>
                            </div>
                            <div>
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password">
                                <?php if($pass_err != ""):?>
                                    <p class="text-danger"><?php echo $pass_err ?></p>
                                <?php endif ?>
                            </div>
                            <div>
                                <label for="">RePassword</label>
                                <input type="password" class="form-control" name="password2">
                                <?php if($repass_err != ""):?>
                                    <p class="text-danger"><?php echo $repass_err ?></p>
                                <?php endif ?>
                            </div>
                            <div>
                                <label for="">Phone</label>
                                <input type="number" class="form-control" name="phone">
                            </div>
                            <div>
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div>
                                <input type="submit" name="btn_submit" value="Thêm" class="btn btn-primary">
                                <a href="?page=user&user=listUser" class="btn btn-danger">Hủy</a>
                            </div>
                        </form>
                    </nav>
                    </nav>
                </section>
            </nav>
        </nav>

        <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script> -->
    </body>
</html>