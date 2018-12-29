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
					<li><a href="<?=base_url(); ?>index.php/qlbh_controller/dangnhap"><i> </i>Home</a></li>
					<li ><a href="<?=base_url(); ?>index.php/qlbh_controller/mathang" >Quản Lý Mặt Hàng</a></li> 
					<li class="active" ><a href="<?=base_url(); ?>index.php/qlbh_controller/hoadon" >Quản Lý Đơn Hàng </a></li>						
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
			<h1 align="center">Danh Sách Hóa Đơn</h1>
			<form action="<?=base_url();?>/index.php/qlbh_controller/timkiemHoadon" method="POST" role="form">
			<input type="text" name="timkiem">
			<input class="btn btn-success" type="submit" value="Tìm Kiếm">
		</form>
<div class="table-responsive">
	<table class="table table-hover">
	<thead>
		<tr>
			<?php $stt=1; ?>
			<th>STT</th>
			<th>ID Hóa Đơn</th>
			<th>ID Khách Hàng</th>
			<th>Tổng Tiền</th>
			<th>Ngày Đặt Hàng</th>
			<th>Ngày Giao Hàng</th>
			<th>Nơi Giao Hàng</th>
			<th>Tình Trạng</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach ($list as $value):
	?>
		<tr>
			<td><?=$stt++?></td>
			<td><?= $value['id_donhang']?></td>
			<td><?= $value['id_khachhang']?></td>
			<td><?= $value['tongtien']?></td>
			<td><?= $value['ngaydathang']?></td>
			<td><?= $value['ngaygiaohang']?></td>
			<td><?= $value['noigiaohang']?></td>
			<td><?= $value['tinhtrang']?></td>

			<td><button class="btn-info"><a href="<?= base_url();?>index.php/qlbh_controller/capnhatHoadon/<?=$value['id_donhang']?>">Cập Nhật</a></button></td>
			<td><button class="btn-info"><a href="<?= base_url();?>index.php/qlbh_controller/chitietHoadon/<?=$value['id_donhang']?>">Chi Tiết Đơn Hàng</a></button></td>
		</tr>
		<?php
	endforeach
		?>
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