<?php

    use App\Category;

    $category = new Category;
    $categories = $category->getCategories();

?>

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
        <h1 class="logo"><a href="/">LOGO</a></h1>


        <div class = "account">
            <a href = "/account">
                <img src =  "{{ asset('images/account1.png') }}" width="40" height="40" />
                <p>Personal account</p>
            </a>
        </div>


        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li><a href="#">Latest Post</a></li>
                <li><a href="/archives">Archives</a></li>
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
                @foreach($categories as $category)
                    <li><a href="/category/{{ $category->Name }}">{{ $category->Name }}</a></li>
                @endforeach
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