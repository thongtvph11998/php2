<?php
function LoadAllSP(){
	$sql="select * from san_pham WHERE hot = 1 LIMIT 0,3";
	return selectquery($sql);
}
function LoadAllSPnew(){
	$sql="select * from san_pham WHERE hot = 0 LIMIT 0,6";
	return selectquery($sql);
}
function loadSP($id){
	$sql="SELECT *FROM san_pham WHERE id=$id";
	return selectquery($sql)[0];
	
}

?>