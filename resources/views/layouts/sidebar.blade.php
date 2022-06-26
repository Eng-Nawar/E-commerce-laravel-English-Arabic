<section class="hero">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="hero__categories">
            <div class="hero__categories__all">
              <i class="fa fa-bars"></i>
              <span>{{ trans('sidabartrans.AllDepartments') }}</span>
            </div>
            <ul>
              <li><a href="{{ route('product-cat','2') }}">{{ trans('sidabartrans.All') }}</a></li>
              <li><a href="{{ route('product-cat','3') }}">{{ trans('sidabartrans.Desert') }}</a></li>
              <li><a href="{{ route('product-cat','4') }}">{{ trans('sidabartrans.FastFood') }}</a></li>
              <li><a href="{{ route('product-cat','5') }}">{{ trans('sidabartrans.Grocery') }}</a></li>
              <li><a href="{{ route('product-cat','6') }}">{{ trans('sidabartrans.Vegetables') }}</a></li>
              <li><a href="{{ route('product-cat','7') }}">{{ trans('sidabartrans.SchoolStationary') }}</a></li>
              <li><a href="{{ route('product-cat','8') }}">{{ trans('sidabartrans.AccessoriesandPerfumes') }}</a></li>
              <li><a href="{{ route('product-cat','9') }}">{{ trans('sidabartrans.Gifts') }}</a></li>
              <li><a href="{{ route('product-cat','10') }}">{{ trans('sidabartrans.Fashions') }}</a></li>
              <li><a href="{{ route('product-cat','11') }}">{{ trans('sidabartrans.Home') }}</a></li>
              <li><a href="{{ route('product-cat','12') }}">{{ trans('sidabartrans.Toys') }}</a></li>
              <li><a href="{{ route('product-cat','13') }}">{{ trans('sidabartrans.Toaster') }}</a></li>
              <li><a href="{{ route('product-cat','14') }}">{{ trans('sidabartrans.Smoke') }}</a></li>
              <li><a href="{{ route('product-cat','15') }}">{{ trans('sidabartrans.Beauty') }}</a></li>
              <li><a href="{{ route('product-cat','16') }}">{{ trans('sidabartrans.SpecialOrders') }}</a></li>
  
            </ul>
          </div>
        </div>
        <div class= "col-lg-9">
          <div class="hero__search">
            <div class="hero__search__form">
              <form method="POST" action="{{ route('product.search') }}">
                @csrf
                <input type="text" name="search" style="text-align: left;" placeholder="{{ trans('sidabartrans.Whatdoyouneed') }}" />
                <button type="submit" class="site-btn">{{ trans('sidabartrans.search') }}</button>
              </form>
            </div>
            <div class="hero__search__phone">
              <div class="hero__search__phone__icon">
                <i class="fa fa-phone"></i>
              </div>
              <div class="hero__search__phone__text">
                <h5>12345678</h5>
                <span>{{ trans('sidabartrans.support') }}</span>
              </div>
            </div>
          </div>
          <section id="content">
            
            <div class="inside">
              @yield('content')
             </div>
          </section>
         
        </div>
      </div>
    </div>

    
  </section>