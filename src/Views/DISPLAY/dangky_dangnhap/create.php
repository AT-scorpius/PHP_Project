
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Template</title>
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
                            <h3 class="heading">Create Accout</h3>
                            <p class="desc"> Thank you for using our service!❤️</p>

                            <div class="spacer"></div>

                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" name="email" type="email" placeholder="VD: bang.gia@gmail.com" class="form-control">
                                <span class="form-message"></span>
                            </div>

                            <div class="form-group">
                                <label for="user_name" class="form-label">user_ame</label>
                                <input id="user_name" name="user_name" type="user_name" placeholder="NOT NULL" class="form-control">
                                <span class="form-message"></span>
                            </div>

                            <div class="form-group">
                                <label for="phone" class="form-label">phone</label>
                                <input id="phone" name="phone" type="phone" placeholder="NOT NULL" class="form-control">
                                <span class="form-message"></span>
                            </div>

                            <div class="form-group">
                                <label for="passwords" class="form-label">Passwords</label>
                                <input id="passwords" name="passwords" type="passwords" placeholder="trên 8 ký tự" class="form-control">
                                <span class="form-message"></span>
                            </div>

                            <div class="form-group">
                                <label for="rePassword" class="form-label">rePassword</label>
                                <input id="rePassword" name="rePassword" type="password" placeholder="trên 8 ký tự" class="form-control">
                                <span class="form-message"></span>
                            </div>

                            <input type="submit" name="btn_submit" value="CREATE">
                        </form>

                    </div>
                </div>
                <div class="col-lg-6 px-0 d-none d-sm-block">
                    <img src="assets/images/login.jpg" alt="login image" class="login-img">
                </div>
            </div>
          
        </div>
       
        <?php 
        	
            require_once ("lib/connection.php");
            if (isset($_POST["btn_submit"])) {
                  //lấy thông tin từ các form bằng phương thức POST
                    $email =$_POST['email'];
                    $user_name =$_POST['user_name'];
                    $phone=$_POST['phone'];      
                    $passwords =$_POST['passwords'];
                    $rePassword =$_POST['rePassword'];
                  //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
                if ($user_name == "" || $passwords == "" || $rePassword == "" || $phone == "" || $email == "") {
                            echo "bạn vui lòng nhập đầy đủ thông tin";

                if(strlen($passwords)<8 || $passwords !=$rePassword ){
                    echo "nhap lại mật khẩu";}
                        
                else{
                    echo validEmail($email);
                     if ($kt=0){
                    echo "moi ban nhap lai thong tin";
                    echo "<br>";}
                    else{
                    echo " Tao tk thanh cong";
                    echo "<br>";}
                                }
                //  if($password !=$rePassword){
                //     echo "nhap lai mat khau nhe";
                //                 }

                  }
                
                  else {


                        //   // Kiểm tra tài khoản đã tồn tại chưa
                        $sql="select * from users where user_name='$user_name'";
                        $kt=mysqli_query($conn, $sql);
                        $num_rows=mysqli_num_rows($kt);
                        if($num_rows > 0){
                            echo "Tài khoản đã tồn tại";
                        }else{
                            // thực hiện việc lưu trữ dữ liệu vào db
                            $sql = "INSERT INTO USERS(
                                user_name,
                                passwords,
                                email,
                                phone
                                ) VALUES (
                                '$user_name',
                                '$passwords',
                                '$email',
                                '$phone'
                                )";
                            // thực thi câu $sql với biến conn lấy từ file connection.php
                               mysqli_query($conn,$sql);
                               echo "chúc mừng bạn đã đăng ký thành công";
                        }
                                            
                       
                    }
            
         function validEmail($email)
         {
             if(preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $email)){
                 echo '<p class="mess" name="messContent" style="color: green;"></p>';
                 return true;
             }else{
                 echo '<p class="mess" name="messContent" style="color: red;"> Email Không Hợp Lệ!</p>';
                 $kt=0;
                 return false;
             }
            }
        }
  ?>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>