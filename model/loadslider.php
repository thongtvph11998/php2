<?php 
function loadsl(){
  
   $sql="select*from slider order by name";
   return selectquery($sql);
}