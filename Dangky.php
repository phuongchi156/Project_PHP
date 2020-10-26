<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Official Signup Form Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Monoton" rel="stylesheet">

<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome1.min.css" rel='stylesheet' type='text/css' media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Đăng ký</title>
<style>
input.register {
    width: 230px;
    height: 40px;
	font-size:15px;
}

</style>
</head>
<body style="text-align:center" >
 
    <div class="">
<h1><font color="white" size="+5"> Đăng ký học </font> </h1>
<?php
		 if(isset($_POST["dangky"])){
		 include_once( "DataProvider.php" );
		$name = $_POST['name'];
		$firstname = $_POST['firsname'];
		$lastname = $_POST['lastname'];
		$age = $_POST['age'];
		$email = $_POST['email'];
		$address  = $_POST['address'];
		$password = $_POST['password'];



		//$file_name = $_FILES['file']['name'];
		//$file_tem_loc = $_FILES['file']['tmp_name'];
		//$bookpic = "../img/".$file_name; 	
		//move_uploaded_file($file_tem_loc, $bookpic);


		$sql = "INSERT INTO user(Name, FirstName, LastName,Age, Email, Address, Password) VALUES('" . $name . "','" . $firstname . "','" . $lastname . "','" . $age . "','" . $email . "','" . $address . "','".$password."')";

		$ketqua=DataProvider::ExecuteQuery($sql);
			 if($ketqua== false){
				 echo '<script>alert("Đăng ký thất bại");</script>';
			 }
			 else{
				 echo '<script>alert("Đăng ký thành công");</script>';
				 header('Location: Trangchu.php');
			 }
	}
	?>
<div class="rows">
  <div style="margin-top:150px">
    <form  style="padding-left: 26%;" method="post" enctype="multipart/form-data" name="form1" action="Dangky.php">
      <fieldset style="width:600px;">
      <legend width="50%" style="color:#FFF">Thông tin cá nhân</legend>
      <table width="100%" border="0" style="margin-top:50px">
        <tr>
          <td width="48%" style="color:#FFF">Name</td>
          <td width="52%"><input type="text" name="name"/></td>
        </tr>
          <td width="48%" style="color:#FFF">First Name</td>
          <td><input type="text" name="firsname"/></td>
        </tr>
        <tr>
          <td width="48%" style="color:#FFF">Lastname</td>
          <td><input type="text" name="lastname"/></td>
        </tr>
        <tr>
          <td width="48%" style="color:#FFF">Age</td>
		<td><input type="text" name="Age"/></td>
        </tr>
        <tr>
          <td width="48%" style="color:#FFF">Email</td>
          <td><input type="text" name="email"/></td>
        </tr>
        <tr>
          <td width="48%" style="color:#FFF">Address</td>
          <td><input type="text" name="address"/></td>
        </tr>
        <tr>
          <td width="48%" style="color:#FFF">Password</td>
          <td><input type="password" name="password"/></td>
        </tr>

      </table>
      <table width="100%" border="0" style="margin-top:10px" >
              <tr>
          <td align="right"><input type="submit" name="dangky" value="Đăng ký" class="register"/></td>
        </tr>
      </table>
    </form>
    <br/>
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
		<p class="wthree w3l">Đăng ký để bắt đầu hành trình tương lai</p>
		<ul class="social-agileinfo wthree2">
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-youtube"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
		</ul>
	</div>
	<div class="clear"></div>
</div>
</div></div>
</body>
</html>