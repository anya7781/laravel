<!DOCTYPE HTML>
<!--
	Striped by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Striped by HTML5 UP</title>
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

    <!-- Content -->
    <div id="content">
        <div class="inner">

            <!-- Post -->
            <article class="box post post-excerpt">
                <header>
                    <!--
                        Note: Titles and subtitles will wrap automatically when necessary, so don't worry
                        if they get too long. You can also remove the <p> entirely if you don't
                        need a subtitle.
                    -->
                    <h2><a href="#">Welcome to Striped</a></h2>
                    <p>A free, fully responsive HTML5 site template by HTML5 UP</p>
                </header>
                <div class="info">
                    <!--
                        Note: The date should be formatted exactly as it's shown below. In particular, the
                        "least significant" characters of the month should be encapsulated in a <span>
                        element to denote what gets dropped in 1200px mode (eg. the "uary" in "January").
                        Oh, and if you don't need a date for a particular page or post you can simply delete
                        the entire "date" element.

                    -->
                    <span class="date"><span class="month">Jul<span>y</span></span> <span class="day">14</span><span class="year">, 2014</span></span>
                    <!--
                        Note: You can change the number of list items in "stats" to whatever you want.
                    -->
                    <ul class="stats">
                        <li><a href="#" class="icon fa-comment">16</a></li>
                        <li><a href="#" class="icon fa-heart">32</a></li>
                        <li><a href="#" class="icon fa-twitter">64</a></li>
                        <li><a href="#" class="icon fa-facebook">128</a></li>
                    </ul>
                </div>
                <a href="#" class="image featured"><img src="{{asset('images/pic01.jpg')}}" alt="" /></a>
                <p>
                    <strong>Hello!</strong> You're looking at <strong>Striped</strong>, a fully responsive HTML5 site template designed by <a href="http://n33.co">AJ</a>
                    for <a href="http://html5up.net">HTML5 UP</a> It features a clean, minimalistic design, styling for all basic page elements (including blockquotes, tables and lists), a
                    repositionable sidebar (left or right), and HTML5/CSS3 code designed for quick and easy customization (see code comments for details).
                </p>
                <p>
                    Striped is released for free under the <a href="http://html5up.net/license">Creative Commons Attribution license</a> so feel free to use it for personal projects
                    or even commercial ones &ndash; just be sure to credit <a href="http://html5up.net">HTML5 UP</a> for the design. If you like what you see here, be sure to check out
                    <a href="http://html5up.net">HTML5 UP</a> for more cool designs or follow me on <a href="http://twitter.com/n33co">Twitter</a> for new releases and updates.
                </p>
            </article>

            <!-- Post -->
            <article class="box post post-excerpt">
                <header>
                    <h2><a href="#">Lorem ipsum dolor sit amet</a></h2>
                    <p>Feugiat interdum sed commodo ipsum consequat dolor nullam metus</p>
                </header>
                <div class="info">
                    <span class="date"><span class="month">Jul<span>y</span></span> <span class="day">8</span><span class="year">, 2014</span></span>
                    <ul class="stats">
                        <li><a href="#" class="icon fa-comment">16</a></li>
                        <li><a href="#" class="icon fa-heart">32</a></li>
                        <li><a href="#" class="icon fa-twitter">64</a></li>
                        <li><a href="#" class="icon fa-facebook">128</a></li>
                    </ul>
                </div>
                <a href="#" class="image featured"><img src = "{{asset('images/pic02.jpg')}}" alt="" /></a>
                <p>
                    Quisque vel sapien sit amet tellus elementum ultricies. Nunc vel orci turpis. Donec id malesuada metus.
                    Nunc nulla velit, fermentum quis interdum quis, tate etiam commodo lorem ipsum dolor sit amet dolore.
                    Quisque vel sapien sit amet tellus elementum ultricies. Nunc vel orci turpis. Donec id malesuada metus.
                    Nunc nulla velit, fermentum quis interdum quis, convallis eu sapien. Integer sed ipsum ante.
                </p>
            </article>

            <!-- Pagination -->
            <div class="pagination">
                <!--<a href="#" class="button previous">Previous Page</a>-->
                <div class="pages">
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <span>&hellip;</span>
                    <a href="#">20</a>
                </div>
                <a href="#" class="button next">Next Page</a>
            </div>

        </div>
    </div>

    <!-- Sidebar -->
    <div id="sidebar">

        <!-- Logo -->
        <h1 id="logo"><a href="#">STRIPED</a></h1>

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

        <!-- Text -->
        <section class="box text-style1">
            <div class="inner">
                <p>
                    <strong>Striped:</strong> A free and fully responsive HTML5 site
                    template designed by <a href="http://n33.co/">AJ</a> for <a href="http://html5up.net/">HTML5 UP</a>
                </p>
            </div>
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

        <!-- Recent Comments -->
        <section class="box recent-comments">
            <header>
                <h2>Recent Comments</h2>
            </header>
            <ul>
                <li>case on <a href="#">Lorem ipsum dolor</a></li>
                <li>molly on <a href="#">Sed dolore magna</a></li>
                <li>case on <a href="#">Sed dolore magna</a></li>
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