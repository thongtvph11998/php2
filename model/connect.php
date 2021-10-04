
<?php
function connect(){


$host = 'localhost'; //địa chỉ kết nối CSDL
$db_user = 'root';
$db_pass = '';
$db_name = 'dam';
$conn = null;
//khai báo tên biến
// $objConn = null;

try{
    $conn = new PDO("mysql:host=$host;dbname=$db_name", $db_user, $db_pass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo "Ket noi csdl thanh cong!";

}catch(Exception $e){
    die( "Loi ket noi CSDL: " . $e->getMessage()  );
}
return $conn;
}
function selectquery($sql){
   $conn=connect();
   $stmt=$conn->prepare($sql);
   $stmt->execute();
   $stmt->setFetchMode(PDO::FETCH_ASSOC);
   $kq=$stmt->fetchAll();
   return $kq;

}