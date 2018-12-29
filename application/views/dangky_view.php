<!DOCTYPE html>
<html>
<head>
<title>CoopMart</title>
<link href="<?= base_url(); ?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
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
  <!--header-->
	<div class="header">
		<div class="header-top">
			<div class="container">
			<div class="header-top-in">			
				<div class="logo">
					<a href=""><h1>CoopMart</h1><h4>&ensp;bạn của mọi nhà</h4></a>
				</div>
				<div class="header-in">
					
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
		</div>

	</div>
	
<div class="container">
		<div class="account">
	<form action="<?=base_url();?>index.php/qlbh_controller/themKhachhang2" method="POST" role="form" enctype="multipart/form-data">
		<legend>Đăng Ký Thành Viên</legend>
	
	
		<div class="form-group">
			<label for="">Họ và Tên</label>
			<input type="text" name="hoten" class="form-control" id="">
		</div>
		<div class="form-group">
			<label for="">Địa Chỉ</label>
			<input type="text" name="diachi" class="form-control" id="" >
		</div>
		<div class="form-group">
			<label for="">Điện Thoại</label>
			<input type="text" name="dienthoai" class="form-control" id="">
		</div>
		<div class="form-group">
			<label for="">Email</label>
			<input type="text" name="email" class="form-control" id="" >
		</div>
		<div class="form-group">
			<label for="">Mật Khẩu</label>
			<input type="text" name="password" class="form-control" id="">
		</div>

		<button type="submit" class="btn btn-danger">Đăng Ký</button>
		<a href="<?=base_url();?>index.php/qlbh_controller/index2" class="btn btn-danger">Hủy</a>
	</form>
</div>
	</div>
		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

		</div>
</body>
</html>