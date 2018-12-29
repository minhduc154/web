<!DOCTYPE html>
<html>
<head>
<title>CoopMart</title>
<link href="<?= base_url(); ?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
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
						<?php 
						if(isset($_SESSION['guestname']))
      						{
      					?>
							<li  ><a href="<?=base_url(); ?>index.php/qlbh_controller/thongtinGuest"><h4>THÔNG TIN</h4><br><h6 align="center">tài khoản</h6></a></li>
						<?php } ?>
							<li><a href="<?=base_url(); ?>index.php/qlbh_controller/dangxuat2"><h4>ĐĂNG XUẤT</h4></a></li>
							<li > <a href="<?=base_url(); ?>index.php/qlbh_controller/viewGiohang" ><h4>GIỎ HÀNG</h4></a> </li>		
							<li><div class="cart">
									<a href="#" class="cart-in"> </a>
									<span>
										<?php
										if ($cart = $this->cart->total_items()){
										echo $cart;
										}
										else {
											echo 0;
										}
										?>	
										</span>
								</div>
								<ul class="sub-icon1 list">
						  <h3>Hàng đã chọn</h3>
						  <div class="shopping_cart">

						  	<?php

						  	 if ($cart = $this->cart->contents()):
						  	  foreach ($cart as $value): 
    							 ?>
    								<div class="cart_box">
							   	 <div class="message">
							   	 	<div class="alert-close"> <a href="<?= base_url();?>index.php/qlbh_controller/xoaGiohang/<?=$value['rowid']?>"></a></div> 
							   	 	<div class="list_img"><img src="<?=base_url().$value['anh']?>" class="img-responsive" alt=""></div>
								    <div class="list_desc"><h4><?=$value['name']?></span></h4>
								    	<span class="actual"><?=$value['qty']?> x <?=$value['price']?>VNĐ</span>

								</div>

		                              <div class="clearfix"></div>
	                              </div>
	              			
	              			<?php
	              			endforeach;
	              				endif;
	              			?>
	                        </div>
                           <div class="login_buttons">
							  <div class="check_button"><a href="<?=base_url(); ?>index.php/qlbh_controller/viewGiohang">Chi Tiết</a></div>
							  <div class="clearfix"></div>
						    </div>
					      <div class="clearfix"></div>
						</ul>
							</li>
						</ul>
						<script type="text/javascript" src="<?= base_url(); ?>js/nav.js"></script>
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
					<li ><a href="<?= base_url();?>index.php/qlbh_controller/viewhome"><i> </i>Trang chủ</a></li>				
						<li><a href="products.html" >Mã giảm giá</a>
						</li>		 
						<li><a href="products.html" >Tiết kiệm hơn với ứng dụng</a></li>
						<li><a href="contact.html" >Liên hệ</a></li>
						<?php
						if(isset($_SESSION['guestname']))
						{
						?>
						<li class="active"><a href="<?=base_url();?>index.php/qlbh_controller/donhangCuatoi" >Đơn Hàng Của Tôi</a></li>
						<?php } ?>
				</ul>
				<script type="text/javascript" src="js/nav.js"></script>
			</div>
		</div>
		</div>
		<div class="header-bottom-in">
			<div class="container">
			<div class="header-bottom-on"> 
			<p class="wel"><a href="#">Chào mừng <?php if(isset($_SESSION['guestname'])) echo $_SESSION['guestname']  ?> đến với <b> CoopMart </b>!!!</a></p>
			<div class="clearfix"></div>
		</div>
		</div>
		</div>
	</div>
			<h1 align="center">Danh Sách Hóa Đơn</h1>
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
	foreach ($hoadon as $value):
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

			<td><button class="btn-info"><a href="<?= base_url();?>index.php/qlbh_controller/chitietHoadonCuatoi/<?=$value['id_donhang']?>">Chi Tiết Đơn Hàng</a></button></td>
		</tr>
		<?php
	endforeach
		?>
	</tbody>
	
</table>
</div>


		<!---->
		<?php
		for($i=0;$i<20;$i++)
		{
			?>
		<br>
		<?PHP
		}
		?>

		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>