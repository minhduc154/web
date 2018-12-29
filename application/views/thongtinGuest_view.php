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
							<li  ><a href="<?=base_url(); ?>index.php/qlbh_controller/thongtinGuest"><h4>THÔNG TIN</h4><br><h6 align="center">tài khoản</h6></a></li>
							<li><a href="<?=base_url(); ?>index.php/qlbh_controller/index2"><h4>ĐĂNG XUẤT</h4></a></li>
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
					<li class="active"><a href="<?= base_url();?>index.php/qlbh_controller/viewhome"><i> </i>Trang chủ</a></li>
									
						<li><a href="products.html" >Mã giảm giá</a>
						</li>		 
						<li><a href="products.html" >Tiết kiệm hơn với ứng dụng</a></li>
						<li><a href="contact.html" >Liên hệ</a></li>
					
				</ul>
				<script type="text/javascript" src="js/nav.js"></script>
			</div>
		</div>
		</div>
		<div class="header-bottom-in">
			<div class="container">
			<div class="header-bottom-on"> 
			<p class="wel"><a href="#">Chào mừng <?=$_SESSION['guestname'] ?> đến với <b> Chip Mart </b>!!!</a></p>
			<div class="clearfix"></div>
		</div>
		</div>
		</div>
	</div>
			<h1 align="center">Thông Tin Khách Hàng</h1>

<?php foreach ($kh as $value): ?>
	<div class="container">
		<div class="account">
	<form action="<?=base_url();?>index.php/qlbh_controller/suaKhachhang2/<?=$value['id_khachhang']?>" method="POST" role="form" enctype="multipart/form-data">
		<legend>Cập Nhật Thông Tin</legend>
	
	
		<div class="form-group">
			<label for="">Họ Và Tên</label>
			<input type="text" name="hoten" class="form-control" id="" value="<?=$value['hoten']?>">
		</div>
		<div class="form-group">
			<label for="">Địa Chỉ</label>
			<input type="text" name="diachi" class="form-control" id="" value="<?=$value['diachi']?>" >
		</div>
		<div class="form-group">
			<label for="">Điện Thoại</label>
			<input type="text" name="dienthoai" class="form-control" id="" value="<?=$value['dienthoai']?>">
		</div>
		<div class="form-group">
			<label for="">Email</label>
			<input type="text" name="email" class="form-control" id="" value="<?=$value['email']?>" >
			
		</div>
		<div class="form-group">
			<label for="">Password</label>
			<input type="text" name="password" class="form-control" id="" value="<?=$value['password']?>">
		</div>
		<div class="form-group">
			<label for="">Ngày Thêm</label>
			<input type="date" name="ngaythem" class="form-control" id="" value="<?=$value['ngaythem']?>">
		</div>

		<button type="submit" class="btn btn-danger">Cập Nhật Thông Tin</button>
	</form>

</div>
</div>
<?php endforeach ?>
	
		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>