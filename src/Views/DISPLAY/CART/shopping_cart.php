<?php
    include '../../../Models/connect.php';
    if(isset($_REQUEST['id_product']) and $_REQUEST['id_product']!=""){
        $id=$_GET['id_product'];
        $connect = new ConnectDataBase();
        $sql= "SELECT * FROM product where id_product = $id";
        $result = $connect->query($sql);
        while($row = $result->fetch_array()){      
            $add="INSERT INTO `paid`(id_paid, id_user, id_product_size, quantity, total) SELECT * FROM `product` where id_product=$id";
            $connect->query($add); 
        }
        header("Location: http://localhost/PHP_Prọect_MVC/view_product.php");
    }
?>