<?php  session_start();?>
<!DOCTYPE html>
<html lang="en">
    <head>                          
        <meta charset="utf-8" />                            
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />                         
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />                            
        <meta name="description" content="" />                          
        <meta name="author" content="" />                           
        <title>Mysql</title>                                                    
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">                          
                                    
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"                          
        crossorigin="anonymous" />                          
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"                          
        crossorigin="anonymous"></script>   
        <!--<script src="admin.js"></script>--> 
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600&display=swap" rel="stylesheet">
  
        <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0"></script>
        
 
        <meta name="description" content="" />                          
        <meta name="author" content="" />     
                        
        </head>          
        <style>
            img{
                width:3rem;
                height: 3rem;
            }
          .register {
                width: 600px;
                padding: 16px;
}
        </style>   
        <body>
    <?php 
    $_SESSION['upload']=1;
     $previous = "javascript:history.go(-2)";  
        if(isset($_GET['MaID'])){
            $id=$_GET['MaID'];
            foreach($_SESSION['array'] as $key => $row){
                if($id==$key)
                { 
           $GLOBALS['id'] =$row["id"];
           $GLOBALS['n'] =$row["name"];
           $GLOBALS['img']=$row["img"];
           $GLOBALS['p'] =$row["price"];
           $GLOBALS['q']=$row["quantity"];
           $GLOBALS['tp'] = $GLOBALS['p'] * $GLOBALS['q'];
            break;
                }
            
        
    }}

    if(isset($_POST['save'])){
        $id=$_GET['MaID'];
        if($_POST['quantity']!=""){
        $qua=$_POST['quantity'];
        foreach($_SESSION['array'] as $key => $row){
            if($id==$key)
            { 
                $_SESSION['array'][$key]["quantity"]=$qua;
                break;
            }
           
    }}
    header("Location: http://localhost/shopping_cart/fix_Shopping_cart.php");
        
    }
  
?>

<form action="" method="post" >      
    
  <div class="register">
    <h1>Chỉnh sửa thông tin người dùng</h1>
                
                <hr stype="color:yellow">
                <div class="col-12 mt-3">
                <img class='card-img-top'  id='img'  style='width: 100px; height:100px;' src='<?php echo $GLOBALS['img']?>'>
                </div>
                <div class="col-12 mt-3">
                <lable>name</lable><br>
                <input type='text' disabled  placeholder='<?php echo $GLOBALS['n'] ?>' name="email" class="col-11 mt-1" >
                </div>
                <div class="col-12 mt-3">
                <lable>price</lable><br>
                <input type='text'class="col-11 mt-1" disabled  name="price" placeholder='<?php echo $GLOBALS['p'] ?>'> 
                </div>
                <div class="col-12 mt-3">
                <lable >quantity</lable><br> 
                <input type='number' name="quantity" placeholder='<?php echo $GLOBALS['q']?>' class="col-5 mt-1">
                </div>
                <hr>
                <button type="submit" class="btn btn-secondary btn-block" name="save">UPLOAD</button>

</div>  
</from>
</body>
</html>