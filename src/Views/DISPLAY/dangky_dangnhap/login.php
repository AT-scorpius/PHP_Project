<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

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
	//Gọi file connection.php ở bài trước
	require_once("lib/connection.php");
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["btn_submit"])) {
		// lấy thông tin người dùng
		$user_name = $_POST["user_name"];
		$passwords = $_POST["passwords"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$user_name = strip_tags($user_name);
		$user_name = addslashes($user_name);
		$passwords = strip_tags($passwords);
		$passwords = addslashes($passwords);
		if ($user_name == "" || $passwords == "") {
			echo "username hoặc password bạn không được để trống!";
		} else {
			$sql = "select * from users where user_name = '$user_name' and passwords = '$passwords' ";
			$query = mysqli_query($conn, $sql);
			$num_rows = mysqli_num_rows($query);
			echo "đăng nhập thành công !";
			if ($num_rows == 0) {
				echo "tên đăng nhập hoặc mật khẩu không đúng !";
			} else {
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION['user_name'] = $user_name;
				if ($user_name == 'admin') {
					header("location: ../../Admin/admin.php");
				} else {
					header("location: ../home.php");
				}

			}
		}
	}
	?>

	<fieldset>
		<div class="row">
			<div class="col-sm-6 login-section-wrapper">

				<form action="" method="POST" class="form" id="form-4">
					<h3 class="heading">ĐĂNG NHẬP</h3>
					<p class="desc"> Thank you for using our service!❤️</p>

					<div class="spacer"></div>


					<div class="form-group">
						<label for="user_name" class="form-label">user_Name</label>
						<input id="user_name" name="user_name" type="user_name" placeholder="NOT NULL" class="form-control">
						<span class="form-message"></span>
					</div>



					<div class="form-group">
						<label for="passwords" class="form-label">Password</label>
						<input id="passwords" name="passwords" type="password" placeholder="trên 8 ký tự" class="form-control">
						<span class="form-message"></span>
					</div>



					<input type="submit" name="btn_submit" value="ĐĂNG NHẬP">
					<a href="forgot_password.php" name="btn_quenmk">forget password</a>
			</div>

			<div class="col-lg-6 px-0 d-none d-sm-block">
				<img src="assets/images/login.jpg" alt="login image" class="login-img">
			</div>
		</div>
		</form>



</body>

</html>