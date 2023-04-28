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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item  navbar-brand">
                        <a class="nav-link mw-20" href="/acceuil">ACCEUIL</a>
                    </li> 
                    <li class="nav-item navbar-brand">
                        <a class="nav-link" href="/candidat">LISTE CANDIDATS</a>
                    </li>
                    <li class="nav-item navbar-brand">
                        <a class="nav-link" href="/ajouter">AJOUTER CANDIDAT</a>
                    </li>
                    <li class="nav-item navbar-brand">
                        <a class="nav-link" href="electeur">LISTE ELECTEURS</a>
                    </li>
                    <li class="nav-item navbar-brand">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="button" class="btn btn-warning pull-right">
                                <a class="nav-link" href="signout">SE DECONNECTER</a>
                            </button>
                          </div>
                    </li>
                </ul>
            </div>
        </nav>

      @yield('content')
</body>
</html>