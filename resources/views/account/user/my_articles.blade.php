@extends('layouts.account')

@section('content')

    <!-- Content -->
    <div id="content">

        @if (isset($message))

            <p class="alert-danger"> Your article has been sent for checking. </p>

        @endif

        <div class="inner">


            @if (count($posts) == 0)

                <p align = "center"> List is empty. </p>

        @else

            @foreach($posts as $post)

                <!-- Post -->
                    <article class="box post post-excerpt">
                        <header>
                            <h2><a href="#">{{ $post->Name }}</a></h2>
                            <p>{{ $post->description }}</p>
                        </header>
                        <div class="info">
                            <span class="date"><span class="month">Jul<span>y</span></span> <span class="day">14</span><span class="year">, 2014</span></span>

                            <form method="post">
                                <ul class="stats">
                                    {{  csrf_field() }}
                                    <input type = "hidden" value = "{{  $post->id }}" name="id">
                                    <li><a href="#" class="icon fa-comment">16</a></li>
                                </ul>
                            </form>

                        </div>
                        <a href="#" class="image featured"><img src="{{asset('images/pic01.jpg')}}" alt="" /></a>
                        <div class = "text-overflow">
                            <p>  {{  $post->text  }} </p>
                        </div>
                    </article>

            @endforeach
        @endif

    </div>

@endsection