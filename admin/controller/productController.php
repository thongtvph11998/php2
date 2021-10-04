<?php
require_once './model/productModel.php';

class productController{
function showProduct(){
    if (isset($_GET['action'])) {
        echo '<script>window.location.href = "http://localhost:8077/PHP2/ASS/admin/?page=sp"</script>';
    }
    $model= new productModel();
    $allProduct=$model->selectAllProduct();
    require_once './view/product/showProduct.php';
   
}
function deleteProduct(){
    $model= new productModel();
    if (isset($_GET['id'])) {
        $id = $_GET['id']; 
        if ($id && $model->deleteProduct($id)) {
           $this->showProduct();
        } 
    }
}
function insertProduct(){
    $model= new productModel();
    require_once './view/product/insertProduct.php';
    if (isset($_POST['btn_insert'])) {
        $img = MediaHelper::upload($_FILES['image']);
        $name = $_POST['name'];
        $hot = isset($_POST['hot']) ? 1 : 0;
        $mo_ta = $_POST['mo_ta'];
        $so_luong = $_POST['so_luong'];
        $gia_sp = $_POST['gia_sp'];
        $danh_muc_id = $_POST['danh_muc'];
        if($model->insertProduct($danh_muc_id,$img,$name,$hot,$mo_ta,$so_luong,$gia_sp)) {
            $this->showProduct();
        }
        }
                
    }
function updateProduct(){
    $model= new productModel();
    if(isset($_GET['editID'])){
        $id = $_GET['editID'];
        $onepr = $model->oneProduct($id);
        
    require_once './view/product/updateProduct.php';
    if (isset($_POST['btn_update'])){
        $image = MediaHelper::upload($_FILES['image']);
        $name = $_POST['name'];
        $hot = isset($_POST['hot']) ? 1 : 0;
        $mo_ta = $_POST['mo_ta'];
        $so_luong = $_POST['so_luong'];
        $gia_sp = $_POST['gia_sp'];
        $danh_muc_id = $_POST['cate_id'];
        if($model->updateProduct($id,$danh_muc_id,$image,$name,$hot,$mo_ta,$so_luong,$gia_sp)){
            $this->showProduct();
        }else{
            echo"lỗi update";
        }
    }
}
}
}

