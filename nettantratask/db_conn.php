<?php
$conn = new mysqli('localhost','root','');

if ($conn->connect_error){
    die("connecction failed").$conn->connect_error;
}
// echo 'connected';
?>
