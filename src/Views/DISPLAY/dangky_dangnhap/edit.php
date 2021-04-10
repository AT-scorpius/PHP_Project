<!DOCTYPE html >
<html lang="en">
<?php
session_start();
?>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDIT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="validator/style.css">
</head>
<body>
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 login-section-wrapper">

                    <div class="login-wrapper my-auto">
                        <form action="" method="POST" class="form" id="form-4">
                            <h3 class="heading">Edit Accout</h3>
                            <p class="desc"> Thank you for using our service!❤️</p>

                            <div class="spacer"></div>


                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" name="email" type="email" placeholder="VD: bang.gia@gmail.com" class="form-control">
                                <span class="form-message"></span>
                            </div>

                            

                            <div class="form-group">
                                <label for="phone" class="form-label">phone</label>
                                <input id="phone" name="phone" type="phone" placeholder="NOT NULL" class="form-control">
                                <span class="form-message"></span>
                            </div>

                            <div class="form-group">
                                <label for="passwords" class="form-label">Passwords</label>
                                <input id="passwords" name="passwords" type="password" placeholder="trên 8 ký tự" class="form-control">
                                <span class="form-message"></span>
                            </div>

                            <div class="form-group">
                                <label for="rePassword" class="form-label">rePassword</label>
                                <input id="rePassword" name="rePassword" type="password" placeholder="trên 8 ký tự" class="form-control">
                                <span class="form-message"></span>
                            </div>

                            <input type="submit" name="btn_submit" value="EDIT">
                        </form>

                    </div>
                </div>
                <div class="col-lg-6 px-0 d-none d-sm-block">
                    <img src="assets/images/login.jpg" alt="login image" class="login-img">
                </div>
            </div>
          
        </div>

<?PHP
require_once ("lib/connection.php");
if (isset($_POST["btn_submit"])) {
    ini_set("display_errors",0);
    // lấy thông tin người dùng
    $email =$_POST['email'];

    $phone=$_POST['phone'];      
    $passwords =$_POST['passwords'];
    $rePassword =$_POST['rePassword'];
    //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
    //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
    // $email = strip_tags($email);
    // $email = addslashes($email);
    // $user_name = strip_tags($user_name);
    // $user_name = addslashes($user_name);
    // $phone = strip_tags($phone);
    // $phone = addslashes($phone);
    // $passwords = strip_tags($passwords);
    // $passwords = addslashes($passwords);
    // $rePassword = strip_tags($rePassword);
    // $rePassword = addslashes($rePassword);
    $link=new mysqli("localhost","root","","PHP_PROJECT");
    $query="select * from current";
    $result=mysqli_query($link,$query);
    while($row=mysqli_fetch_assoc($result)){
        $user_name=$row['user_name'];
    }
 echo $_SESSION['user_name'] ;
  $user_name= $_SESSION['user_name'];

$sql = "UPDATE USERS  SET email='$email',phone='$phone',passwords='$passwords' WHERE user_name='$user_name'";
 
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
 
$conn->close();
}
?>
</main> 
</body>


</html> 