<?php
include '../../Models/product.php';
$pro = new Product();
$arr = "";
$b = '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

    <!-- display -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
    <style>
        .nav-item active li{
            color: #FFFFFF;
            text-decoration: none;
        }
        tr, th, td {
            color: #f7544a;
        }
    </style>     

<body>

    <div class="header" id="header-content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="header-content">
            <div class="container">
                <br />
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background: white">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <button type="" class=" btn btn-secondary btn-block"><a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a></button>
                        </li>

                    </ul>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <button type="submit" class=" btn btn-secondary btn-block" name="buffalo"> <a class="nav-link" href="view_product.php">Buffalo<span class="sr-only">(current)</span></a></button>
                        </li>

                    </ul>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <button type="submit" class="nav-link  btn btn-secondary btn-block " name="tabteddy2"> <a href="view_product.php">Teddy</a> </button>
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
                            <form action="" method="GET">
                                <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" value="<?php if (isset($_POST['search'])) echo $_POST['search']?>">
                                <input class="btn btn-outline-success my-2 my-sm-0" type="submit" name="Ok" value="Search"></input>
                            </form>

                        </div>
                    </ul>

                    <ul class="navbar-nav mr-auto">
                        <li class="button-account">
                            <a href="./dangky_dangnhap/create.php" style="font-size: 100%;color: rgb(100, 100, 216);"> <i class="fa fa-home" style="color: orangered;padding-right: 5px;"></i>Sign Up</a>
                        </li>

                    </ul>

                    <ul class="navbar-nav mr-auto">
                        <li class="button-account">
                            <a href="./dangky_dangnhap/login.php" style="font-size: 100%;color: rgb(100, 100, 216);"><i class="fa fa-user" style="color: orangered;padding-right: 5px;"></i>Sign In</a>
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
    <hr style="background-color: #f7544a;height: 2px;">
    <div class="container">

        <div class="product-items">
            <?php
            if (isset($_REQUEST['Ok'])) {
                $search = ($_GET['search']);
                $key = $pro->SearchListProduct($search);
                $num = mysqli_num_rows($key);
                if (empty($search)) {
                    echo 'Nhập thông tin !';
                } else {

                    if ($num > 0 && $search != "") {

                        // Dùng $num để đếm số dòng trả về.
                        echo "<h3>$num kết quả trả về với từ khóa <b>$search</b></h3>";
                        
                        while ($row = mysqli_fetch_assoc($key)) {
            ?>
                            <div id='item' class='item  col-xs-3 col-lg-3' style="height: 400px">
                                <div class='thumbnail'> <img id='img' class='group list-group-image' src="<?php echo $row['image1'] ?>" width="300px"></div>
                                <div class='caption' width="100px">
                                    <div class='row56' id='bottom1'>
                                        <h4 class='group inner list-group-item-heading' style="text-align:center "><?php echo $row['name_product'] ?></h4>
                                        <p class='group inner list-group-item-text' style='color:#f7544a; text-align:center;font-size:22px'> <?php echo number_format($row['price'], 0, ",", ".") ?>đ</p>
                                    </div>
                                    <div class='row' id='bottom'>
                                        <div class='col-xs-12 col-md-6' >
                                            <a class='btn btn-success' href="cart.php?id_product=<?php echo $row['id_product'] ?> " style="color: #f7544a; font-size: 16px; border-radius: 2px; background: white; border: 1px solid #f7544a">Add to cart</a>
                                            <!-- <p class='lead' style='text-align: center'> <?php echo $row['like_product'] ?><i class='fa fa-heart' style='color:pink'></i></p> -->
                                        </div>
                                        <div class='col-xs-12 col-md-6' > <a class='btn btn-success' href='detail.php?ma_id=<?php echo $row['id_product'] ?>' style=" background: white; color: #f7544a; font-size: 16px; border: 1px solid #f7544a">Detail</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
            <?php
                        } 
                        
                        }else{
                            echo "<div id='item' class='product-items' style='height: 70px; color: green; font-size: 20px'>Không có kết quả trên !</div>";
                            echo "<hr style='background-color: #f7544a;height: 2px;'>";
                    }
                    
                }
            }



            ?>


            <?php

            $arr = $pro->GetAllListProduct();
            if ($arr) {
                while ($row = mysqli_fetch_assoc($arr)) {
            ?>

                    <div id='item' class='item  col-xs-3 col-lg-3' style="height: 400px">
                        <div class='thumbnail'> <img id='img' class='group list-group-image' src="<?php echo $row['image1'] ?>" width="300px"></div>
                        <div class='caption' width="100px">
                            <div class='row56' id='bottom1'>
                                <h4 class='group inner list-group-item-heading' style="text-align:center "><?php echo $row['name_product'] ?></h4>
                                <p class='group inner list-group-item-text' style='color:#f7544a; text-align:center;font-size:22px'> <?php echo number_format($row['price'], 0, ",", ".") ?>đ</p>
                            </div>
                            <div class='row' id='bottom'>
                                <div class='col-xs-12 col-md-6'>
                                    <a class='btn btn-success' href="cart.php?ma_id=<?php echo $row['id_product'] ?> " style="color: #f7544a; font-size: 16px; border-radius: 2px; background: white;border: 1px solid #f7544a ">Add to cart</a>
                                    <!-- <p class='lead' style='text-align: center'> <?php echo $row['like_product'] ?><i class='fa fa-heart' style='color:pink'></i></p> -->
                                </div>
                                <div class='col-xs-12 col-md-6'> <a class='btn btn-success'
                                 href='detail.php?ma_id=<?php echo $row['id_product'] ?>' style=" background: white; color: #f7544a; font-size: 16px; border: 1px solid #f7544a">Detail</a>
                                </div>
                            </div>
                        </div>

                    </div>
            <?php
                }
            }
            ?>



        </div>

    </div>
