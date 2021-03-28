<?php 
    ob_start();
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
                        <h1>Danh mục</h1>
                        <a href="?page=slide&slide=insertSlide" class="btn btn-primary">Thêm mới</a>
                        <table border="1px" style="text-align:center">
                            <thead>
                                <tr>
                                    <th width="50">Stt</th>
                                    <th width="200">Name</th>
                                    <th width="00">Ảnh</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($allSlide as $key=>$slide): ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?=$slide['name'] ?></td>
                                    <td><img src="<?=$slide['image']?>" style="margin: 10px" width="400px" alt=""></td>
                                    <td>
                                        <a href="?page=slide&slide=updateSlide&id=<?=$slide['id']?>" class="btn btn-warning">Sửa</a>
                                        <a onclick="return deleteSlide()" href="?page=slide&slide=deleteSlide&id=<?=$slide['id']?>" class="btn btn-danger">Xóa</a>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </nav>
                </section>
            </nav>
        </nav>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
        <script>
            function deleteSlide() {
                var conf = confirm('Xác nhận xóa!');
                return conf;
            }
        </script>
    </body>
</html>