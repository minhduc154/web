<!DOCTYPE html>
<html>
<head>
<title>CoopMart</title>
<link href="<?= base_url(); ?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
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
					<li><a href="<?=base_url(); ?>index.php/qlbh_controller/mathang" >Quản Lý Mặt Hàng</a></li> 
					<li  class="active"><a href="<?=base_url(); ?>index.php/qlbh_controller/hoadon" >Quản Lý Đơn Hàng </a></li>						
					<li><a href="<?=base_url(); ?>index.php/qlbh_controller/khachhang" >Quản Lý Khách Hàng</a></li>		 
					<li><a href="<?=base_url(); ?>index.php/qlbh_controller/nhacc" >Quản Lý NCC</a></li>
					<?php
					if (isset($_SESSION['username']))
					 {
					 	if ($_SESSION['username'] == 'admin' ) {
					 ?>
					 <li><a href="<?=base_url(); ?>index.php/qlbh_controller/nhanvien" >Quản Lý Nhân Viên</a></li>
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
	<form action="<?=base_url();?>index.php/qlbh_controller/capnhatHoadon/<?=$update['id_donhang']?>" method="POST" role="form" enctype="multipart/form-data">
		<legend>Cập Nhật Thông Tin Đơn Hàng</legend>
	
		<div class="form-group">
			<label for="">ID Khách Hàng</label>
			<input type="text" name="id_khachhang" class="form-control" id="" value="<?= $update['id_khachhang']?>" readonly>
		</div>
		<div class="form-group">
			<label for="">Tổng Tiền</label>
			<input type="text" name="tongtien" class="form-control" id="" value="<?= $update['tongtien']?>"readonly>
		</div>
		<div class="form-group">
			<label for="">Ngày Đặt Hàng</label>
			<input type="date" name="ngaydathang" class="form-control" id="" value="<?= $update['ngaydathang']?>" readonly>
			
		</div>
		<div class="form-group">
			<label for="">Ngày Giao Hàng</label>
			<input type="date" name="ngaygiaohang" class="form-control" id="" value="<?= $update['ngaygiaohang']?>">
		</div>
		<div class="form-group">
			<label for="">Nơi Giao Hàng</label>
			<input type="text" name="noigiaohang" class="form-control" id="" value="<?= $update['noigiaohang']?>"readonly>
		</div>
		<div class="form-group">
			<label for="">Tình Trạng</label>
			<select name="tinhtrang"><?=$update['tinhtrang']?>
				<option value="Chờ Xử Lý">Chờ Xử Lý</option>
				<option value="Đang Vận Chuyển">Đang Vận Chuyển</option>
				<option value="Hoàn Tất">Hoàn Tất</option>
			</select>
		</div>

		<button type="submit" name="btnsua" class="btn btn-danger">Cập Nhật Thông Tin</button>
		<a href="<?=base_url();?>index.php/qlbh_controller/hoadon" class="btn btn-danger">Hủy Cập Nhật</a>
	</form>
</div>
	</div>
		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>