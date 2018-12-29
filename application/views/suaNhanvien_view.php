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
					<ul class="icon1 sub-icon1">
							<li  ><a href="<?=base_url(); ?>index.php/qlbh_controller/thongtinUser"><h4>THÔNG TIN</h4><br><h6 align="center">tài khoản</h6></a></li>
							<li><a href="<?=base_url(); ?>index.php/qlbh_controller"><h4>ĐĂNG XUẤT</h4></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
		</div>
		<div class="header-bottom">
		<div class="container">
			<div class="h_menu4">
				<a class="toggleMenu" href="#">Menu</a>
					<ul class="nav">
					<li ><a href="<?=base_url(); ?>index.php/qlbh_controller/dangnhap"><i> </i>Home</a></li>
					<li ><a href="<?=base_url(); ?>index.php/qlbh_controller/mathang" >Quản Lý Mặt Hàng</a></li> 
					<li ><a href="<?=base_url(); ?>index.php/qlbh_controller/hoadon" >Quản Lý Đơn Hàng </a></li>						
					<li><a href="<?=base_url(); ?>index.php/qlbh_controller/khachhang" >Quản Lý Khách Hàng</a></li>		 
					<li><a href="<?=base_url(); ?>index.php/qlbh_controller/nhacc" >Quản Lý NCC</a></li>
					<?php
					if (isset($_SESSION['username']))
					 {
					 	if ($_SESSION['username'] == 'admin' ) {
					 ?>
					 <li class="active"><a href="<?=base_url(); ?>index.php/qlbh_controller/nhanvien" >Quản Lý Nhân Viên</a></li>
					 <li ><a href="<?=base_url(); ?>index.php/qlbh_controller/taikhoan" >Quản Lý User</a>
					 	</li>
				    <?php
				    	}
					 } 
					
					?>
				</ul>
				<script type="text/javascript" src="<?= base_url(); ?>/js/nav.js"></script>
			</div>
		</div>
		</div>
		<div class="header-bottom-in">
		<div class="container">
		<div class="header-bottom-on">
			<p class="wel"><a href="#">Chào mừng <b><?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?> </b> đến với <b> Web quản lý </b></a></p>
			<div class="clearfix"></div>
		</div>
		</div>
		</div>
	</div>
	
<div class="container">
		<div class="account">
	<form action="<?=base_url();?>index.php/qlbh_controller/suaNhanvien/<?=$update['id_nhanvien']?>" method="POST" role="form" enctype="multipart/form-data">
		<legend>Sửa Thông Tin Nhân Viên</legend>
	
	
		<div class="form-group">
			<label for="">Họ Và Tên</label>
			<input type="text" name="hoten" class="form-control" id="" value="<?=$update['hoten']?>">
		</div>
		<div class="form-group">
			<label for="">Giới Tính</label>
			<input type="text" name="gioitinh" class="form-control" id="" value="<?=$update['gioitinh']?>" >
		</div>
		<div class="form-group">
			<label for="">Ngày Sinh</label>
			<input type="date" name="ngaysinh" class="form-control" id="" value="<?=$update['ngaysinh']?>">
		</div>
		<div class="form-group">
			<label for="">Avatar</label>
			<input type="file" name="avatar" class="form-control" id="" >
			<img src="<?=base_url().$update['avatar']?>" width="200" height = "200">

		</div>
		<div class="form-group">
			<label for="">Địa Chỉ</label>
			<input type="text" name="diachi" class="form-control" id="" value="<?=$update['diachi']?>">
		</div>
		<div class="form-group">
			<label for="">Điện Thoại</label>
			<input type="text" name="dienthoai" class="form-control" id="" value="<?=$update['dienthoai']?>">
		</div>
		<div class="form-group">
			<label for="">Email</label>
			<input type="text" name="email" class="form-control" id="" value="<?=$update['email']?>">
		</div>

		<button type="submit" class="btn btn-danger" name="btnsuanv">Sửa Thông Tin</button>
		<a href="<?=base_url();?>index.php/qlbh_controller/nhanvien" class="btn btn-danger">Hủy Sửa</a>
	</form>
</div>
	</div>
		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

		</div>
</body>
</html>