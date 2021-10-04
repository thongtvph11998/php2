<?php
require_once 'databaseModel.php';
class userModel extends databaseModel
{
    function selectAllUser()
    {
        $sql = "SELECT * FROM tb_user";
        return $this->selectAll($sql);
        echo $sql;
    }
    
    
    function deleteUser($id)
    {
        $sql = "DELETE FROM `tb_user` WHERE id='$id'";
        return $this->executeSQL($sql);
    }
    
}
