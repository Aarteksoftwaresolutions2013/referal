<?php session_start();
$key=$_GET['key'];

if(!isset($_SESSION['id'])){
    header('location:index.php?key='.$key);
}else{
    header('location:index.php');
}



?>

