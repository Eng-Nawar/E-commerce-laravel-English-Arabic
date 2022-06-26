<header class="header">
    <div class="header__top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="header__top__left">
              <ul>
                <li><i class="fa fa-envelope"></i> info@shamel.com</li>
                <li>{{ trans('headertrans.shippingfree') }}</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="header__top__right">
              <div class="header__top__right__social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
              
               
              </div>
              <div class="header__top__right__language">
                
                  @if (App::getLocale() == 'ar')
                  {{ LaravelLocalization::getCurrentLocaleName() }}
                  <img src={{ asset('assets/img/ar.png') }} alt="" />
                  
                  @else
                  {{ LaravelLocalization::getCurrentLocaleName() }}
                  <img src={{ asset('assets/img/language.png') }} alt="" />
                
                  @endif
                


                
                <span class="arrow_carrot-down"></span>
                <ul>
                  @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                      <li>
                          <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                              {{ $properties['native'] }}
                          </a>
                      </li>
                  @endforeach
              </ul>
              </div>
              
              <div class="header__top__right__auth">
                @if (Route::has('login'))

                @auth
                   <p>{{ trans('headertrans.Welcome') }} {{ Auth::user()->name }}</p>
                   @if(Auth::user()->role=='admin')
                                     <a href="{{route('home')}}">{{ trans('headertrans.admindhashboard') }}</a>
                                @else 
                                     <a href="{{route('user')}}">{{ trans('headertrans.dashboard') }}</a>
                                @endif
                   <a href="{{ route('logout') }}"><i class="fa fa-user"></i> {{ trans('headertrans.logout') }}</a>

                @else
                   <a href="{{ route('login') }}"><i class="fa fa-user"></i> {{ trans('headertrans.login') }}</a>
            
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" ><i class="fa fa-user"></i>{{ trans('headertrans.Register') }}</a>
                    @endif
                @endauth
            
            @endif


               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="header__logo">
    
               <a href="{{ url('/') }}" class="logo">{{ trans('headertrans.shamel') }}</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="header__menu">
            <ul>
              <li class="active"><a href="{{ url('/') }}">{{ trans('headertrans.home') }}</a></li>
           
              <li><a href="#">{{ trans('headertrans.pages') }}</a>
                <ul class="header__menu__dropdown">
           
                  <li><a href="{{ route('cart') }}">{{ trans('headertrans.shoppingcart') }}</a></li>
                  <li><a href="#">{{ trans('headertrans.checkout') }}</a></li>
                
                </ul>
              </li>
            
              <li><a href="{{ route('contact') }}">{{ trans('headertrans.contactus') }}</a></li>
              <li><a href="{{ route('aboutUs') }}">{{ trans('headertrans.aboutus') }}</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-lg-3">
          <div class="header__cart">
            <ul>
              <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
              <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
         
          </div>
        </div>
      </div>
      <div class="humberger__open">
        <i class="fa fa-bars"></i>
      </div>
    </div>
  </header>