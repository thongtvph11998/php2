<?php
require_once './model/sliderModel.php';
require_once './helpers/mediaHelper.php';
class sliderController{
function showSlider(){
    if (isset($_GET['action'])) {
        echo '<script>window.location.href = "http://localhost:8077/PHP2/ASS/admin/?page=slider"</script>';
    }
    $model= new sliderModel();
    $allSlider=$model->selectAllSlider();
    require_once './view/slider/showSlider.php';
   
}
function deleteSlider(){
    $model= new sliderModel();
    if (isset($_GET['id'])) {
        $id = $_GET['id']; 
        if ($id && $model->deleteSlider($id)) {
           $this->showSlider();
        } 
    }
}
function insertSlider(){
    $model= new sliderModel();
    require_once './view/slider/insertSlider.php';
    if (isset($_POST['btn_insert'])) {
    
        $name = $_POST['name'];
        $noi_dung = $_POST['noi_dung'];
        $img = MediaHelper::upload($_FILES['image']);
        
        $slider=$model->insertSlider($name,$noi_dung,$img);
        
        if($slider) {
            $this->showSlider();
            }
        }
                
    }

    function updateSlider()
    {
        $model = new sliderModel();
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $oneSlider = $model->OneSlider($id);
            require_once './view/slider/updateSlider.php';
            if (isset($_POST['btn_ud'])) {
                $name = $_POST['name'];
                $noi_dung = $_POST['noi_dung'];
                $img = $_FILES['image'] ? MediaHelper::upload($_FILES['image']) : null;
                $slider=$model->updateSlider($id, $name, $noi_dung, $img);
                echo $slider;
                if ($slider) {
                    $this->showSlider();
                } else {
                    echo ("Error");
                }
            }
            require_once './view/slider/updateSlider.php';
        }
    }


}