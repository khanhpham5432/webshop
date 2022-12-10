@extends('layouts/application')

@section('signup')
<div class="errorMes"></div>
<div class="container-fluid form" style="padding: 20px">
	<div class="row">
		<div class="col-lg-3"></div>
		<div class="col-lg-6">
			<form action="" method="POST" role="form">
			@csrf
				<legend>Đăng Ký</legend>
			
				<div class="form-group">
					<label for="">Tên: </label>
					<input type="text" class="form-control" name="ten">
				</div>
				<div class="form-group">
					<label for="">Tên tài khoản: </label>
					<input type="text" class="form-control" name="tentaikhoan">
				</div>
				<div class="form-group">
					<label for="">Mật khẩu: </label>
					<input type="password" class="form-control" name="matkhau">
				</div>
				<div class="form-group">
					<label for="">Nhập lại mật khẩu: </label>
					<input type="password" class="form-control" name="cpassword">
				</div>
				<div class="form-group">
					<label for="">Địa chỉ: </label>
					<input type="text" class="form-control" name="diachi">
				</div>
				<div class="form-group">
					<label for="">Số điện thoại: </label>
					<input type="text" class="form-control" name="sodt">
				</div>
				<div class="form-group">
					<label for="">Email: </label>
					<input type="email" class="form-control" name="email">
				</div>
				
			
				<!-- <div class="btn btn-primary" onclick="register()">Submit</div><br><br> -->
				<button type="submit" class = "btn btn-primary"> Submit</button><br><br>
				<a href="signin" style="float: right;">Đăng nhập</a><br>
			</form>
		</div>
		<div class="col-lg-12"></div>
	</div>
</div>
@stop