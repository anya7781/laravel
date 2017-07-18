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
        <h1 class="logo"><a href="#">LOGO</a></h1>


        <div class = "account">
            <a href = "account">
                <img src =  "{{ asset('images/account1.png') }}" width="40" height="40" />
                <p>Personal account</p>
            </a>
        </div>


        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li class="current"><a href="#">Latest Post</a></li>
                <li><a href="#">Archives</a></li>
                <li><a href="#">About Me</a></li>
                <li><a href="#">Contact Me</a></li>
            </ul>
        </nav>

        <!-- Search -->
        <section class="box search">
            <form method="post" action="#">
                <input type="text" class="text" name="search" placeholder="Search" />
            </form>
        </section>

        <!-- Categories -->
        <section class="box recent-comments">
            <header>
                <h2>Categories</h2>
            </header>
            <ul>
                <li><a href="#">1 category</a></li>
                <li><a href="#">2 category</a></li>
                <li><a href="#">3 category</a></li>
            </ul>
        </section>

        <!-- Recent Posts -->
        <section class="box recent-posts">
            <header>
                <h2>Recent Posts</h2>
            </header>
            <ul>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Feugiat nisl aliquam</a></li>
                <li><a href="#">Sed dolore magna</a></li>
                <li><a href="#">Malesuada commodo</a></li>
                <li><a href="#">Ipsum metus nullam</a></li>
            </ul>
        </section>


        <!-- Calendar -->
        <section class="box calendar">
            <div class="inner">
                <table>
                    <caption>July 2014</caption>
                    <thead>
                    <tr>
                        <th scope="col" title="Monday">M</th>
                        <th scope="col" title="Tuesday">T</th>
                        <th scope="col" title="Wednesday">W</th>
                        <th scope="col" title="Thursday">T</th>
                        <th scope="col" title="Friday">F</th>
                        <th scope="col" title="Saturday">S</th>
                        <th scope="col" title="Sunday">S</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="4" class="pad"><span>&nbsp;</span></td>
                        <td><span>1</span></td>
                        <td><span>2</span></td>
                        <td><span>3</span></td>
                    </tr>
                    <tr>
                        <td><span>4</span></td>
                        <td><span>5</span></td>
                        <td><a href="#">6</a></td>
                        <td><span>7</span></td>
                        <td><span>8</span></td>
                        <td><span>9</span></td>
                        <td><a href="#">10</a></td>
                    </tr>
                    <tr>
                        <td><span>11</span></td>
                        <td><span>12</span></td>
                        <td><span>13</span></td>
                        <td class="today"><a href="#">14</a></td>
                        <td><span>15</span></td>
                        <td><span>16</span></td>
                        <td><span>17</span></td>
                    </tr>
                    <tr>
                        <td><span>18</span></td>
                        <td><span>19</span></td>
                        <td><span>20</span></td>
                        <td><span>21</span></td>
                        <td><span>22</span></td>
                        <td><a href="#">23</a></td>
                        <td><span>24</span></td>
                    </tr>
                    <tr>
                        <td><a href="#">25</a></td>
                        <td><span>26</span></td>
                        <td><span>27</span></td>
                        <td><span>28</span></td>
                        <td class="pad" colspan="3"><span>&nbsp;</span></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Copyright -->
        <ul id="copyright">
            <li>&copy; Untitled.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>

    </div>

</div>

</body>
</html>