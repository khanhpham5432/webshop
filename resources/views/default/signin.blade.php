@extends('layouts/application')

@section('signin')
<div class="errorMes"></div>
<div class="container-fluid form" style="padding: 20px">
	<div class="row">
		<div class="col-lg-3"></div>
		<div class="col-lg-6">
			<form action="" method="POST" role="form">
				<legend>Đăng Nhập</legend>

				<div class="form-group">
					<label for="">Tên tài khoản: </label>
					<input type="text" class="form-control" name="username" id="username">
				</div>
				<div class="form-group">
					<label for="">Mật khẩu: </label>
					<input type="password" class="form-control" name="password" id="password">
				</div>
				<input type="checkbox" id="rmbme" value="rl"><label> Nhớ tài khoản</label><br>

				<div class="btn btn-primary" id="loginBtn">Submit</div><br><br>
				<!-- <input class="btn btn-primary" type="submit" value="Submit"><br><br> -->
				<a style="float: right;" class="abc">Quên mật khẩu?</a><br>
				<a href="signup" style="float: right;">Tạo tài khoản mới</a><br><br>
			</form>
		</div>
		<div class="col-lg-12"></div>
	</div>
</div>
@stop()