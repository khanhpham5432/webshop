@extends('layouts/application')

@section('order')
<div class="container-fluid">
	<form action="" method="POST" role="form" style="padding: 20px 0;">
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-6">
				<legend>Thông tin giao hàng</legend>
				<i>Giao hàng tận nhà chỉ áp dụng ở TP HCM</i>
				<div class="form-group">
				<label for="">Tên: </label>
				<input type="text" class="form-control" id="ten" name="ten" value="">
			</div>
			<div class="form-group">
				<label for="">Số điện thoại: </label>
				<input type="number" class="form-control" name="sodt" id="order_tel" value="">
			</div>
			<div class="form-group">
				<label for="">Quận: </label>
				<select class="form-control" name="quan" id="quan">
					<option  value="Quận 1">Quận 1</option>
					<option  value="Quận 2">Quận 2</option>
					<option  value="Quận 1">Quận 3</option>
					<option  value="Quận 4">Quận 4</option>
					<option  value="Quận 5">Quận 5</option>
					<option  value="Quận 6">Quận 6</option>
					<option  value="Quận 7">Quận 7</option>
					<option  value="Quận 8">Quận 8</option>
					<option  value="Quận 9">Quận 9</option>
					<option  value="Quận 10">Quận 10</option>
					<option  value="Quận 11">Quận 11</option>
					<option  value="Quận 12">Quận 12</option>
					<option  value="Quận Thủ Đức">Quận Thủ Đức</option>
					<option  value="Quận Bình Thạnh">Quận Bình Thạnh</option>
					<option  value="Quận Gò Vấp">Quận Gò Vấp</option>
					<option  value="Quận Tân Bình">Quận Tân Bình</option>
					<option  value="Quận Bình Tân">Quận Bình Tân</option>
				</select>
			</div>
			<div class="form-group">
				<label for="">Địa chỉ cụ thể: </label>
				<input type="text" class="form-control" name="dc" id="addr"  value="">
			</div>
				<a href="{{route('thanh_cong')}}" class="btn btn-primary btn-lg pull-right">Xác nhận</a><br><br>
			</div>

			<div class="col-lg-4">
				<h4>Thông tin đơn hàng</h4>
				<table class="table" style="font-size: 14px; background-color: #eaeaea">
					<tbody>
					@foreach($cart->items as $items)
						<tr>
							<td><img src="{{asset('application')}}/{{$items['img']}}"  class='sanpham' data-masp="{{$items['id']}}" style="width: 50px"></td>
							<td>{{$items['name']}}</td>
							<td class="prices" data-price="{{$items['price']}}">{{$items['price']}} "x" <input type="number" name="num[]" class="num" value="<{{$items['quantity']}}" style="width: 40px"></td>
						</tr>
					@endforeach
						<tr>
							<td colspan="4" style="text-align: right;">
								<h3><b>Tổng tiền: <span style="color: red"></b><span id='totalPrice' style="color: red; font-size: 28px;">								
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</form>
</div>
@stop