<!-- end list product -->
<hr style="background-color: #e68376;height: 2px;">
    <footer class="footer-section bg-with-black">
        <div class="container-fluid justify-content-center">
            <div class="row py-5">
                <div class="col">
                    <div class="card border-0">
                        <div class="card-body text-center ">
                            <h2><b style="color: #e68376;">Let `s have a chat !</b></h2>
                            <p class="pl-0 ml-0 mb-5">Find out what we can do for your crush.</p>
                            <div class="row text-center justify-content-center">
                                <div class="col-auto">
                                    <div class="input-group-lg input-group mb-3"><input type="text" class="form-control" placeholder="Enter your e-mail address" aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <div class="input-group-append"><button class="btn btn-success" type="button" id="button-addon2" style="background-color: rgb(206, 151, 176);"> <b>Submit</b></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mx-0 px-0" style="background-color: rgb(196, 184, 190); height: 2px;">
            <footer>
                <div class="row justify-content-around mb-0 pt-5 pb-0 ">
                    <div class=" col-11">
                        <div class="row justify-content-center">
                            <div class="col-md-3 col-12 font-italic align-items-center mt-md-3 mt-4">
                                <h5><span> <img src="home_img/logo.png" class="img-fluid mb-1" style="width: 50px;"></span><b style="color: rgb(221, 55, 133);"> Embrace Is Love</b></h5>
                                <p class="social mt-md-3 mt-2"> <span><i class="fa fa-facebook " aria-hidden="true"></i></span> <span><i class="fa fa-linkedin" aria-hidden="true"></i></span> <span><i class="fa fa-twitter" aria-hidden="true"></i></span> </p> <small class="copy-rights cursor-pointer">&#9400; 2019 EasyGo Digital Technologies</small><br><small>Copyright.All Rights Resered. </small>
                            </div>
                            <div class="col-md-3 col-12 my-sm-0 mt-5">
                                <ul class="list-unstyled">
                                    <li class="mt-md-3 mt-4">ONLINE TRANSFER</li>
                                    <li>Vietcombank</li>
                                    <li>Account number: 001100415732</li>
                                    <li>Account holder: Tran Thi Nhu Mai</li>
                                    <li>See more another accounts</li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-12 my-sm-0 mt-5">
                                <ul class="list-unstyled">
                                    <li class="mt-md-3 mt-4">YOUR NEED</li>
                                    <li>Intergrated Security Platform</li>
                                    <li>Core Features</li>
                                    <li>Product Features</li>
                                    <li>Pricing</li>
                                </ul>
                            </div>
                            <div class="col-xl-auto col-md-3 col-12 my-sm-0 mt-5">
                                <ul class="list-unstyled">
                                    <li class="mt-md-3 mt-4">OFFER</li>
                                    <li>Intergrated Security Platform</li>
                                    <li>Core Features</li>
                                    <li>Product Features</li>
                                    <li>Pricing</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </footer>

    </div>



</body>

</html> 