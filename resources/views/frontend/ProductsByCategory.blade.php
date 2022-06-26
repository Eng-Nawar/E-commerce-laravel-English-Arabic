@extends('layouts.emptylayout')
@section('content')
<div class="row featured__filter">

    @forelse ($products as $p)
 

    <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
        <div class="featured__item">
          <div class="featured__item__pic set-bg" data-setbg={{ $p->photo }}>
            <ul class="featured__item__pic__hover">
              <li><a href="#"><i class="fa fa-heart"></i></a></li>
              <li><a href="{{ route('product-detail', $p->slug ) }}"><img src="{{ asset('assets/img/product1.png') }}"/></a></li>
              <li><a href=""><i class="fa fa-shopping-cart"></i></a></li>
             
           
            </ul>
          </div>
          <div class="featured__item__text">
            <h6><a href="#">{{ $p->title }}</a></h6>
            <h5>{{ $p->price }} SP</h5>
          </div>
        </div>
      </div>
    
        
      @empty
      <h3>No Products</h3>
   @endforelse
    
  </div>
@endsection







