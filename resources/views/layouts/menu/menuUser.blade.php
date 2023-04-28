<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GESTION DES VOTES</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>         
    <nav class="navbar navbar-expand-lg  bg-primary">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-pills nav-justified">
                <li class="nav-item  navbar-brand ">
                    <a class="nav-link mw-20" href="/home"><h3 class="text-white"> ACCEUIL</h3></a>
                </li> 
                
                <li class="nav-item navbar-brand justify-content-end">
                        <button type="button" class="btn btn-warning">
                            <a class="nav-link" href="signout">SE DECONNECTER</a>
                        </button>
                
                </li>
            </ul>
        </div>
    </nav>
    
    @yield('content')
</body>
</html>