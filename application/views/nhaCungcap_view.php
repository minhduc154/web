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
					<li class="active"><a href="<?=base_url(); ?>index.php/qlbh_controller/nhacc" >Quản Lý NCC</a></li>
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
			<p class="wel" align="right"><a href="#">Chào mừng <b><?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?> </b> đến với <b> Web quản lý </b></a></p>
			<div class="clearfix"></div>
		</div>
		</div>
		</div>
	</div>
		<form action="<?=base_url();?>/index.php/qlbh_controller/timNhacc" method="POST" role="form">
			<input type="text" name="timkiem">
			<input class="btn btn-success" type="submit" value="Tìm Kiếm">
		</form>
<button class="btn btn-info "><a href="<?=base_url();?>/index.php/qlbh_controller/viewthemNhacc"><H4>Thêm nha cc</H4></a></button>
	
<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>id_công ty</th>
				<th>tên công ty</th>
				<th>địa chỉ</th>
				<th>phone</th>
				<th>email</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($list as $value): ?>
				
			<tr>
				<td><?= $value['id_congty'] ?></td>
				<td><?= $value['tencongty'] ?></td>
				<td><?= $value['diachi'] ?></td>
				<td><?= $value['dienthoai'] ?></td>
				<td><?= $value['email'] ?></td>
				<td><button class="btn-info"><a href="<?=base_url();?>index.php/qlbh_controller/suaNhacc/<?=$value['id_congty']?>">Sửa</a></button></td>
				<td><button class="btn-info"><a href="<?=base_url();?>index.php/qlbh_controller/xoaNhacc/<?=$value['id_congty']?>">Xóa</a></button></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
		

		<?php
		for($i=0;$i<30;$i++)
		{
			?>
		<br>
		<?PHP
		}
		?>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>