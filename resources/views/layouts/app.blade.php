<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    
    <title>@yield('title')</title>
    
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}" />
    
    <link rel="stylesheet" href="{{asset('frontend/style/main1.css')}}" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />
    
  </head>
  <body>

    @include('components.navbar')

    @yield('content')

    <!--  -->
    <!--  -->
    <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
  </body>
</html>
