<?php 
 session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>                          
        <meta charset="utf-8" />                            
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />                         
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />                            
        <meta name="description" content="" />                          
        <meta name="author" content="" />                           
        <title>Tables - SB Admin</title>                                                    
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">                                                    
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"                          
        crossorigin="anonymous" />                          
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"                          
        crossorigin="anonymous"></script>   
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css"> -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600&display=swap" rel="stylesheet">
        <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0"></script>
        <meta name="description" content="" />                          
        <meta name="author" content="" />     
                        
        </head>          
        <style>
        .word{
            color: white;
        }</style>         
<body>

<form action="" method="get" >  

            <div class="product">
                <div class="title" style="text-align: center"><H1>WELCOME TO SHOPPING CART </H1></div>
                
                <table class="table text-danger  table-bordered"> 
                <thead class="thead-dark">
                    <thead class="  thead-light text-center  ">
                        <tr>
                            <th></th>                           
                            <th>NAME</th>
                            <th>IMAGE</th>
                            <th>PRICE </th>
                            <th>QUANTITY</th>
                            <th>TOTAL PRICE</th>
                            <th>UPDATE</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>

         <?php 
          if(empty($_SESSION['array']))
          {
              $_SESSION['array']=array();
          }

          if(empty($_SESSION['upload']))
          {
              $_SESSION['upload']=0;
          }
          $id=0;
          if(isset($_GET['id_product']) && $_SESSION['upload']!=1)
          { 
            
          $check=1;
              $id=$_GET['id_product'];
              foreach($_SESSION['array'] as $key => $row){
                  if($id==$key)
                  { 
                      $_SESSION['array'][$key]["quantity"]+=1;
                      
                      $check=2;
                      break;
                  }
              }
              if($check=1)
              {
                  $arr=$dis->GetOneProduct($id);
                  foreach($arr as $key => $row)
                  {
                      $name=$row["name_product"];
                      $img=$row["image1"];
                      $price= $row["price"];
                          }
                  $new_product=[
                        ($id)=>array(
                            "stt"=>1,
                            "id"=>$id,
                            "name"=>$name,
                            "image1"=>$img,
                            "price"=>$price,
                            "quantity"=>1,
                        ),
                      ];
                      $_SESSION['array']+= $new_product;
                  }

                  $_SESSION['upload']=1; 
                }
                  
         if(isset($_SESSION['array']))
         {  
            $_SESSION['TOTAL']=0;
             foreach($_SESSION['array'] as $key => $row){
                $_SESSION['TOTAL']+=($row["price"]*$row["quantity"]);
                 ?>
                 <thead class="thead-light text-center  ">
                 <tr>
                 <!-- <td><input type="number" style='width: 100px;' value="<?php  echo $row["stt"]?>"></td> -->
                 <td></td>
                    <td><?php  echo $row["name"]?></td>
                     <td><img class='card-img-top'  id='img'  style='width: 100px; height:100px;' src='<?php echo $row["image1"]?>'></td>                    
                     <td> <?php  echo $row["price"]?></td>
                     <td> <input type="number" style='width: 100px;' value="<?php  echo $row["quantity"]?>"></td>
                     <td> <?php  echo ($row["price"]*$row["quantity"]) ?></td>
                     <td><a href="upload_product.php?id_product=<?php echo $row["id"]?>">UPDATE</td>
                     <td><a href="delete_product.php?id_product=<?php echo $row["id"]?>">DELETE</td>
                  </tr>
              </thead>
              <?php
             }
         }
            ?>    
            <td><?php echo "TOTAL ALL PRICE"?></td>
                     <td>&nbsp</tb>
                     <td>&nbsp</tb>
                     <td>&nbsp</tb>
                     <td>&nbsp</tb>  
                     <td><?php echo  $_SESSION['TOTAL']." &nbsp &nbsp   USD"?></td>    
                     <td>&nbsp</tb>
                     <td>&nbsp</tb>      
        </table>

</div>
</form>
<form action="" method="post">  
<button type="submit" class="btn btn-dark" name="save1" >
    <i class="fas fa-plus"><a href ='http://localhost/shopping_cart/menu_new.php'></i>Add</button>     
<button class="btn btn-dark"  name="save2" type="submit">
    <i class="fas fa-plus mr-2"><a href ='http://localhost/shopping_cart/Insert_IntoDB.php'></i>Delete</button>
</div>
 </form>
 <?php
//  if(isset($_POST['save1'])){
//     header('Location: http://localhost/SS/MYsql.php');
//  }?>



 </body>
</html> 