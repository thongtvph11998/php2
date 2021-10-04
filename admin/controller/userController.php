<?php
require_once './model/userModel.php';
require_once './helpers/mediaHelper.php';
class userController{
function showUser(){
    if (isset($_GET['action'])) {
        echo '<script>window.location.href = "http://localhost:8077/PHP2/ASS/admin/?page=cate"</script>';
    }
    $model= new userModel();
    $allUser=$model->selectAllUser();
    require_once './view/user/showUser.php';
   
}
function deleteUser(){
    $model= new userModel();
    if (isset($_GET['id'])) {
        $id = $_GET['id']; 
        if ($id && $model->deleteUser($id)) {
           $this->showUser();
        } 
    }
}


}