<?php 
 session_start();
 ?>
 <?php
// require '../Views/HienThi/view_product.php';
include '../../Models/product.php';
// include '../Hienthi/Models/product.php';
$pro = new Product();
$arr = "";
?>


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

    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" href="menu.css"> -->

    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css"> -->

    <!-- slide -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

    <!-- <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="../css/style.css"> -->

    <!-- display -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>


<body>
<div class="header" id="header-content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="header-content">
            <div class="container">
            <br/>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background: white">
                <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <button type="" class=" btn btn-secondary btn-block"><a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a></button>
                        </li>
                        
                    </ul>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                        <button type="submit" class=" btn btn-secondary btn-block" name="buffalo"> <a  class="nav-link" href="view_product.php">Buffalo<span class="sr-only">(current)</span></a></button>
                        </li>
                        
                    </ul>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                        <button type="submit" class="nav-link  btn btn-secondary btn-block " name="teddy"> <a class="nav-link" href="view_product.php">Teddy<span class="sr-only">(current)</span></a> </button>
                        </li>
                        
                    </ul>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                        <button type="submit" class="  btn btn-secondary btn-block" name="cat"><a href="view_product.php">Cute Cat</a></button>
                        </li>
                        
                    </ul>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                        <button type="submit" class="  btn btn-secondary btn-block" name="doreamon"> <a href="view_product.php">Doreamon</a></button>
                        </li>
                        
                    </ul>
                    
                    <ul class="navbar-nav mr-auto">
                        <div class="form-inline my-2 my-lg-0">
                        <form action="" method="get">
                            <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" >
                            <input class="btn btn-outline-success my-2 my-sm-0" type="submit" name="Ok"></input>
                        </form>
                           
                        </div>
                    </ul>

                    <ul class="navbar-nav mr-auto">
                    <li class="button-account">
                            <a href="" style="font-size: 100%;color: rgb(100, 100, 216);"> <i class="fa fa-home" style="color: orangered;padding-right: 5px;"></i>Sign Up</a>
                        </li>
                        
                    </ul>

                    <ul class="navbar-nav mr-auto">
                    <li class="button-account">
                            <a href="" style="font-size: 100%;color: rgb(100, 100, 216);"><i class="fa fa-user" style="color: orangered;padding-right: 5px;"></i>Sign In</a>
                        </li>
                        
                        
                    </ul>

                   
                </div>
                
            </div>
        </nav>
        
    </div>
    <hr style="background-color: #f7544a;height: 2px;">
    


