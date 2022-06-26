<!DOCTYPE html>
<html lang="en">
<head>
<title>Shamel</title>
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
    <link rel="stylesheet" href={{ asset('assets/css/style.css') }} type="text/css">
     
     
      
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
<link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
@endif


</head>
<body>
@include('layouts.header');

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer');

    

</body>
</html>

