<?php
require_once 'databaseModel.php';
class cateModel extends databaseModel
{
    function selectAllCate()
    {
        $sql = "SELECT * FROM danh_muc";
        return $this->selectAll($sql);
        echo $sql;
    }
    function OneCate($id)
    {
        $sql = "SELECT * FROM `danh_muc` WHERE id='$id' ";
        return $this->selectOne($sql);
    }
    function insertCate($name)
    {
        $sql = "INSERT INTO `danh_muc`(`id`, `name`) VALUES ('','$name')";
        return $this->executeSQL($sql);
    }
    function deleteCate($id)
    {
        $sql = "DELETE FROM `danh_muc` WHERE id='$id'";
        return $this->executeSQL($sql);
    }
    function updateCate($id, $name)
    {
        $sql = "UPDATE `danh_muc` 
                       SET `name`='$name'
                       WHERE id='$id' ";
        return $this->executeSQL($sql);
    }
}
