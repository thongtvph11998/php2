<?php
require_once 'model/databaseModel.php';
class productModel extends databaseModel{
    function selectAllProduct(){
        $sql="select *from san_pham";
        return $this->selectAll($sql);
    }
    function insertProduct($danh_muc_id,$img,$name,$hot,$mo_ta,$so_luong,$gia_sp){
        $sql="insert into san_pham value(null,'$danh_muc_id','$img','$name','$hot','$mo_ta','$so_luong','$gia_sp')";
        return $this->executeSQL($sql);
    }
    function updateProduct($id, $danh_muc_id, $image, $name, $hot, $mo_ta, $so_luong, $gia_sp){
        $sql="UPDATE `san_pham` SET
            `danh_muc_id`=$danh_muc_id,`img`=N'$image',`name`=N'$name',`hot`=$hot,`mo_ta`=N'$mo_ta', `so_luong`=$so_luong,`gia_sp`=$gia_sp
             WHERE id=$id";
            //  echo $sql;die;
            return $this->executeSQL($sql);
    }
    function oneProduct($id){
        $sql="select * from  san_pham where id=$id";
        $product =  $this->selectOne($sql);
        return $product;
    }
    function deleteProduct($id){
        $sql="delete from san_pham where  id='$id'";
        return $this->executeSQL($sql);
    }
}
?>  