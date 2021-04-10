<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Theme</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/user-product-manage.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">
    <script src="js/function.js"></script>
    <!-- Custom Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="#" style="color: rgb(226, 29, 167);">ADMIN HOME PAGE</a>
            </div>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Top Navigation: Left Menu -->
            <ul class="nav navbar-nav navbar-left navbar-top-links">
                <li><a href="../../HomePage/Home/TrangChu.html"><i class="fa fa-home fa-fw"></i> Website</a></li>
            </ul>

            <!-- Top Navigation: Right Menu -->
            <ul class="nav navbar-right navbar-top-links">
                <li class="dropdown navbar-inverse">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <!-- Notice -->
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> 2 new comments from Tuan Pham
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See more</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Sidebar -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">

                    <ul class="nav" id="side-menu">


                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Functions Manage<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">


                                    </div>
                                    <a href="product_manage_view.php"> <i class="fa fa-dashboard fa-fw">
                                        </i>Product Management</a>

                                </li>
                                <li>
                                    <a href="user_manage_view.php"><i class="fa fa-dashboard fa-fw">
                                        </i>User Management</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper" style="background-image: url('image/b-g.jpg'); background-repeat: no-repeat;">
            <h1 style="color: blue; text-align: center;">Welcome To Admin Home Page</h1>


            <div class="list-manage">
                <div class="container">
                    <hr>
                    <h3 style="color: red;">List Manage</h3>
                    <br>
                    <div class="form-create">
                        <div class="btn-form">
                            <button class="btn-out" id="create-product" onclick="showAddProduct()">Add Product</button>
                            <button class=" btn-out" id="create-product" onclick="showAddType()">Add Type</button>
                            <button class="btn-out" id="create-product" onclick="showAddSize()">Add Size</button>
                            <button class="btn-out" id="create-product" onclick="showProduct()">Show Product</button>
                            <button class="btn-out" id="create-product" onclick="showUser()">Show User</button>
                            <button class="btn-out" id="create-product" onclick="showType()">Show Type</button>
                            <button class="btn-out" id="create-product" onclick="showSize()">Show Size</button>
                        </div>

                        <br><br> <?php
                                    if (isset($_POST['btn_update'])) {
                                        echo " <h5>Form Update</h5>";
                                    }
                                    ?>
                        <div class="modal-content" id="form-add-type" style="display: none;">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Type</h5>
                                <button type="button" class="close" onclick="closeAddType()">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" class="form-row" method="POST" enctype="multipart/form-data">
                                    <div class="col-12 mt-3">
                                        <input class="form-control" type="text" name="type_product" placeholder="Enter Name Type">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <form action="" method="post">
                                    <button class="btn btn-outline-danger mt-3" type="submit" name="add_product">Add Type</button>
                                </form>

                            </div>
                        </div>
                        <div class="modal-content" id="form-add-size" style="display: none;">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Size</h5>
                                <button type="button" class="close" onclick="closeAddSize()">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" class="form-row" method="POST" enctype="multipart/form-data">
                                    <div class="col-12 mt-3">
                                        <input class="form-control" type="text" name="size_product" placeholder="Enter Name Size">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <form action="" method="post">
                                    <button class="btn btn-outline-danger mt-3" type="submit" name="add_product">Add Size</button>
                                </form>

                            </div>
                        </div>
                        <div class="modal-content" id="form-create" style="display: none;">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                                <button type="button" class="close" onclick="closeAddProduct()">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" class="form-row" method="POST" enctype="multipart/form-data">

                                    <div class="col-12 mt-3">
                                        <input class="form-control" type="text" name="type_product" placeholder="Enter ID Type">
                                    </div>
                                    <br>
                                    <div class="col-12 mt-3">
                                        <input class="form-control" type="text" name="name_product" placeholder="Enter Name">
                                    </div>
                                    <br>
                                    <div class="col-12 mt-3">
                                        <label for="">Upload image-1 of product </label>
                                        <input class="form-control" type="file" name="img_1_upload" placeholder="Enter link 1">
                                    </div>
                                    <br>
                                    <div class="col-12 mt-3">
                                        <label for="">Upload image-2 of product </label>
                                        <input class="form-control" type="file" name="img_2_upload" placeholder="Enter link 2">
                                    </div>
                                    <br>
                                    <div class="col-12 mt-3">
                                        <label for="">Upload image-3 of product </label>
                                        <input class="form-control" type="file" name="img_3_upload" placeholder="Enter link 3">
                                    </div>
                                    <br>
                                    <div class="col-12 mt-3">
                                        <input class="form-control" type="text" name="size_product" placeholder="Enter ID size">
                                    </div>
                                    <br>
                                    <div class="col-12 mt-3">
                                        <input class="form-control" type="text" name="quantity" placeholder="Enter number of products remaining...">
                                    </div>
                                    <br>
                                    <div class="col-12 mt-3">
                                        <input class="form-control" type="text" name="price" placeholder="Enter Price">
                                    </div>
                                    <br>
                                    <div class="col-12 mt-3">
                                        <input class="form-control" type="text" name="decription" placeholder="Desciption">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <form action="" method="post">
                                    <button class="btn btn-outline-danger mt-3" type="submit" name="add_product">Add Product</button>
                                </form>

                            </div>
                        </div>
                    </div>

                    <hr>
                </div>

            </div>
            <div id="show-product" style="display: none;">
                <div class="content">
                    <!-- Button trigger modal -->
                    <table class="table table-striped show_user">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name's Product</th>
                                <th>Type</th>
                                <th>Image 1</th>
                                <th>Image 2</th>
                                <th>Image 3</th>
                                <th>Sale</th>
                                <th>Like</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php

                            require_once '../../Models/connect.php';
                            require_once '../../Controller/Admin/funtions_admin.php';
                            $GLOBALS['connect']  = new ConnectDataBase();
                            //Lấy số lượng danh Sách 

                            $query = "select count(id_product) as total from PRODUCT";
                            $result =  $GLOBALS['connect']->query($query);
                            $row = mysqli_fetch_assoc($result);
                            $total_records = $row['total'];


                            // TÌM LIMIT VÀ CURRENT_PAGE
                            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                            $limit = 10;

                            // TÍNH TOÁN TOTAL_PAGE VÀ START
                            // tổng số trang
                            $total_page = ceil($total_records / $limit);

                            // Giới hạn current_page trong khoảng 1 đến total_page
                            if ($current_page > $total_page) {
                                $current_page = $total_page;
                            } else if ($current_page < 1) {
                                $current_page = 1;
                            }

                            // Tìm Start
                            $start = ($current_page - 1) * $limit;

                            // TRUY VẤN LẤY DANH SÁCH 
                            // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
                            $result = $GLOBALS['connect']->query("SELECT * FROM PRODUCT LIMIT $start, $limit");

                            if (isset($_POST['btn_search'])) {

                                if ($_POST['search'] == "") {
                                    echo "<script>document.getElementById('error_search').innerHTML='Please fill here to search!'</script>";
                                } else {
                                    $key = $_POST['search'];
                                    $result = searchProduct($key);
                                    if (mysqli_num_rows($result) == 0) {
                                        $total_records = mysqli_num_rows($result);
                                        $total_page = ceil($total_records / $limit);
                                        echo "<script>document.getElementById('error_search').innerHTML='No results found!'</script>";
                                    } else {
                                        $total_records = mysqli_num_rows($result);
                                        $total_page = ceil($total_records / $limit);
                                    }
                                }
                            }
                            while ($product = mysqli_fetch_array($result)) {
                            ?>
                                <tr>
                                    <td><?php $id_pr = $product['id_product'];
                                        echo $product['id_product'] ?></td>
                                    <td><strong><?php echo $product['name_product'] ?></strong></td>
                                    <td><?php
                                        $query = 'select name_type from TYPE_PRODUCT where ' . $product['id_type_product'] . '= id_type_product';
                                        $name_type = $GLOBALS['connect']->query($query);
                                        $name_type =  mysqli_fetch_assoc($name_type);
                                        echo $name_type['name_type'] ?></td>
                                    <td><?php echo "<img class='mini-img' src= " . $product['image1'] . " alt=''> " ?></td>
                                    <td><?php echo "<img class='mini-img' src= " . $product['image2'] . " alt=''> " ?></td>
                                    <td><?php echo "<img class='mini-img' src= " . $product['image3'] . " alt=''> " ?></td>
                                    <td><?php echo $product['sale'] ?> %</td>
                                    <td><?php echo $product['like_product'] ?></td>



                                </tr>
                            <?php
                            }

                            ?>
                        </tbody>

                    </table>
                    <!-- Phân trang -->
                    <div class="pagination">
                        <?php
                        // PHẦN HIỂN THỊ PHÂN TRANG
                        // BƯỚC 7: HIỂN THỊ PHÂN TRANG

                        // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
                        if ($current_page > 1 && $total_page > 1) {
                            echo '  <a class="click-page" href="product_manage_view.php?page=' . ($current_page - 1) . '"> < Prev </a> ';
                        }

                        // Lặp khoảng giữa
                        for ($i = 1; $i <= $total_page; $i++) {
                            // Nếu là trang hiện tại thì hiển thị thẻ span
                            // ngược lại hiển thị thẻ a
                            if ($i == $current_page) {
                                echo '<span class="current-page" >' . $i . '</span> ';
                            } else {
                                echo '<a class="click-page"  href="product_manage_view.php?page=' . $i . '">' . $i . '</a>  ';
                            }
                        }

                        // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                        if ($current_page < $total_page && $total_page > 1) {
                            echo '<a class="click-page"  href="product_manage_view.php?page=' . ($current_page + 1) . '">Next ></a>  ';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div id="show-user" style="display: none;">

                <div class="content">
                    <table class="table table-striped show_user">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Login Name</th>
                                <th>Full Name</th>
                                <th>Password</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Balance</th>
                        </thead>

                        <tbody>
                            <?php


                            //Lấy số lượng danh Sách 
                            $query = "select count(id_user) as total from USERS";
                            $result =  $GLOBALS['connect']->query($query);
                            $row = mysqli_fetch_assoc($result);
                            $total_records = $row['total'];


                            // TÌM LIMIT VÀ CURRENT_PAGE
                            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                            $limit = 10;

                            // TÍNH TOÁN TOTAL_PAGE VÀ START
                            // tổng số trang
                            $total_page = ceil($total_records / $limit);

                            // Giới hạn current_page trong khoảng 1 đến total_page
                            if ($current_page > $total_page) {
                                $current_page = $total_page;
                            } else if ($current_page < 1) {
                                $current_page = 1;
                            }

                            // Tìm Start
                            $start = ($current_page - 1) * $limit;

                            // TRUY VẤN LẤY DANH SÁCH 
                            // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
                            $result = $GLOBALS['connect']->query("SELECT * FROM USERS LIMIT $start, $limit");

                            if (isset($_POST['btn_search'])) {

                                if ($_POST['search'] == '') {
                                    echo "<script>document.getElementById('error_search').innerHTML='Please fill here to search!'</script>";
                                } else {
                                    $key = $_POST['search'];
                                    $result = searchUserName($key);
                                    if (mysqli_num_rows($result) == 0) {
                                        echo "<script>document.getElementById('error_search').innerHTML='No results found!'</script>";
                                        $total_records = mysqli_num_rows($result);
                                        $total_page = ceil($total_records / $limit);
                                    } else {
                                        $total_records = mysqli_num_rows($result);
                                        $total_page = ceil($total_records / $limit);
                                    }
                                }
                            }
                            while ($users = mysqli_fetch_array($result)) {
                            ?>
                                <tr>
                                    <td><?php $id_user = $users['id_user'];
                                        echo $users['id_user'] ?></td>
                                    <td><strong><?php echo $users['user_name'] ?></strong></td>
                                    <td><?php
                                        echo $users['full_name']
                                        ?></td>
                                    <td><?php echo $users['passwords']  ?></td>
                                    <td><?php echo $users['email']  ?></td>
                                    <td><?php echo $users['phone']  ?></td>
                                    <td><?php echo $users['address']  ?></td>
                                    <td><?php echo $users['balance']  ?></td>
                                </tr>
                            <?php
                            }

                            ?>
                        </tbody>

                    </table>
                    <?php
                    // Thao Tác Với Dữ Liệu
                    //delete
                    if (isset($_POST['btn_delete'])) {
                        if (!empty($_SESSION['id_user_delete']))
                            deleteUser($_SESSION['id_user_delete']);
                    }

                    ?>
                    <!-- Phân trang -->
                    <div class="pagination">
                        <?php
                        // PHẦN HIỂN THỊ PHÂN TRANG
                        // BƯỚC 7: HIỂN THỊ PHÂN TRANG

                        // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
                        if ($current_page > 1 && $total_page > 1) {
                            echo '  <a class="click-page" href="user_manage_view.php?page=' . ($current_page - 1) . '"> < Prev </a> ';
                        }

                        // Lặp khoảng giữa
                        for ($i = 1; $i <= $total_page; $i++) {
                            // Nếu là trang hiện tại thì hiển thị thẻ span
                            // ngược lại hiển thị thẻ a
                            if ($i == $current_page) {
                                echo '<span class="current-page" >' . $i . '</span> ';
                            } else {
                                echo '<a class="click-page"  href="user_manage_view.php?page=' . $i . '">' . $i . '</a>  ';
                            }
                        }

                        // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                        if ($current_page < $total_page && $total_page > 1) {
                            echo '<a class="click-page"  href="user_manage_view.php?page=' . ($current_page + 1) . '">Next ></a>  ';
                        }
                        ?>
                    </div>

                </div>
            </div>
            <div id="show-type" style="display: none;">

                <div class="content">
                    <table class="table table-striped show_user">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Type</th>
                        </thead>

                        <tbody>
                            <?php


                            //Lấy số lượng danh Sách 
                            $query = "select count(id_type_product) as total from TYPE_PRODUCT";
                            $result =  $GLOBALS['connect']->query($query);
                            $row = mysqli_fetch_assoc($result);
                            $total_records = $row['total'];


                            // TÌM LIMIT VÀ CURRENT_PAGE
                            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                            $limit = 10;

                            // TÍNH TOÁN TOTAL_PAGE VÀ START
                            // tổng số trang
                            $total_page = ceil($total_records / $limit);

                            // Giới hạn current_page trong khoảng 1 đến total_page
                            if ($current_page > $total_page) {
                                $current_page = $total_page;
                            } else if ($current_page < 1) {
                                $current_page = 1;
                            }

                            // Tìm Start
                            $start = ($current_page - 1) * $limit;

                            // TRUY VẤN LẤY DANH SÁCH 
                            // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
                            $result = $GLOBALS['connect']->query("SELECT id_type_product,name_type FROM TYPE_PRODUCT LIMIT $start, $limit");

                            while ($type = mysqli_fetch_array($result)) {
                            ?>
                                <tr>
                                    <td><?php echo $type['id_type_product']  ?></td>
                                    <td><?php echo $type['name_type']  ?></td>
                                </tr>
                            <?php
                            }

                            ?>
                        </tbody>

                    </table>
                    <?php

                    ?>
                    <!-- Phân trang -->
                    <div class="pagination">
                        <?php
                        // PHẦN HIỂN THỊ PHÂN TRANG
                        // BƯỚC 7: HIỂN THỊ PHÂN TRANG

                        // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
                        if ($current_page > 1 && $total_page > 1) {
                            echo '  <a class="click-page" href="user_manage_view.php?page=' . ($current_page - 1) . '"> < Prev </a> ';
                        }

                        // Lặp khoảng giữa
                        for ($i = 1; $i <= $total_page; $i++) {
                            // Nếu là trang hiện tại thì hiển thị thẻ span
                            // ngược lại hiển thị thẻ a
                            if ($i == $current_page) {
                                echo '<span class="current-page" >' . $i . '</span> ';
                            } else {
                                echo '<a class="click-page"  href="user_manage_view.php?page=' . $i . '">' . $i . '</a>  ';
                            }
                        }

                        // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                        if ($current_page < $total_page && $total_page > 1) {
                            echo '<a class="click-page"  href="user_manage_view.php?page=' . ($current_page + 1) . '">Next ></a>  ';
                        }
                        ?>
                    </div>

                </div>
            </div>
            <div id="show-size" style="display: none;">

