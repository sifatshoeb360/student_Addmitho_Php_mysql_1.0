<?php

$con = new mysqli('localhost','root','','cruddatabase1');
//$con = new mysqli('sql107.epizy.com','epiz_32250762','4cudSCKdUc12sg','epiz_32250762_photo');

if(!$con){
    die(mysqli_error($con));
}

?>