<?php 
 session_start(); 
?>
<?php
include '../../../Models/connect.php';
$connect = new ConnectDataBase();

?>
<?php
    foreach($_SESSION['array'] as $key => $row){
        $id=$row["id_product"];
        echo $id;
        $sql= "SELECT * FROM product where id_product=$id";
        $result = $connect->query($sql);
        while($row2 =$result->fetch_array()){      
            $add="INSERT INTO `paid`(id_paid, id_user, id_product_size, quantity, total) SELECT * FROM `product` where id_product=$id";
            $connect->query($add);
        }

    } 
?>