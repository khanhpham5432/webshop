@extends('layouts/application')


@section('product')
<div id="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 all-product" id="prdCtn">
				<h3 class="content-menu">
					Tất Cả Sản Phẩm
				</h3>
				@foreach ($prod as $prod)
					<div class='product-container'>
						<a data-toggle='modal' href='' data-target='#modal-id'>
							<div style="text-align: center;" class='product-img'>
								<img src="{{asset('application')}}/{{$prod->anhchinh}}" >
							</div>
							<div class='product-info'>
								<h4><b>{{$prod->tensp}}</b></h4>
								<b class='price'>Giá: {{$prod->gia}} VND</b>
								<div class='buy'>
									<a href="{{route('cart_add',['id' => $prod->masp])}}" class='btn btn-primary btn-md cart-container'>
									<i title='Thêm vào giỏ hàng' class='glyphicon glyphicon-shopping-cart cart-item'></i>
								</a>
								<a href="buynow/{{$prod->masp}}" class="snip0050"><span>Mua ngay</span><i class="glyphicon glyphicon-ok"></i>
								<a href="{{route('chitiet',['masp' => $prod->masp])}}" class="btn btn-xs btn-info pull-right">Detail</a>
								</a>
							</div>
						</div>
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</div>	
</div>
<div class="container-fluid text-center" style="padding: 15px;">
	<div class="row">
		<div class="col-sm-12">
			<button id="loadmoreBtn" onclick="loadmore(8)" class="snip1582">Load more</button>
		</div>
	</div>
</div>
<!-- <script type="text/javascript">
	var cr = $('#contentTitle').data('type');
	switch(cr){
		case 'onsale':
			$('#dgg').css('background-color','black');
			break;
		case 'newest':
			$('#spm').css('background-color','black');
			break;
		case 'bestselling':
			$('#mntq').css('background-color','black');
			break;
	}
</script> -->
@stop