@extends('layouts.site')

@section('content')

<!-- Content -->
    <div id="content">
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
                <a href="#" class="image featured"><img width = "500" height = "300" src="{{asset('images/pic01.jpg')}}" alt="" /></a>
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
                    </ul>
                </div>
                <a href="#" class="image featured"><img width = "500" height = "300" src = "{{asset('images/pic02.jpg')}}" alt="" /></a>
                <p>
                    Quisque vel sapien sit amet tellus elementum ultricies. Nunc vel orci turpis. Donec id malesuada metus.
                    Nunc nulla velit, fermentum quis interdum quis, tate etiam commodo lorem ipsum dolor sit amet dolore.
                    Quisque vel sapien sit amet tellus elementum ultricies. Nunc vel orci turpis. Donec id malesuada metus.
                    Nunc nulla velit, fermentum quis interdum quis, convallis eu sapien. Integer sed ipsum ante.
                </p>
            </article>

        </div>
    </div>

    @endsection