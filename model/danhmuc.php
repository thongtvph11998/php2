<?php 
function loaddm(){
  
   $sql="select*from danh_muc order by name";
   return selectquery($sql);
}
