<?php
include 'connect.php';

class Detail {

    public function getDetailProduct($id){
        $connect = new ConnectDataBase();
$sql = "SELECT * FROM product
WHERE id_product= $id";
       return $connect-> query($sql);
    }
    public function getDetailProduct_Size($id){
        $connect = new ConnectDataBase();
$sql = "SELECT * FROM product_size
WHERE id_product= $id";
       return $connect-> query($sql);
    }
    public function getSize($id){
        $connect = new ConnectDataBase();
$sql1 = "select id_size from product_size where id_product = $id";
       return $connect-> query($sql1);
    }
    public function getNameSize($id){
        $connect = new ConnectDataBase();
$sql2 = "select name_size from size where id_size=$id";
       return $connect-> query($sql2);
    }
    public function getPrice($id_product,$id_size){
        $connect = new ConnectDataBase();
$sql1 = "select price from product_size where id_product = $id_product and $id_size=id_size";
       return $connect-> query($sql1);
    }

    public function getQuantity($id_product,$id_size){
        $connect = new ConnectDataBase();
$sql1 = "select quantity from product_size where id_product = $id_product and $id_size=id_size";
       return $connect-> query($sql1);
    }
}

?>