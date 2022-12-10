<html lang="en">
<head>
	<title> WatchShop - Thể hiện sự lịch lãm của phái mạnh! </title>
	<meta charset="utf-8">
	<!-- <base href="/shopbandongho/public"> -->
	<!-- <link rel="SHORTCUT ICON')}}"  href=> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset('application/css/style.css')}}">

	<!-- File css -> file js -> file jquery -->
	<!-- Put script after jquery -->
	<link rel="stylesheet" href="{{asset('application/bootstrap/css/bootstrap.css')}}">
	<script src="{{asset('application/jquery/jquery-latest.js')}}"></script>
	<script type="text/javascript" src="{{asset('application/bootstrap/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('application/script/script.js')}}"></script>

	<!-- font used in this site -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet"> -->
	<link rel="stylesheet" type="text/css" href="{{asset('animate.css')}}">
</head>
<body>
	<header id='header'>
		<a href="{{route('trangchu')}}"><img src="{{asset('application/images/logo.png')}}"><h2 class="logo">WatchShop</h2></a>
		<ul class="header-menu">
			<?php
			if((!isset($_SESSION['user']))){ ?>
			<!-- if(($_SESSION['user']) == ""){ ?> -->
			<li><a href="signin" id="s-s" data-stt='nosignin'>Đăng nhập</a><div class='mn-ef'></div></li>
			<li><a href="signup">Đăng ký</a><div class='mn-ef'></div></li>
			<?php } else { ?>
			<li><a onclick="$('#user-setting').toggle()" id="s-s">Chào <?php echo $_SESSION['user']['ten'] ?></a><div class='mn-ef'></div></li>
			<div id='user-setting'>
				<ul>
					<a href="user/logout"><li>Đăng xuất</li></a>
					<a href="user/viewinfo"><li onclick="$('#user-setting').toggle()">Thông tin tài khoản</li></a>
					<a href="user/vieweditpassword"><li>Đổi mật khẩu</li></a>
				</ul>
			</div>
			<?php }
			?>
			<li><a href="{{route('cart_view')}}"><i class="glyphicon glyphicon-shopping-cart"></i> Giỏ hàng</a><div class="mn-ef"></div></li>
		</ul>
		<div class="header-detail">
			<p>Số 2, Đường Võ Oanh, P.25, Q. Bình Thạnh, Thành Phố Hồ Chí Minh<br>
				<i>Từ 8h - 22h Hằng ngày, kể cả Ngày lễ và Chủ nhật</i>
			</p>
		</div>
	</header>

	<nav class="navbar navbar-default" role="navigation" id="nav">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand logo" href="{{route('trangchu')}}">WatchShop</a>
				<div id="custom-search-input">
					<div class="input-group col-md-12" style="background-color: white;">
						<input type="text" class="form-control input-lg" placeholder="Bạn tìm gì?" id='src-v' />
						<span class="input-group-btn">
							<button class="btn btn-info btn-lg" type="button">
								<i class="glyphicon glyphicon-search"></i>
							</button>
						</span>
					</div>
				</div>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
				<li class="dropdown menu-name">
						<a class="dropdown-toggle" data-toggle="dropdown" style="cursor: pointer;">Danh mục sản phẩm <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="{{route('trangchu')}}">Tất cả sản phẩm</a></li>
							@foreach($cats as $cats)
								<li><a href="{{$cats->tendm}}" >{{$cats->tendm}}({{$cats->xuatsu}})</a></li>
							@endforeach
								
						</ul>
					</li>
					<!-- <li class="menu-name" id="dgg"><a href="product/List/OnSale">Đang giảm giá</a></li>
					<li class="menu-name" id="spm"><a href="product/List/Newest">Sản phẩm mới</a></li>
					<li class="menu-name" id="mntq"><a href="product/List/BestSelling">Mua nhiều tuần qua</a></li> -->
				</ul>
				<div style="cursor: pointer;"><a href="{{route('cart_view')}}" style="color: yellow"><i class="glyphicon glyphicon-shopping-cart navbar-right btn-lg" id="cart_count"> 
					{{$cart->total_quantity}}
				</i></a></div>
				<div class="navbar-form navbar-right searchbox-desktop">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Bạn tìm gì?" id='srch-val'>
					</div>
					<span class="btn btn-primary" id="searchBtn">Tìm</span>
				</div>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>

	<div id="bodyContainer">
		@yield('product')
		@yield('signin')
		@yield('signup')
		@yield('cart')
		@yield('buynow')
		@yield('PrdDetail')
		@yield('order')
		@yield('complete')
	</div>


	<div class="modal fade" id="modal-id" data-remote="" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content" id="modal-sanpham">


				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-8" style="text-align: center; padding: 20px 0;">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.0834633210225!2d106.71488905055544!3d10.80491946158352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528a405e4245f%3A0x64cd17debf114781!2zMiBWw7UgT2FuaCwgUGjGsOG7nW5nIDI1LCBCw6xuaCBUaOG6oW5oLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1637238647582!5m2!1svi!2s" width="300" height="300" frameborder="0" style="border:0" allowfullscreen id="maps"></iframe>
				</div>
				<div class="col-lg-4" id="contact">
					<h3>Contact</h3>
					<i class="glyphicon glyphicon-map-marker"></i><span> Q.Bình Thạnh, tp.HCM</span><br>
					<i class="glyphicon glyphicon-earphone"></i><span> 0123456789</span><br>
					<i class="glyphicon glyphicon-envelope"></i><span> WatchShop@gmail.com</span><br>
					<h4 style="line-height: 26px">Nhận email thông báo của chúng tôi khi có sản phẩm mới hay giảm giá:</h4>
					<form action="" method="POST" class="form-inline" role="form">
						<div class="form-group">
							<label class="sr-only" for="">label</label>
							<input type="email" class="form-control" id="" placeholder="your_email@example.com">
							<input type="submit" value="Submit">
						</div>
						<span class="btn btn-primary" onclick="alert('Bạn sẽ nhận được thông báo của chúng tôi khi có ưu đãi mới!')">Gửi</span>
					</form>
				</div>
				<div class="col-lg-12" id="copyright-txt">
					<!-- <b>All right reverse, &#169; copyright of WatchShop.com</b> -->
				</div>
			</div>
		</div>
	</footer>
	<div class="goTop">
		<a href="#header">
			<h5 style="color: white" class="glyphicon glyphicon-menu-up"></h5>
		</a>
	</div>
</body>
</html>

