<?php

$ccoonn=mysqli_connect('localhost','root','','flower');
if (!$ccoonn) {
 die("Failed Connection To Datbase");
}

function fltar($info){
global $ccoonn;
$info=mysqli_real_escape_string($ccoonn,htmlspecialchars($info));
return $info;

}



?>