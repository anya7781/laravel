<!DOCTYPE HTML>
<!--
	Striped by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>TITLE</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src = "{{ asset('css/ie/html5shiv.js') }}"></script><![endif]-->
    <script src = "{{ asset('js/jquery.min.js') }}"></script>
    <script src = "{{ asset('js/skel.min.js') }}"></script>
    <script src = "{{ asset('js/skel-layers.min.js') }}"></script>
    <script src = "{{ asset('js/init.js') }}"></script>
    <noscript>
        <link rel="stylesheet" href = "{{ asset('css/skel.css') }}" />
        <link rel="stylesheet" href = "{{ asset('css/style.css') }}" />
        <link rel="stylesheet" href = "{{ asset('css/style-desktop.css') }}" />
        <link rel="stylesheet" href = "{{ asset('css/style-wide.css') }}" />
    </noscript>
    <!--[if lte IE 8]> <link rel="stylesheet" href = "{{ asset('css/ie/v8.css') }}" /><![endif]-->
</head>
<!--
    Note: Set the body element's class to "left-sidebar" to position the sidebar on the left.
    Set it to "right-sidebar" to, you guessed it, position it on the right.
-->
<body class="left-sidebar">

<!-- Wrapper -->
<div id="wrapper">


@yield('content')

<!-- Sidebar -->
    <div id="sidebar">

        <!-- Logo -->
        <p class="new"><a href="/new"> + New article</a></p>


        <div class = "account">
            <a href = "#">
                <img src =  "{{ asset('images/exit.png') }}" width="40" height="40" />
                <p>Log out</p>
            </a>
        </div>


        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li><a href="/" class = "my_articles"> Main page </a></li>
                <li><a href="/my_articles" class = "my_articles"> My acticles </a></li>
            </ul>
        </nav>


        <!-- Copyright -->
        <ul id="copyright">
            <li>&copy; Untitled.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>

    </div>

</div>

</body>
</html>