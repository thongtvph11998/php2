<?php 

session_start();

include"../model/connect.php";
include"../model/danhmuc.php";
include"../model/product.php";
include"../model/loadslider.php";
require_once '../model/user.php';

$danhmuc=loaddm();
$AllSL = LoadAllSP();
$AllSL = LoadAllSPnew();

// var_dump($danhmuc);

// var_dump($san_pham);
include_once "../view/header.php";

if (isset($_GET['ta'])) {
	$ta=$_GET['ta']; 
	switch ($ta) {
		case 'logout':
			unset($_SESSION['auth']);
			echo '<script>window.location.href="http://localhost:8077/PHP2/ASS/controller/index.php"</script>';
			break;
		case 'sp':
			include"../view/sp1.php";
			break;
		case 'sp&idsp=2':
			include"../view/sp2.php";
			break;
		case 'dk':
			include"../view/dangky.php";
			break;
		case 'lh':
			include"../view/lienhe.php";
			break;
		case 'chitiet':
			include"../view/chitiet.php";
			break;
		case 'register':
			include_once '../view/dangky.php';
			break;
		case 'login':
			include_once '../view/login.php';
			break;
		default:
			include"../view/home.php";
			break;
	}
}else{

	include"../view/home.php";
}

include"../view/footer.php"; 
 ?>