<!-- Slide -->
<div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://gaubongonline.vn/wp-content/uploads/2021/04/Saigon_web.jpg" alt="First slide">
    </div>
    <!-- <div class="carousel-item">
      <img class="d-block w-100" src="https://gaubongonline.vn/wp-content/uploads/2020/07/2-HN.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://gaubongonline.vn/wp-content/uploads/2020/07/1-HN.jpg" alt="Third slide">
    </div> -->
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<!-- end slide -->

    <hr style="background-color: #e68376;height: 2px;">

    
    <!-- display products -->
    <form action="" method="post">
        <div class="container-fluid ">
            <div id="menu-ngag">
                <ul class="nav nav-pills justify-content-center flex-column flex-md-row center" id="myPill" role="tablist">
                    <li class="nav-item active ">
                        <button type="submit" class=" btn btn-secondary btn-block" name="buffalo"> Buffalo</button>
                    </li>

                    <li class="nav-item nav-link">

                        <button type="submit" class="  btn btn-secondary btn-block" name="cat"> Cat</button>


                    </li>
                    <li class="nav-item nav-link ">

                        <button type="submit" class="nav-link  btn btn-secondary btn-block " name="teddy"> Teddy </button>

                    </li>
                    <li class="nav-item nav-link">
                        <button type="submit" class="  btn btn-secondary btn-block" name="doreamon"> Doreamon</button>
                    </li>
                    <li class="nav-item nav-link">
                        <button type="submit" class="  btn btn-secondary btn-block" name="chicken"> Chicken </button>
                    </li>
                    <li class="nav-item nav-link">
                        <button type="submit" class="  btn btn-secondary btn-block" name="dog">Dog</button>
                    </li>

                </ul>

                
        <div>


        <hr style="background-color: #e68376;height: 2px;">

        <?php        
            if (isset($_POST['buffalo'])) {
                $arr = $pro->GetListBuffalo();
            } else {
                if (isset($_POST['teddy'])) {
                    $arr = $pro->GetListTeddy();
                } else {
                    if (isset($_POST['cat'])) {
                        $arr = $pro->GetListCat();
                    } else {
                        if (isset($_POST['doreamon'])) {
                            $arr = $pro->GetListDoreamon();
                        } else {
                            if (isset($_POST['chicken'])) {
                                $arr = $pro->GetListChicken();
                            } else {
                                if (isset($_POST['dog'])) {
                                    $arr = $pro->GetListDog();
                                }
                            }
                        }
                    }
                }
            }

            if ($arr != "") {
                $_SESSION['upload']=0; 
                $item = "<div class='container-fluid'><div id='products' class='row list-group'>";
                foreach ($arr as $key => $row) {
                    $item = "<div class='container-fluid'><div id='products' class='row list-group'>";
                    foreach ($arr as $key => $row) {
                        $show = (string) "<div  id='item' class='item  col-xs-3 col-lg-3'>
                        <div class='thumbnail'> <img id='img' class='group list-group-image' src='{$row['image1']}' width='300'>
                        <div class='caption'> 
                            <div class='row56' id='bottom1'>
                                <h4 class='group inner list-group-item-heading' style='text-align:center'>{$row['name_product']}</h4>
                                <p class='group inner list-group-item-text' style='color:black; text-align:center;font-size:22px'> {$row['price']}đ</p>
                                </div>
                                <div class='row' id='bottom'>
                                    <div class='col-xs-12 col-md-6'>
                                        <p class='lead' style='text-align: center'><i class='fa fa-heart' style='color:#f7544a'></i></p>
                                    </div>                                                         
                                    <div class='col-xs-12 col-md-6'> <a class='btn btn-success'
                                        href='../DISPLAY/CART/addCart.php?ma_id={$row['id_product']}' style='background:#f7544a'>Xem chi tiết</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>";

                        $item .= $show;
                    }
                    $item .= "</div></div>";
                    echo $item;
                }
            } else {
                $_SESSION['upload']=0; 
                $arr = $pro->GetListBuffalo();
                $item = "<div class='container-fluid'><div id='products' class='row list-group'>";
                foreach ($arr as $key => $row) {
                    $show = (string)  "<div  id='item' class='item  col-xs-3 col-lg-3'>
                                                        <div class='thumbnail'> <img id='img' class='group list-group-image' src='{$row['image1']}' width='300'>
                                                            <div class='caption'> 
                                                                <div class='row56' id='bottom1'>
                                                                    <h4 class='group inner list-group-item-heading' style='text-align:center'>{$row['name_product']}</h4>
                                                                    <p class='group inner list-group-item-text' style='color:black; text-align:center;font-size:22px'> {$row['price']}đ</p>
                                                                    </div>
                                                                    <div class='row' id='bottom'>
                                                                        <div class='col-xs-12 col-md-6' >
                                                                            <p class='lead' style='text-align: center'><i class='fa fa-heart' style='color:#f7544a; width:100px' ></i></p>
                                                                        </div>                                                         
                                                                        <div class='col-xs-12 col-md-6'> <a class='btn btn-success'
                                                                            href='../DISPLAY/CART/addCart.php?ma_id={$row['id_product']}' style='background: white; color: #f7544a ;border: 2px solid #f7544a;'>Xem chi tiết</a>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>";

                    $item .= $show;
                }
                $item .= "</div></div>";
                echo $item;
            }
            ?>
        </div>
        <script>
            function myMessenger() {
                alert("Add Your Shopping Cart");
            }
    </script>
</body>

</html>