<div class="content">
    <table class="table table-striped show_user">
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
        </thead>

        <tbody>
            <?php


            //Lấy số lượng danh Sách 
            $query = "select count(id_size) as total from SIZE";
            $result =  $GLOBALS['connect']->query($query);
            $row = mysqli_fetch_assoc($result);
            $total_records = $row['total'];
            // TÌM LIMIT VÀ CURRENT_PAGE
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            $limit = 10;

            // TÍNH TOÁN TOTAL_PAGE VÀ START
            // tổng số trang
            $total_page = ceil($total_records / $limit);

            // Giới hạn current_page trong khoảng 1 đến total_page
            if ($current_page > $total_page) {
                $current_page = $total_page;
            } else if ($current_page < 1) {
                $current_page = 1;
            }

            // Tìm Start
            $start = ($current_page - 1) * $limit;

            // TRUY VẤN LẤY DANH SÁCH 
            // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
            $result = $GLOBALS['connect']->query("SELECT * FROM SIZE LIMIT $start, $limit");

            while ($size = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $size['id_size']  ?></td>
                    <td><?php echo $size['name_size']  ?></td>
                </tr>
            <?php
            }

            ?>
        </tbody>

    </table>
    <?php

    ?>
    <!-- Phân trang -->
    <div class="pagination">
        <?php
        // PHẦN HIỂN THỊ PHÂN TRANG
        // BƯỚC 7: HIỂN THỊ PHÂN TRANG

        // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
        if ($current_page > 1 && $total_page > 1) {
            echo '  <a class="click-page" href="user_manage_view.php?page=' . ($current_page - 1) . '"> < Prev </a> ';
        }

        // Lặp khoảng giữa
        for ($i = 1; $i <= $total_page; $i++) {
            // Nếu là trang hiện tại thì hiển thị thẻ span
            // ngược lại hiển thị thẻ a
            if ($i == $current_page) {
                echo '<span class="current-page" >' . $i . '</span> ';
            } else {
                echo '<a class="click-page"  href="user_manage_view.php?page=' . $i . '">' . $i . '</a>  ';
            }
        }

        // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
        if ($current_page < $total_page && $total_page > 1) {
            echo '<a class="click-page"  href="user_manage_view.php?page=' . ($current_page + 1) . '">Next ></a>  ';
        }
        ?>
    </div>

</div>
</div>
        </div>

    </div>
    <script src="js/function.js"></script>
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
   
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>

    <script src="js/view_admin.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/startmin.js"></script>


</body>

</html>