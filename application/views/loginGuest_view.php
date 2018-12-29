<!DOCTYPE html>
<html>
<head>
<title>CoopMart</title>
<link href="<?= base_url() ?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url(); ?>/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="<?= base_url(); ?>/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!--//fonts-->

</head>
<body>
	<div class="header">
		<div class="header-top">
			<div class="container">
			<div class="header-top-in">			
				<div class="logo">
					<a href=""><h1>CoopMart</h1><h4>&ensp;bạn của mọi nhà</h4></a>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
		</div>
		<div class="header-bottom-in">
		<div class="container">
		<div class="header-bottom-on">
			<p class="wel"><a href="#">Chào mừng đến với <b> CoopMart </b></a></p>
			<div class="clearfix"></div>
		</div>
		</div>
		</div>
	</div>
	
	<div class="container">
		<div class="account">
		<form action="" method="POST" role="form-data">
			<legend>ĐĂNG NHẬP</legend>
			<div class="form-group">
				<label for="">Tài khoản</label> 
				<input type="text" class="form-control" id="user" name="username" placeholder="Nhập tài khoản">
			</div>
			<div class="form-group">
				<label for="">Mật khẩu</label>
				<input type="password" class="form-control" id="" name="password" placeholder="Nhập mật khẩu">
			</div>
			 <?php echo validation_errors(); ?>
			<button type="submit" name="btndangnhap" class="btn btn-warning">Đăng Nhập</button>
			<br>
			<br>
		</form>
				<button type="submit" class="btn btn-danger"><a href="<?=base_url(); ?>index.php/qlbh_controller/dangky">Đăng Ký</a></button>

				<button type="submit" class="btn btn-danger"><a href="<?=base_url(); ?>index.php/qlbh_controller">Trang Web Quản Lý</a></button>
	</div>
		<!---->
		
</body>
</html>