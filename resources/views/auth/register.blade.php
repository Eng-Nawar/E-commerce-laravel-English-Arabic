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
                <div class="card-header">{{ trans('auth.register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ trans('auth.name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ trans('auth.Mobile') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ trans('auth.confirmpass') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ trans('auth.register') }}
                                </button>
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


