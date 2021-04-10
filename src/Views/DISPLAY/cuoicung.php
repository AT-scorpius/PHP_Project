<?php require '../../Models/product.php';
$pro= new Product();
$arr="";
$b='';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Bán gấu bông</title>

    <!-- <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" /> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
    <!-- <link rel="stylesheet" href="menu.css"> -->
    <!-- <script src="./menu_new.js"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script></script> -->
</head>

<form action="" method="post" >
    <div class="container-fluid ">
        <div id="menu-ngag">
            <ul class="nav nav-pills justify-content-center flex-column flex-md-row center" id="myPill" role="tablist">
            <li class="nav-item nav-link">
                <button type="submit"   class="  btn btn-secondary btn-block" name="doreamon">  Doreamon</button>
                </li>
                <li class="nav-item active ">
                   <button   type="submit" class=" btn btn-secondary btn-block" name="buffalo">  Buffalo</button>
                </li>               
                <li class="nav-item nav-link">                   
                <button type="submit"   class="  btn btn-secondary btn-block" name="cat">  Cat</button>                 
                </li>
                <li class="nav-item nav-link ">              
                        <button  type="submit" class="nav-link  btn btn-secondary btn-block " name="tabteddy2"> Teddy </button>                 
                </li>
                
                <li class="nav-item nav-link">
                <button type="submit" class="  btn btn-secondary btn-block" name="chicken">  Chicken </button>
                </li>
                <li class="nav-item nav-link">
                <button type="submit"  class="  btn btn-secondary btn-block" name="dog">Dog</button>
                </li>
            </ul>
        </div>
        
                    <?php 
                            if(isset($_POST['buffalo']))
                           {
                             $arr=$pro->GetListBuffalo(); 
                           }
                           else
                           {
                                 if(isset($_POST['teddy']))
                                 {
                                     $arr=$pro->GetListTeddy();
                                 }
                                 else{
                                         if(isset($_POST['cat']))
                                         {
                                             $arr=$pro->GetListCat();
                                         }
                                         else{
                                                 if(isset($_POST['doreamon']))
                                                 {
                                                     $arr=$pro->GetListDoreamon();
                                                 }
                                                 else
                                                 {
                                                     if(isset($_POST['chicken']))
                                                         {
                                                         $arr=$pro->GetListChicken();
                                                         }
                                                         else
                                                         {
                                                             if(isset($_POST['dog']))
                                                             {
                                                                 $arr=$pro->GetListDog();
                                                             }
                                                         }
                                                 }
                                             }   
                                         
                                     }
                             }         

                            if($arr!=""){
                          $ki ="<div class='container-fluid'><div id='products' class='row list-group'>";
                          foreach($arr as $key => $row){
                            
                           $k = (string) "<div  id='item' class='item  col-xs-3 col-lg-3'>
                                      <div class='thumbnail'> <img id='img' class='group list-group-image' src='{$row['image1']}'
                                      width='300'>
                                           <div class='caption'> 
                                             <div class='row56' id='bottom1'>
                                                <h4 class='group inner list-group-item-heading'>  {$row['name_product']}</h4>
                                                <p class='group inner list-group-item-text'> {$row['like_product']}.</p>
                                            </div>
                                           <div class='row' id='bottom'>
                                                     <div class='col-xs-12 col-md-6'>
                                                          <p class='lead'> {$row['price']}đ</p>
                                                         </div>
                                                         <div 
                                                         button class='btn btn-info btn-sm'><i class='fa fa-edit'></i></div>
                                                     <div class='col-xs-12 col-md-6'> <a class='btn btn-success'
                                                     href='detail.php?id_product={$row['id_product']}'>Chi tiết</a>
                                                         </div>
                                                         
                                                    </div>
                                               </div>
                                          </div>
                                     </div>
                                                        
                        ";
                        
                        $ki.=$k;
                                                
                          }
                          $ki.="</div></div>";
                          echo $ki;
                        } else{
                            $arr=$pro->GetListBuffalo();
                            $ki ="<div class='container-fluid'><div id='products' class='row list-group'>";
                            foreach($arr as $key => $row){
                              
                             $k = (string) "<div  id='item' class='item  col-xs-3 col-lg-3'>
                                        <div class='thumbnail'> <img id='img' class='group list-group-image' src='{$row['image1']}'
                                        width='300'>
                                             <div class='caption'> 
                                               <div class='row56' id='bottom1'>
                                                  <h4 class='group inner list-group-item-heading'>  {$row['name_product']}</h4>
                                                  <p class='group inner list-group-item-text'> {$row['like_product']}.</p>
                                              </div>
                                             <div class='row' id='bottom'>
                                                       <div class='col-xs-12 col-md-6'>
                                                            <p class='lead'> {$row['price']}đ</p>
                                                           </div>
                                                           <div 
                                                           <button class='btn btn-info btn-sm'><i class='fa fa-edit'></i></div>
                                                           <div class='col-xs-12 col-md-6'> <a class='btn btn-success'
                                                           href='detail.php?id_product={$row['id_product']}'>Chi tiết</a>
                                                               </div>
                                                      </div>
                                                 </div>
                                            </div>
                                       </div>                      
                                   
                          ";
                          
                          $ki.=$k;
                                   
                            }
                            $ki.="</div></div>";
                            echo $ki;
                                   
                        }       
                       ?>
                
      
        
    </div>

</body>

</html>

</body>

</html> 