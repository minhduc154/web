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
					<li class="active"><a href="<?= base_url();?>index.php/qlbh_controller/viewhome"><i> </i>Trang chủ</a></li>
					<li ><a href="#" >Loại Hàng</a>
						<ul class="drop" >
							<?php foreach ($loaihang as $value): ?>
							<li><a href="<?=base_url();?>index.php/qlbh_controller/timLoaihang/<?=$value['id_loaihang']?>"><?=$value['tenloaihang']?></a></li>
							<?php endforeach ?>
						</ul>
					</li> 				
						<li><a href="products.html" >Mã giảm giá</a>
						</li>		 
						<li><a href="products.html" >Tiết kiệm hơn với ứng dụng</a></li>
						<li><a href="<?=base_url(); ?>index.php/qlbh_controller/viewLienhe" >Liên hệ</a></li>
						<?php
						if(isset($_SESSION['guestname']))
						{
						?>
						<li><a href="<?=base_url();?>index.php/qlbh_controller/donhangCuatoi" >Đơn Hàng Của Tôi</a></li>
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
			<div class="header-can">
				<ul class="social-in">
						<li><a href="#"><i> </i></a></li>
						<li><a href="#"><i class="facebook"> </i></a></li>
						<li><a href="#"><i class="twitter"> </i></a></li>					
						<li><a href="#"><i class="skype"> </i></a></li>
					</ul>	
					<div class="down-top">		
							<select class="in-drop">
							  <option value="Dollars" class="in-of">Dollars</option>
							  <option value="Euro" class="in-of">Vnđ</option>
							  <option value="Yen" class="in-of">Euro</option>
							</select>
					 </div>
					<div class="search">
						<form action="<?=base_url();?>/index.php/qlbh_controller/timkiem" method="POST" role="form">
							<input type="text" name="timkiem" placeholder="Nhập vào tên Mặt Hàng" >
							<input type="submit" value="">
						</form>
					</div>

					<div class="clearfix"> </div>
			</div>
			<div class="clearfix"></div>
		</div>
		</div>
		</div>
	</div>
	<div class="banner-mat">
		<div class="container">
			<div class="banner">
	
				
			   <div class="slider">
<marquee id="marq" scrollamount="10" direction="right" loop="50" scrolldelay="0" onmouseover="this.stop()" onmouseout="this.start()">

<img src="<?=base_url();?>images/quangcao.png" width='500' height = '300'  /> 

<img src="<?=base_url();?>images/quangcao1.jpg" width='500' height = '300'  />

<img src="<?=base_url();?>images/quangcao2.jpg" width='500' height = '300'   />

<img src="<?=base_url();?>images/quangcao3.jpg" width='500' height = '300' />

</marquee>
		</div>
			</div>				
			<!-- //slider-->
		</div>
	</div>
		<!---->
		<div class="container">
			<div class="content">
				<div class="content-top">
					<h3 class="future">Mặt Hàng</h3>
					<div class="content-top-in">
						
						<?php foreach ($hang as $value) {
						
						 ?>
						<div class="col-md-3">
							<div class="col-md">
                        <img src="<?=base_url().$value['hinhanh']?>" alt="<?=$value['tenhang'] ?>" >
              
                        <h4>Giá: <?=$value['giahang'] ?></h4>
                        <h3><?=$value['tenhang'] ?></h3>
					<form action="<?=base_url();?>index.php/qlbh_controller/themGiohang" method="post" accept-charset="utf-8">
    <input type="hidden" name="id" value="<?=$value['id_mathang'] ?>">
    <input type="hidden" name="name" value="<?=$value['tenhang']; ?>">
    <input type="hidden" name="price" value="<?=$value['giahang'] ?>"> 
    <input type="hidden" name="anh" value="<?=$value['hinhanh'] ?>">                     
                        <p id="add_button"> <input class="btn btn-danger" type="submit" name="action" value="Thêm Vào Giỏ Hàng" class="fg-button teal"/></p>
				 </form>                          
        
								</div>							
							</div>
						
					<?php  } ?>
						</div>
					<div class="clearfix"></div>
					</div>
				</div>
				<!---->
					<?php
		for($i=0;$i<30;$i++)
		{
			?>
		<br>
		<?PHP
		}
		?>




				<div class="content-bottom">
					<div class="content-bottom-in">
				<ul class="start">
					<li ><a href="#"><i></i></a></li>
					<li><span>1</span></li>
					<li class="arrow"><a href="#">2</a></li>
					<li class="arrow"><a href="#">3</a></li>
					<li class="arrow"><a href="#">4</a></li>
					<li class="arrow"><a href="#">5</a></li>
					<li ><a href="#"><i  class="next"> </i></a></li>
				</ul>
			</div>
		</div>
		<!---->
		<div class="footer">
			<div class="footer-top">
				<div class="container">
					<div class="col-md-4 footer-in">
						<h4><i> </i>Tiện Dụng</h4>
					</div>
					<div class="col-md-4 footer-in">
						<h4><i class="cross"> </i>Nhanh Chóng</h4>
					</div>
					<div class="col-md-4 footer-in">
						<h4><i class="down"> </i>Uy Tín</h4>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!---->
			<div class="footer-middle">
				<div class="container">
					<div class="footer-middle-in">
						<h6>About us</h6>
						<p>67DCHT23</p>
						<p>UTT</p>
					</div>
					<div class="footer-middle-in">
						<h6>Information</h6>
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Delivery Information</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Terms & Conditions</a></li>
						</ul>
					</div>
					<div class="footer-middle-in">
						<h6>Customer Service</h6>
						<ul>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="#">Returns</a></li>
							<li><a href="#">Site Map</a></li>
						</ul>
					</div>
					<div class="footer-middle-in">
						<h6>My Account</h6>
						<ul>
							<li><a href="account.html">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="wishlist.html">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="footer-middle-in">
						<h6>Extras</h6>
						<ul>
							<li><a href="#">Brands</a></li>
							<li><a href="#">Gift Vouchers</a></li>
							<li><a href="#">Affiliates</a></li>
							<li><a href="#">Specials</a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<p class="footer-class">Design by MĐ </p>

				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

		</div>
</body>
</html>