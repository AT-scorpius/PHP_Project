<?php
session_start();
if(isset($_SESSION['user_name']) && $_SESSION['user_name'] != NULL){
    unset($_SESSION['user_name']);
    echo 'Bạn đã đăng xuất thành công.';
}
?>