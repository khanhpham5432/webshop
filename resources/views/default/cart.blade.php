@extends('layouts/application')

@section('cart')
<div class="container-fluid form" style="padding: 20px">
	<div class="row">
		<div class="col-sm-1">
		</div>
		<div class="col-sm-10">
			<h4> <i class="pull-right"><a href="{{route('trangchu')}}"> Quay lại mua sắm tiếp!</a></i></h4>
			<hr style="border: 1px solid #337ab7;">
			<form action="client/order" method="GET">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Ảnh</th>
							<th>Tên sản phẩm</th>
							<th>Đơn giá</th>
							<th>Số lượng</th>
							<th>Tùy chọn</th>
						</tr>
					</thead>
					<tbody>
						@foreach($cart->items as $key => $items)
						<tr>
							<td><img src="{{asset('application')}}/{{$items['img']}}" data-masp="{{$items['id']}}" style="width: 80px"></td>
							<td>{{$items['name']}}</td>
							<td class="prices" data-price="{{$items['price']}}">{{$items['price']}}</td>
							<td><input type="number" class="num" name="num[]"  value="1" class="form-control" style="width: 80px;" min='1'></td>
							<td><button class="btn btn-danger delPrd" data-masp="{{$items['id']}}" >Xóa</button></td>
						</tr>
						@endforeach
						<tr>
							<td colspan="4" style="text-align: right;">
								<h3><b>Tổng tiền: </b><span id='totalPrice' style="color: red; font-size: 28px;"></span> VND</h3>
							</td>
							<!-- <td><input type="submit" class="btn btn-primary btn-block btn-lg" id='orderBtn' value="Đặt Hàng"></td> -->
							<td><a href="{{route('dat_hang')}}" class="btn btn-success"> Đặt Hàng</a></td>
							<td><a href="{{route('cart_clear')}}" class="btn btn-danger"> Xóa Hết</a></td>
						</tr>
					</tbody>
				</table>
			</form>

		</div>
	</div>
</div>
<script>
	var price = 0;
	$('.prices').each(function(){
		price += parseInt($(this).data('price').replace(/\s/g,''));
	})
	price = price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
	$('#totalPrice').text(price);
	countPrice();
</script>

@stop