<!DOCTYPE HTML>

<html>
<head>
    <title>TITLE</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href = "{{ asset('css/skel.css') }}" />
        <link rel="stylesheet" href = "{{ asset('css/style.css') }}" />
        <link rel="stylesheet" href = "{{ asset('css/style-desktop.css') }}" />
        <link rel="stylesheet" href = "{{ asset('css/style-wide.css') }}" />
</head>

<body class="left-sidebar">

<!-- Wrapper -->
<div id="wrapper">

@yield('content')

<!-- Sidebar -->
    <div id="sidebar">

        <!-- Logo -->
        <p class="new"><a href="/new"> + New article</a></p>


        <div class = "account">
            <a href = "/exit">
                <img src =  "{{ asset('images/exit.png') }}" width="40" height="40" />
                <p>Log out</p>
            </a>
        </div>


        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li><a href="/" class = "my_articles"> Main page </a></li>
                <li><a href="/account" class = "my_articles"> My profile </a></li>
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