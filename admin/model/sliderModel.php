<?php
require_once 'databaseModel.php';
class SliderModel extends databaseModel
{
    function selectAllSlider()
    {
        $sql = "SELECT * FROM slider";
        return $this->selectAll($sql);
        echo $sql;
    }
    function OneSlider($id)
    {
        $sql = "SELECT * FROM `slider` WHERE id='$id' ";
        return $this->selectOne($sql);
    }
    function insertSlider($name,$noi_dung,$img)
    {
        $sql = "INSERT INTO `slider`( `name`,`noi_dung`,`img`) VALUES ('$name','$noi_dung','$img')";
        return $this->executeSQL($sql);
    }
    function deleteSlider($id)
    {
        $sql = "DELETE FROM `slider` WHERE id='$id'";
        return $this->executeSQL($sql);
    }
    function updateSlider($id, $name, $noi_dung, $img)
    {
        $sql = "UPDATE `slider` 
                       SET `name`='$name',`noi_dung='$noi_dung',`img`='$img'
                       WHERE id='$id' ";
        return $this->executeSQL($sql);
    }
}