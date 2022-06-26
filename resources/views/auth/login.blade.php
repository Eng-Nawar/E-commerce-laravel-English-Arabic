<!DOCTYPE html>
<html lang="en">
<head>
<title>{{ trans('headertrans.shamel') }}</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

  
   
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href={{ asset('assets/css/bootstrap.min.css') }} type="text/css">
    <link rel="stylesheet" href={{ asset('assets/css/font-awesome.min.css') }} type="text/css">
    <link rel="stylesheet" href={{ asset('assets/css/elegant-icons.css') }} type="text/css">
    <link rel="stylesheet" href={{ asset('assets/css/nice-select.css') }} type="text/css">
    <link rel="stylesheet" href={{ asset('assets/css/jquery-ui.min.css') }} type="text/css">
    <link rel="stylesheet" href={{ asset('assets/css/owl.carousel.min.css') }} type="text/css">
    <link rel="stylesheet" href={{ asset('assets/css/slicknav.min.css') }} type="text/css">

     
     
      
     <!-- Template Main JS File -->
     <script src={{ asset('assets/js/jquery-3.3.1.min.js') }}></script>
    <script src={{ asset('assets/js/bootstrap.min.js') }}></script>
    <script src={{ asset('assets/js/jquery.nice-select.min.js') }}></script>
    <script src={{ asset('assets/js/jquery-ui.min.js') }}></script>
    <script src={{ asset('assets/js/jquery.slicknav.js') }}></script>
    <script src={{ asset('assets/js/mixitup.min.js') }}></script>
    <script src={{ asset('assets/js/owl.carousel.min.js') }}></script>
   <script src={{ asset('assets/js/main.js') }}></script>

   <!--- Style css -->


@if (App::getLocale() == 'en')
<link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
@else
<link href="{{ URL::asset('assets/css/styleara.css') }}" rel="stylesheet">
@endif


</head>
<body>
@include('layouts.header');
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ trans('auth.login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ trans('auth.Mobile') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autofocus>

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ trans('auth.pass') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ trans('auth.remember') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ trans('auth.login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ trans('auth.forget') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer');

    

</body>
</html>






