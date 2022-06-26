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


@if (App::getLocale() == 'ar')
<link href="{{ URL::asset('assets/css/styleara.css') }}" rel="stylesheet">
@else
<link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
@endif


</head>
<body>