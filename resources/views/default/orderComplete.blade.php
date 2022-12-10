@extends('layouts/application')

@section('complete')
<div class="row">
	<div class="col-sm-12">
		<div style="text-align: center;">
			<h3 style="color: green;">Đơn hàng của quý khách đã được đặt <b>THÀNH CÔNG</b>!</h3>
			<i>Quý khách sẽ sớm nhậm được cuộc gọi xác nhận của chúng tôi, cảm ơn quý khách</i>
			<a href="{{route('trangchu')}}">Quay lại trang chủ</a><br><br>
			<img src="{{asset('application/images/tks4buying.png')}}">
		</div>
	</div>
</div>
@stop