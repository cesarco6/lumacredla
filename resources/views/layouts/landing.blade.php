<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8"> 
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/swal/sweetalert2.min.css')}}" />
</head>
<body>
<div class="wrapper wizard d-flex clearfix multisteps-form h-100 position-relative" style="margin-top: 10px;">
    <div class="steps order-2 h-100 w-25" >
        @include('layouts._partials.progress')
       @include('layouts._partials.footer')          
    </div>
    <div class="multisteps-form__form w-75 order-1 position-relative h-100" action="#" id="wizard">
    @include('layouts._partials.presentation')  
    <div class="form-area position-relative">
        @yield('content')
    </div>     
    </div>
    
</div>    
    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/swal/sweetalert2.min.js')}}"></script>
</body>
</html>