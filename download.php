<?php
//$file = "docs/Conseil-a-Econome.pdf";
$file = $_GET['url'];

header("Content-Description: File Transfer"); 
header("Content-Type: application/octet-stream"); 
header("Content-Disposition: attachment; filename=" . basename($file) . ""); 

readfile ($file);
exit(); 
?>