<?php 
session_start(); 
if(isset($_GET['id_cart'])){
    $id=$_GET['id_cart'];
     unset($_SESSION['array'][$id]);
header('Location: http://localhost/PHP_Project_MVC/addCart.php');
}
?>