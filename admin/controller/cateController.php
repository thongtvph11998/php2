<?php
require_once './model/cateModel.php';
class cateController
{
    function showCate()
    {
        if (isset($_GET['action'])) {
        echo '<script>window.location.href = "http://localhost:8077/PHP2/ASS/admin/?page=cate"</script>';
    }
        $model = new cateModel();
        $allCate = $model->selectAllCate();
        require_once './view/cate/showCate.php';
        
    }

   function deleteCate(){
    $model= new cateModel();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if ($id && $model->deleteCate($id)) {
            $this->showCate();
        }
    }
   }
    function insertCate()
    {
        $model = new cateModel();
        require_once './view/cate/insertCate.php';
        if (isset($_POST['addSubmit'])) {
            $name = $_POST['name'];
            if ($model->insertCate($name)) {
                $this->showCate();
            } else {
                echo "Error";
            }
        }
    }
    function updateCate()
    {
        $model = new cateModel();
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $oneCate = $model->OneCate($id);
            if (isset($_POST['btn_ud'])) {
                $id = $_GET['id'];
                $name = $_POST['name'];
                if ($model->updateCate($id, $name)) {
                    $this->showCate();
                } else {
                    echo ("Error");
                }
            }
            require_once './view/cate/updateCate.php';
        }
    }
}
