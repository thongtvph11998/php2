<?php

require_once '../admin/model/databaseModel.php';

class User extends databaseModel {
    function register($username, $password, $email, $fullName, $phone)
    {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `tb_user`(`chuc_vu`, `username`, `email`, `fullname`, `phone`, `password`) VALUES (1,'$username', '$email', '$fullName', '$phone', '$password')";
        return $this->executeSQL($sql);
    }
    
    function login ($email, $password) {
        $sql = "SELECT * FROM `tb_user` WHERE email='$email'";
        $user = $this->selectOne($sql);
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['auth'] = [
                'id' => $user['id'],
                'chuc_vu' => $user['chuc_vu'],
                'username' => $user['username'],
                'email' => $user['email'],
                'fullname' => $user['fullname'],
                'phone' => $user['phone']
            ];
            return $_SESSION['auth'];
        } else {
            return false;
        }
    }
}
