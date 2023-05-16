<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title') Recordatório</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- bootstrap -->
{{-- 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
 --}}
    
    <link rel="stylesheet" href="/css/bootstrap.min.css?h=cb606d99bb2418df19b6bc818b41e412">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="/css/styles.min.css?h=f92e49721c635c17c8f940e353247783">
</head>

<body id="page-top">
    @php
        $link = Request::segment(1);
    @endphp
        
        
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em"
                        fill="currentColor" class="fs-1">
                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M184 0C214.9 0 240 25.07 240 56V456C240 486.9 214.9 512 184 512C155.1 512 131.3 490.1 128.3 461.9C123.1 463.3 117.6 464 112 464C76.65 464 48 435.3 48 400C48 392.6 49.27 385.4 51.59 378.8C21.43 367.4 0 338.2 0 304C0 272.1 18.71 244.5 45.77 231.7C37.15 220.8 32 206.1 32 192C32 161.3 53.59 135.7 82.41 129.4C80.84 123.9 80 118 80 112C80 82.06 100.6 56.92 128.3 49.93C131.3 21.86 155.1 0 184 0zM383.7 49.93C411.4 56.92 432 82.06 432 112C432 118 431.2 123.9 429.6 129.4C458.4 135.7 480 161.3 480 192C480 206.1 474.9 220.8 466.2 231.7C493.3 244.5 512 272.1 512 304C512 338.2 490.6 367.4 460.4 378.8C462.7 385.4 464 392.6 464 400C464 435.3 435.3 464 400 464C394.4 464 388.9 463.3 383.7 461.9C380.7 490.1 356.9 512 328 512C297.1 512 272 486.9 272 456V56C272 25.07 297.1 0 328 0C356.9 0 380.7 21.86 383.7 49.93z">
                        </path>
                    </svg>
                    <div class="sidebar-brand-icon rotate-n-15">
                    </div>
                    <div class="sidebar-brand-text mx-3">
                        <span>Recordatório</span>
                    </div>
                </a>
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item">
                        <a class="nav-link {{ $link == 'alimentacao'?'active':'' }}" href="/alimentacao">
                            <span>Alimentação</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $link == 'psi' ?'active':'' }}" href="/psi">
                            <span>Psicologia
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $link ==  'cefaleia' ?'active':'' }}" href="/cefaleia">
                            <span>Cefaleia
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $link ==  'relatorio'?'active':'' }}" href="/relatorio">
                            <span>Relatório
                            </span>
                        </a>
                        <a class="nav-link {{ $link ==  'login' ?'active':'' }}" href="/login">
                            <span>Login
                            </span>
                        </a>
                    </li>
                </ul>
                <div class="text-center d-none d-md-inline">
                    <button class="btn rounded-circle border-0" id="sidebarToggle" type="button">
                    </button>
                </div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid">
                        <span><h3> 
                            @php
                                switch ($link) {
                                    case 'alimentacao':
                                        echo 'Alimentação';
                                        break;
                                     case 'psi':
                                        echo 'Evento Psicológico';
                                        break;
                                     case 'cefaleia':
                                        echo 'Cefaleia';
                                        break;
                                    
                                    default:
                                        # code...
                                        break;
                                }
                            @endphp
                        </h3></span>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow">
                                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown"
                                        href="#">
                                        <img class="border rounded-circle img-profile"
                                            src="/img/avatars/avatar.png">
                                    </a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-user fa-sm fa-fw me-2 text-gray-400">
                                            </i>&nbsp;Profile
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400">
                                            </i>&nbsp;Settings
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-list fa-sm fa-fw me-2 text-gray-400">
                                            </i>&nbsp;Activity log
                                        </a>
                                        <div class="dropdown-divider">
                                        </div>
                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400">
                                            </i>&nbsp;Logout
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright">
                        <span>Copyright © Brand 2023
                        </span>
                    </div>
                </div>
            </footer>
        </div>
        <a class="border rounded d-inline scroll-to-top" href="#page-top">
            <i class="fas fa-angle-up">
            </i>
        </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
    </script>
    <script src="/js/script.min.js?h=4d952d21517087db850f0bbc41a815ca">
    </script>
</body>
</html>