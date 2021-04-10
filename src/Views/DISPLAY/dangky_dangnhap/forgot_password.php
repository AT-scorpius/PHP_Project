<!DOCTYPE html>
<html lang="en">


<head>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trang đăng nhập</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/login.css">
	<link rel="stylesheet" href="validator/style.css">

</head>

<body style="background-image: url('assets/images/login.jpg'); background-repeat: no-repeat;">

	<?php
ini_set("display_errors",0);
use PHPMailer\PHPMailer\PHPMailer;
if(isset($_POST['submit'])){
$user=$_POST['user_name'];
$email=$_POST['email'];
$link=new mysqli("localhost","root","","php_project");
$query="select * from users";
$result=mysqli_query($link,$query);
$kt=0;
$pass=0;
while($row=mysqli_fetch_assoc($result)){
  if($user==$row['user_name']&&$email==$row['email']){
      $kt=1;
      $pass=$row['passwords'];
  }
}

if($kt==1){


require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';

$mail = new PHPMailer();

$alert = '';
$code = rand(100000,999999);

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'nguyenthithang092001@gmail.com';
    $mail->Password = 'Thang2001';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    $mail->setFrom('nguyenthithang092001@gmail.com', 'ADMIN');
    $mail->addAddress($email);

    $mail->isHTML(true);
    $mail->Subject = "START BUYING WITH BEAR SHOP";
    $mail->Body = "Your pass is: $pass</h3>";
    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
  echo "<script>window.location.replace('login.php')</script>";
}else{
  echo "<script>alert('THE USERNAME OR EMAIL DOES NOT EXIST !!!')</script>";
}
}
	?>


	<fieldset>
		<div class="row">
			<div class="col-sm-6 login-section-wrapper">

				<form action="" method="POST" class="form" id="form-4">
					<h3 class="heading">FORGOT PASSWORD</h3>
					<p class="desc"> Thank you for using our service!❤️</p>
<p style></p>
					<div class="spacer"></div>


					<div class="form-group">
						<label for="user_name" class="form-label">user_Name</label>
						<input id="user_name" name="user_name" type="user_name" placeholder="NOT NULL" class="form-control">
						<span class="form-message"></span>
					</div>



					<div class="form-group">
						<label for="email" class="form-label">Email</label>
						<input id="passwords" name="email" type="text" placeholder="trên 8 ký tự" class="form-control">
						<span class="form-message"></span>
					</div>



					<button type="submit" name="submit" >SEND</button>
          </div>
			<div class="col-lg-6 px-0 d-none d-sm-block">
				<img src="assets/images/login.jpg" alt="login image" class="login-img">
			</div>
		</div>
		</form>



</body>

</html>