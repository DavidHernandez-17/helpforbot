<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('assets/Images/LogoAA.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
      <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <title>Help For Bot</title>
</head>
<body>
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white" style="border: solid 1px blue;">
        <div class="container">
        <img src="{{ asset('assets/Images/LogoAA.png') }}" class="brand-image img-circle elevation-3" style="opacity: .8; width: 30px">

        <a href="{{ route('indexImport') }}" class="navbar-brand">
            <span class="brand-text font-weight-light">HFB</span>
        </a>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{ route('indexImport') }}" class="nav-link">Inicio</a>
            </li>
        </div>
       
        </div>
    </nav>

    <div>
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</body>
</html>