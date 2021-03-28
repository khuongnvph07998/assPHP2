<?php
require_once './model/slider.php';
class slideControll{
    function listSlide(){
        $model = new slideModel();
        $allSlide = $model->selectAllSlide();
        require_once './view/slider/slider.php';
    }
    function insertSlide(){
        $model = new slideModel();
        require_once './view/slider/slideAdd.php';
        if (isset($_POST['btn_submit'])) {
            $name = $_POST['name'];
            $image = $_FILES['image'];
            $filename = "";
            if ($image['size']>0) {
                $filename = uniqid().'-'.$image['name'];
                move_uploaded_file($image['tmp_name'], 'dist/img/slide' . $filename);
                $filename = 'dist/img/slide' . $filename;
                if ($model->insertSlide($name, $filename)) {
                    header("Location: ?page=slide&slide=listSlide");
                }
                else{
                    echo "<p style=\"color:red\">Error</p>";
                }
            }
        }
    }
    function updateSlide(){
        $model = new slideModel();
        $oneSlide = $model->selectOneSlide();
        require_once './view/slider/slideEdit.php';
        if (isset($_POST['btn_submit'])) {
            $name = $_POST['name'];
            $image = $_FILES['image'];
            $filename = "";
            if ($image['size']>0) {
                $filename .= $image['name'];
                move_uploaded_file($image['tmp_name'], 'dist/img/' . $filename);
                $filename = 'dist/img/' . $filename;
                if ($model->updateSlide($name, $filename)) {
                    header("Location: ?page=slide&slide=listSlide");
                }else{
                    echo "<p style=\"color:red\">Error</p>";
                }
            }
        }
    }
    function deleteSlide(){
        $model = new slideModel();
        $allSlide = $model->deleteSlide();
        require_once 'view/slider/slider.php';
        header('location: ?page=slide&slide=listSlide');
    }
}



?>