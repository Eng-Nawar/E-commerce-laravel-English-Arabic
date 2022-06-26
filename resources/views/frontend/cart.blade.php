@extends('layouts.emptylayout')
@section('title','Cart Page')
@section('content')

	
			
	<!-- Shopping Cart -->
	<div class="shopping-cart section" style="margin-bottom: 15%;">
		@if(helper::cartCount())
	
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>{{ trans('carttrans.PRODUCT') }}</th>
								<th>{{ trans('carttrans.NAME') }}</th>
								<th class="text-center">{{ trans('carttrans.UNITPRICE') }}</th>
								<th class="text-center">{{ trans('carttrans.QUANTITY') }}</th>
								<th class="text-center">{{ trans('carttrans.TOTAL') }}</th> 
								<th class="text-center">{{ trans('carttrans.COMMENT') }}</th> 
								<th class="text-center">{{ trans('carttrans.Action') }}</i></th>
							</tr>
						</thead>
						<tbody id="cart_item_list">
							<form action="{{route('cart.update')}}" method="POST">
								@csrf
								@if(helper::getAllProductFromCart())
									@foreach(Helper::getAllProductFromCart() as $key=>$cart)
										<tr>
											@php 
											$photo=explode(',',$cart->product['photo']);
											@endphp
											<td class="image" data-title="No"><img src="{{$photo[0]}}" class="img-fluid zoom" style="max-width:80px" alt="{{$photo[0]}}"></td>
											
											<td class="product-des" data-title="Description">
												<p class="product-name"><a href="{{route('product-detail',$cart->product['slug'])}}" target="_blank">{{$cart->product['title']}}</a></p>
												<p class="product-des">{!!($cart['summary']) !!}</p>
											</td>
											<td class="price" data-title="Price"><span>{{number_format($cart['price'],0)}}</span></td>
											<td class="qty" data-title="Qty"><!-- Input Order -->
												<div class="input-group">
													<div class="button minus">
														<button type="button" class="btn btn-primary btn-number" data-type="minus" data-field="quant[{{$key}}]" onclick="down(1)">
															<span class="glyphicon glyphicon-plus">-</span>
														</button>
													</div>
													<input type="text" name="quant[{{$key}}]" size="5" class="input-number"  data-min="1" data-max="100" value="{{$cart->quantity}}" id="quantity">
													<input type="hidden" name="qty_id[]" value="{{$cart->id}}">
													<div class="button plus">
														<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[{{$key}}]" onclick="up(100)">
															<span class="glyphicon glyphicon-plus">+</span>
														</button>
													</div>

													<script>
														function up(max) {
															document.getElementById("quantity").value = parseInt(document.getElementById("quantity").value) + 1;
															if (document.getElementById("quantity").value >= parseInt(max)) {
																document.getElementById("quantity").value = max;
															}
														}
														function down(min) {
															document.getElementById("quantity").value = parseInt(document.getElementById("quantity").value) - 1;
															if (document.getElementById("quantity").value <= parseInt(min)) {
																document.getElementById("quantity").value = min;
															}
														}
													 </script>
												</div>
												<!--/ End Input Order -->
											</td>
											<td class="total-amount cart_single_price" data-title="Total"><span class="money">{{$cart['amount']}}</span></td>
											<td>{{$cart['comment']}}</td>
											<td class="action text-center" data-title="Remove"><a href="{{route('cart-delete',$cart->id)}}"><i class="fa fa-trash fa-2x" style="color:blue;"></i></a></td>
										</tr>
									@endforeach
									<track>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td class="float-right">
											<button class="btn float-right btn btn-primary" type="submit">{{ trans('carttrans.Update') }}</button>
										</td>
									</track>
								@else 
										<tr>
											<td class="text-center">
												{{ trans('carttrans.noproducta') }}<a href="{{ route('home') }}" style="color:blue;">Continue shopping</a>

											</td>
										</tr>
								@endif
								
							</form>
						</tbody>
					</table>
					<!--/ End Shopping Summery -->
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<!-- Total Amount -->
					<div class="total-amount">
						<div class="row">
							
							<div class="col-lg-4 col-md-7 col-12">
								<div class="right">
									<ul>
										<li class="order_subtotal" data-price="{{Helper::totalCartPrice()}}">{{ trans('carttrans.CartSubtotal') }} <span>{{number_format(Helper::totalCartPrice(),2)}}</span></li>
									
										
										@php
											$total_amount=Helper::totalCartPrice();
											
										@endphp
										
											<li class="last" id="order_total_price">{{ trans('carttrans.YouPay') }}<span>{{number_format($total_amount,2)}}</span></li>
										
									</ul>
									<div class="button5" style="margin-top: 10%">
										<a href="{{route('checkout')}}" class="btn btn-primary">{{ trans('carttrans.Checkout') }}</a>
										<a href="{{ url('/') }}" class="btn btn-primary">{{ trans('carttrans.continue') }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/ End Total Amount -->
				</div>
			</div>
		</div>
		@else
		<h3>{{ trans('carttrans.noproducta') }}</h3>

	@endif
	</div>
	<!--/ End Shopping Cart -->
			
	<!-- Start Shop Services Area  -->
	<section class="shop-services section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="fa fa-motorcycle fa-4x"></i>
						<h4>{{ trans('carttrans.Free') }}</h4>
						<p>{{ trans('carttrans.Ordersover') }}</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<img src="{{ asset('assets/img/return1.png') }}"/>
						<h4>{{ trans('carttrans.FreeReturn') }}</h4>
						<p>{{ trans('carttrans.returns') }}</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="fa fa-lock fa-4x"></i>
						<h4>{{ trans('carttrans.SucurePayment') }}</h4>
						<p>{{ trans('carttrans.100securepayment') }}</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="fa fa-tags fa-4x"></i>
						<h4>{{ trans('carttrans.Bestprice') }}</h4>
						<p>{{ trans('carttrans.Guaranteedprice') }}</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>

	
	
	
	
@endsection
@push('styles')
	<style>
		li.shipping{
			display: inline-flex;
			width: 100%;
			font-size: 14px;
		}
		li.shipping .input-group-icon {
			width: 100%;
			margin-left: 10px;
		}
		.input-group-icon .icon {
			position: absolute;
			left: 20px;
			top: 0;
			line-height: 40px;
			z-index: 3;
		}
		.form-select {
			height: 30px;
			width: 100%;
		}
		.form-select .nice-select {
			border: none;
			border-radius: 0px;
			height: 40px;
			background: #f6f6f6 !important;
			padding-left: 45px;
			padding-right: 40px;
			width: 100%;
		}
		.list li{
			margin-bottom:0 !important;
		}
		.list li:hover{
			background:#F7941D !important;
			color:white !important;
		}
		.form-select .nice-select::after {
			top: 14px;
		}
		.resizedTextbox {width: 50px; height: 20px}
	</style>
@endpush
@push('scripts')
	<script src="{{asset('frontend/js/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{ asset('frontend/js/select2/js/select2.min.js') }}"></script>
	<script>
		$(document).ready(function() { $("select.select2").select2(); });
  		$('select.nice-select').niceSelect();
	</script>
	<script>
		$(document).ready(function(){
			$('.shipping select[name=shipping]').change(function(){
				let cost = parseFloat( $(this).find('option:selected').data('price') ) || 0;
				let subtotal = parseFloat( $('.order_subtotal').data('price') ); 
				 
				// alert(coupon);
				$('#order_total_price span').text('$'+(subtotal).toFixed(2));
			});

		});

	</script>

@endpush