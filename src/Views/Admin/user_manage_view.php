<!DOCTYPE html>
<html lang="en">
<?php
require_once '../../Models/connect.php';
require_once '../../Controller/Admin/funtions_admin.php';
$GLOBALS['connect']  = new ConnectDataBase();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Management</title>
    <link rel="stylesheet" href="css/user-product-manage.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body style="background-image: url('image/b-g.jpg'); background-repeat: no-repeat;">

    <div class="header">
        <h1 style="text-align: center; color: rgb(224, 73, 99); text-align: center;">Account Management </h1>
    </div>

    <div class="form-search">
        <nav class="navbar navbar-light ">
            <form class="form-inline" method="POST">
                <input class="form-control mr-sm-2" type="text" placeholder="Enter product's name..." aria-label="Search" name="search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="btn_search">Search</button>
                <button class="btn-home"><i class="fas fa-home"></i> <a href="admin.php">Home</a></button>
            </form>

        </nav>
        <p class="message" id="error_search"></p>
    </div>
    <div class="list-manage">
    </div>

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

                    <th>Delete <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                        </svg></th>
                </tr>
            </thead>

            <tbody>
                <?php


                //L???y s??? l?????ng danh S??ch 
                $query = "select count(id_user) as total from USERS";
                $result =  $GLOBALS['connect']->query($query);
                $row = mysqli_fetch_assoc($result);
                $total_records = $row['total'];


                // T??M LIMIT V?? CURRENT_PAGE
                $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                $limit = 10;

                // T??NH TO??N TOTAL_PAGE V?? START
                // t???ng s??? trang
                $total_page = ceil($total_records / $limit);

                // Gi???i h???n current_page trong kho???ng 1 ?????n total_page
                if ($current_page > $total_page) {
                    $current_page = $total_page;
                } else if ($current_page < 1) {
                    $current_page = 1;
                }

                // T??m Start
                $start = ($current_page - 1) * $limit;

                // TRUY V???N L???Y DANH S??CH 
                // C?? limit v?? start r???i th?? truy v???n CSDL l???y danh s??ch tin t???c
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



                        <td><?php
                            if ($users['id_user'] == 1) {
                                echo "<strong style='color: #f7544a;'>Deletion is not allowed!</strong>";
                            } else {
                            ?><div class="form_group">
                                    <button name="btn_delete" class="btn_delete" id="delete_user">
                                        <?php
                                       $_SESSION['id_user_delete'] = $product['id_user']; 
                                        ?>
                                </div>

                            <?php  }
                            ?></td>
                    
                    </tr>
                <?php
                }

                ?>
            </tbody>

        </table>
        <?php
        // Thao T??c V???i D??? Li???u
        //delete
        if (isset($_POST['btn_delete'])) {
            if(!empty($_SESSION['id_user_delete']))
            deleteUser($_SESSION['id_user_delete']);
        }

        ?>
        <!-- Ph??n trang -->
        <div class="pagination">
            <?php
            // PH???N HI???N TH??? PH??N TRANG
            // B?????C 7: HI???N TH??? PH??N TRANG

            // n???u current_page > 1 v?? total_page > 1 m???i hi???n th??? n??t prev
            if ($current_page > 1 && $total_page > 1) {
                echo '  <a class="click-page" href="user_manage_view.php?page=' . ($current_page - 1) . '"> < Prev </a> ';
            }

            // L???p kho???ng gi???a
            for ($i = 1; $i <= $total_page; $i++) {
                // N???u l?? trang hi???n t???i th?? hi???n th??? th??? span
                // ng?????c l???i hi???n th??? th??? a
                if ($i == $current_page) {
                    echo '<span class="current-page" >' . $i . '</span> ';
                } else {
                    echo '<a class="click-page"  href="user_manage_view.php?page=' . $i . '">' . $i . '</a>  ';
                }
            }

            // n???u current_page < $total_page v?? total_page > 1 m???i hi???n th??? n??t prev
            if ($current_page < $total_page && $total_page > 1) {
                echo '<a class="click-page"  href="user_manage_view.php?page=' . ($current_page + 1) . '">Next ></a>  ';
            }
            ?>
        </div>
     
    </div>





    <!-- Modal -->
    <!-- Modal Delete User -->

    <!-- Modal Update User -->




    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>