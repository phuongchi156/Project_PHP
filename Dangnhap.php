<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Official Signup Form Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Monoton" rel="stylesheet">

<link href="css/font-awesome1.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style1.css" rel='stylesheet' type='text/css' media="all" />
<title>Đăng nhập</title>
</head>

<body> 
<?php

	if (isset($_POST["btnDangNhap"])) {
		include_once( "DataProvider.php" );
		session_start();
		$username=$_POST["firstname"];
		$password=$_POST["password"];
		$sql="SELECT * FROM user WHERE Name='".$username."'AND Password='" . $password. "'";
		$result=DataProvider::ExecuteQuery($sql);
		$record=mysqli_fetch_array($result);
			if ($record){
			
				 echo '<script>alert("Chúc mừng đăng nhập thành công");</script>';
				 $_SESSION['name'] = $_POST['txtTenDangNhap'];
				 header('Location: Trangchu.php');
			} else {
	
				 echo '<script>alert("Sai mật khẩu hoặc tên đăng nhập");</script>';
			}
		}

	?>

<h1 class="w3ls">ĐĂNG NHẬP</h1>
<div class="content-w3ls">
	<div class="content-agile1">
		<h2 class="agileits1">TRẮC NGHIỆM TIẾNG ANH</h2>
		<p class="agileits2">Rèn luyện khả năng tiếng anh của bạn.</p>
	</div>
	<div class="content-agile2">
	  <form id="frm" name="frm" method="post" action="#">
			<div class="form-control w3layouts"> 
				<input type="text" id="firstname" name="firstname" placeholder="Name" title="Please enter your Name" required="">
			</div>

			<div class="form-control agileinfo">	
				<input type="password" class="lock" name="password" placeholder="Password" id="password1" required="">
			</div>				
			
		<input type="submit" name="btnDangNhap" class="register" value="Đăng nhập">
		</form>
	  <script type="text/javascript">
			window.onload = function () {
				document.getElementById("password1").onchange = validatePassword;
				document.getElementById("password2").onchange = validatePassword;
			}
			function validatePassword(){
				var pass2=document.getElementById("password2").value;
				var pass1=document.getElementById("password1").value;
				if(pass1!=pass2)
					document.getElementById("password2").setCustomValidity("Passwords Don't Match");
				else
					document.getElementById("password2").setCustomValidity('');	 
					//empty string means no validation error
			}
		</script>
		<p class="wthree w3l">Đăng nhập để bắt đầu hành trình tương lai</p>
		<ul class="social-agileinfo wthree2">
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-youtube"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
		</ul>
	</div>
	<div class="clear"></div>
</div>
</form>
</body>
</html>
