@extends('layouts.emptylayout')
@section('title','Checkout Page')
@section('content')
            
    <!-- Start Checkout -->
        <div class="container" style="margin-bottom: 15%;">
                <form class="form" method="POST" action="{{ route('cart.order') }}">
                    @csrf
                    <div class="row"> 

                        <div class="col-lg-8 col-12">
                            <div class="checkout-form">
                                <h3 style="padding-bottom: 30px;">{{ trans('carttrans.MakeYourCheckout') }}</h3>
                             
                                <!-- Form -->
                                <div class="row">
									<table>
										<tr>
											<td>
												<div class="form-group">
													<label>{{ trans('carttrans.FirstName') }}<span>*</span></label>
													<input type="text" name="first_name" placeholder="" required value="{{old('first_name')}}" value="{{old('first_name')}}">
													@error('first_name')
														<span class='text-danger'>{{$message}}</span>
													@enderror
												</div>
											</td>
											<td>
												<div class="form-group">
													<label>{{ trans('carttrans.LastName') }}<span>*</span></label>
													<input type="text" name="last_name" placeholder="" value="{{old('lat_name')}}">
													@error('last_name')
														<span class='text-danger'>{{$message}}</span>
													@enderror
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="form-group">
													<label>{{ trans('carttrans.PhoneNumber') }}<span>*</span></label>
													<input type="text" name="phone" placeholder="" required value="{{old('phone')}}">
													@error('phone')
														<span class='text-danger'>{{$message}}</span>
													@enderror
												</div>
											</td>
											<td>
												<div class="form-group">
													<label>{{ trans('carttrans.AddressLine') }}<span>*</span></label>
													<input type="text" name="address1" required placeholder="" value="{{old('address1')}}">
													@error('address1')
														<span class='text-danger'>{{$message}}</span>
													@enderror
												</div>
											</td>
										</tr>
									</table>
                                  
                                   
                                   
                                   
                                   
                                </div>
                                <!--/ End Form -->
                            </div>
                        <div>
                            
                                <div class="order-details">
                                    <!-- Order Widget -->
                                    <div class="single-widget">
                                        <h4 style="padding-bottom: 15px">{{ trans('carttrans.Carttotal') }}</h4>
                                        <div class="content">
                                            
                                    <span>{{ trans('carttrans.S.P') }}{{number_format(Helper::totalCartPrice(),2)}}</span>
                                                
                                                
                                               
                                            
                                        </div>
                                    </div>
                                    <!--/ End Order Widget -->
                                <div>
                                </div>
                                    <!-- Payment Method Widget -->
                                    <div class="single-widget payement">
                                        <div class="content">
                                            <h4 style="padding-bottom: 30px; padding-top: 20px;">{{ trans('carttrans.Cashondelivery') }}</h4>
                                        </div>
                                    </div>
                                    <!--/ End Payment Method Widget -->
                                    <!-- Button Widget -->
                                    <div class="single-widget get-button">
                                        <div class="content">
                                            <div class="button">
                                                <button type="submit" class="btn btn-primary">{{ trans('carttrans.proceedtocheckout') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ End Button Widget -->
                                </div>
                            
                        </div>
                        </div>
                       
                    </div>
                </form>
        </div>
    </section>
    <!--/ End Checkout -->
    
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
		function showMe(box){
			var checkbox=document.getElementById('shipping').style.display;
			// alert(checkbox);
			var vis= 'none';
			if(checkbox=="none"){
				vis='block';
			}
			if(checkbox=="block"){
				vis="none";
			}
			document.getElementById(box).style.display=vis;
		}
	</script>
	<script>
		$(document).ready(function(){
			$('.shipping select[name=shipping]').change(function(){
				let cost = parseFloat( $(this).find('option:selected').data('price') ) || 0;
				let subtotal = parseFloat( $('.order_subtotal').data('price') ); 
				let coupon = parseFloat( $('.coupon_price').data('price') ) || 0; 
				// alert(coupon);
				$('#order_total_price span').text('$'+(subtotal + cost-coupon).toFixed(2));
			});

		});

	</script>

@endpush