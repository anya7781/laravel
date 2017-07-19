@extends('layouts.admin_account')

@section('content')

<!-- Content -->
    <div id="content">

        @if (isset($message))

            <p class="alert-danger"> Your article has been sent for checking. </p>

            @endif

        <div class="inner">

            <!-- Post -->
            <article class="box post post-excerpt">
                <header>
                    <h2><a href="#">Welcome to Striped</a></h2>
                    <p>A free, fully responsive HTML5 site template by HTML5 UP</p>
                </header>
                <div class="info">
                    <span class="date"><span class="month">Jul<span>y</span></span> <span class="day">14</span><span class="year">, 2014</span></span>
                    <ul class="stats">
                        <li><a href="#" class="icon fa-comment">16</a></li>
                    </ul>
                </div>
                <a href="#" class="image featured"><img src="{{asset('images/pic01.jpg')}}" alt="" /></a>
                <p>
                    <strong>Hello!</strong> You're looking at <strong>Striped</strong>, a fully responsive HTML5 site template designed by <a href="http://n33.co">AJ</a>
                    for <a href="http://html5up.net">HTML5 UP</a> It features a clean, minimalistic design, styling for all basic page elements (including blockquotes, tables and lists), a
                    repositionable sidebar (left or right), and HTML5/CSS3 code designed for quick and easy customization (see code comments for details).
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

    @endsection