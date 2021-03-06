<!DOCTYPE html>
<html lang="es">
<head>
    <title>FastBuy - Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="shortcut icon" type="image/x-icon" href="../sources/images/favicon.ico">
    <!--Import materialize.css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
</head>
<body>
<header>
    <!-- Dropdown Structure -->
    <ul id="dropdown_settings" class="dropdown-content">
        <li><a href="summary.html" class="waves-effect primary-text">Resumen</a></li>
        <li class="divider"></li>
        <li><a href="../login.html" class="waves-effect primary-text">Cerrar sesión</a></li>
    </ul>
    <div class="navbar-fixed">
        <nav class="primary">
            <div id="header_nav" class="container">
                <div class="nav-wrapper">
                    <a href="l_events.html" class="brand-logo">Catálogo de productos</a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul id="ul_nav" class="right hide-on-med-and-down">
                        <li><a href="l_events.html" class="waves-effect" title="Inicio"><i class="material-icons">home</i></a></li>
                        <li class="active"><a href="products.html" class="waves-effect" title="Catálogo"><i class="material-icons">store</i></a></li>
                        <li><a href="offers.html" class="waves-effect" title="Ofertas"><i class="material-icons">star</i></a></li>
                        <li><a href="sales.html" class="waves-effect" title="Ventas"><i class="icon-moneybag"></i></a></li>
                        <li><a id="user_name_nav" class="dropdown-button waves-effect" data-activates="dropdown_settings" href="#!" title="Nombre de usuario"><i class="material-icons right">person</i><span id="nick_name">Nombre del usuario xd xd xd xd :v :v :v :v lol Lore.</span></a>
                        </li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="l_events.html" class="waves-effect">Inicio</a></li>
                        <li class="active"><a href="products.html" class="waves-effect">Productos</a></li>
                        <li><a href="offers.html" class="waves-effect">Ofertas</a></li>
                        <li><a href="sales.html" class="waves-effect">Ventas</a></li>
                        <li class="no-padding">
                            <ul id="dropdown_settings" class="collapsible" data-collapsible="accordion">
                                <li class="bold">
                                    <a href="#!" class="collapsible-header waves-effect"><i class="material-icons right">arrow_drop_down</i>Mi cuenta</a>
                                    <div class="collapsible-body">
                                        <ul class="normal">
                                            <li><a href="summary.html" class="waves-effect">Resumen</a></li>
                                            <li class="divider"></li>
                                            <li><a href="../login.html" class="waves-effect">Cerrar sesión</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<main>
    <div class="container">
        @yield('content')
    </div>
</main>
<footer class="page-footer primary-dark">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h5 class="white-text">
                    FastBuy
                </h5>
                <p class="white-text light">
                    Made with ♥ by Digimundo
                </p>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2016 FastBuy, All rights reserved.
        </div>
    </div>
</footer>
<!-- Scripts -->
<script type="text/javascript" src="{{ asset('js/jquery-2.1.1-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>