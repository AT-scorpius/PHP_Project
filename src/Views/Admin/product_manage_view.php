<!DOCTYPE html>
<html lang="en">
<?php
// Start the session
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <link rel="stylesheet" href="css/user-product-manage.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class="all-content">
<div class="header">
        <h1 style=" color: rgb(224, 73, 99); text-align: center;">Product Management </h1>
    </div>
    <div class="form-search">
        <nav class="navbar navbar-light ">
            <form class="form-inline" method="POST">
                <div class="form-group">
                    <input class="form-control mr-sm-2" type="text" placeholder="Enter product's name..." aria-label="Search" name="search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="btn_search">Search</button>
                </div>

                <button class="btn-home"><i class="fas fa-laptop-house">x</i> <a href="admin.php">Admin Home Page</a></button>

                <button class="btn-home"><i class="fas fa-home"></i> <a onclick="location.reload();">Reload</a></button>

            </form>

        </nav>
        <p class="message" id="error_search"></p>

    </div>
    <div class="list-manage">
        <div class="container">
            <hr>
            <h3 style="color: red;">List Manage</h3>
            <br>
            <div class="form-create">

                <button class="btn btn-outline-danger" id="create-product" onclick="showAddProduct()">Add Product</button>
                <button class="btn btn-outline-danger" id="create-product" onclick="showAddType()">Add Type</button>
                <button class="btn btn-outline-danger" id="create-product" onclick="showAddSize()">Add Size</button>
              
              <br><br>  <?php 
              if(isset($_POST['btn_update'])){
               echo " <h5>Form Update</h5>";
              
              }
              ?>
              <div class="modal-content" id="form-add-type" style="display: none;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Type</h5>
                        <button type="button" class="close"  onclick="closeAddType()">
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
                        <button type="button" class="close"  onclick="closeAddSize()">
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
                        <button type="button" class="close"  onclick="closeAddProduct()">
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
       
            <hr> </div>

    </div>
    <!-- Modal -->
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
                    <th>Detail</th>
                    <th>Delete <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                        </svg></th>
                    <th>Update <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                            <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z" />
                        </svg></th>
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

                        <td>
                            <div class="form_group">
                                <button name="btn_detail" class="btn_detail" data-toggle="modal" data-target="#detail-product">
                                    See more
                                    <?php $_SESSION['id_product'] = $product['id_product']; ?>
                                </button>
                            </div>
                        </td>

                        <form action="" method="post">
                            <td>
                                <div class="form_group">
                                    <button name="btn_delete" class="btn_delete">

                                        Delete
                                        <?php
                                        // if (isset($_POST['btn_delete'])) {
                                        //     $id_delete= $product['id_product'];
                                        //         deleteProduct($id_delete);
                                        //     }

                                        ?>
                                    </button>
                                </div>
                            </td>

                            <td>
                                <div class="form_group">
                                    <button class="btn_update">
                                        Update
                                        <?php $_SESSION['id_product_update'] = $product['id_product']; ?>
                                    </button>
                                </div>
                            </td>
                        </form>

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



    <?php
    if (isset($_POST['add_product'])) {
        $type = $_POST['type_product'];
        $name = $_POST['name_product'];
        $size_product = $_POST['size_product'];
        $price = $_POST['price'];
        $img_1 = $_POST['img_1_upload'];
        $img_2 = $_POST['img_2_upload'];
        $img_3 = $_POST['img_3_upload'];
        $des = $_POST['decription'];
        $quantity = $_POST['quantity'];

        echo $type . $name . $img_1;
    }
    ?>

    <!-- Modal Detail Product -->
    <div class="modal fade" id="detail-product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title title " id="exampleModalLabel" style="color: red;">Detail Manage</h5>
                    <button type="button" class="close" data-dismiss="modal" onclick="">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Hiển thị bản size giá và số lượng còn lại -->
                    <div class="css-modal">
                        <table class="table table-striped show_user">
                            <thead>
                                <tr>

                                    <th>Name Size's Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Delete <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg></th>
                                    <th>Update <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                            <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z" />
                                        </svg></th>
                                </tr>
                            </thead>
                            <?php

                            $id = $_SESSION['id_product'];
                            // = "select * from PRODUCT_SIZE where $id =id_product";
                            $query = "SELECT PRODUCT_SIZE.id_size,PRODUCT_SIZE.id_product, SIZE.name_size, PRODUCT_SIZE.price, PRODUCT_SIZE.quantity
                        FROM PRODUCT_SIZE
                        INNER JOIN SIZE ON SIZE.id_size = PRODUCT_SIZE.id_size
                          WHERE $id =id_product;";
                            $result =  $GLOBALS['connect']->query($query);

                            while ($product = mysqli_fetch_array($result)) {
                                $size = $product['id_size'];
                                $price = $product['price'];
                                $quantity = $product['quantity'];
                            ?>
                                <tbody>

                                    <td><?php echo $product['name_size'] ?></td>
                                    <td><?php echo $product['price'] ?></td>
                                    <td><?php echo $product['quantity'] ?></td>
                                    <td>
                                        <div class="form_group">
                                            <button name="btn_delete" class="btn_delete" data-toggle="modal" data-target="#delete-product">

                                                <a href="product_manage_view.php?id_delete=<?php echo $product['id_product']; ?>">Delete</a>
                                            </button>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="form_group">
                                            <button name="btn_update" class="btn_update" data-toggle="modal" data-target="#btn-update-detail">
                                                Update
                                                <?php $_SESSION['id_product_update'] = $product['id_product']; ?>
                                            </button>
                                        </div>
                                    </td>
                                </tbody>
                            <?php
                            }
                            ?>
                        </table>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Update -->
   
</div>
  
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/function.js"></script>
</body>

</html>