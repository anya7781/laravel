
<?php   use App\Comment; ?>

@extends('layouts.site')

@section('content')

    <!-- Content -->
    <div id="content">

        <div class="inner">

            @if (count($posts) == 0)
                <p align = "center"> List is empty. </p>

            @else

                @foreach($posts as $post)

                <!-- Post -->
                    <?php

                    $value = $post->Date;
                    $pieces = explode("-", $value);
                    $year = $pieces[0];
                    $month = $pieces[1];
                    $pieces = explode(" ", $pieces[2]);
                    $day = $pieces[0];

                    switch ($month){
                        case '01': {$year = "Jan"; break;}
                        case '02': {$year = "Feb"; break;}
                        case '03': {$year = "Mar"; break;}
                        case '04': {$year = "Apr"; break;}
                        case '05': {$year = "May"; break;}
                        case '06': {$year = "Jun"; break;}
                        case '07': {$year = "Jul"; break;}
                        case '08': {$year = "Aug"; break;}
                        case '09': {$year = "Sep"; break;}
                        case '10': {$year = "Oct"; break;}
                        case '11': {$year = "Nov"; break;}
                        case '12': {$year = "Dec"; break;}
                    }

                    $comment = new Comment;
                    $quantity = $comment->getQuantity($post->id);

                    ?>

                    <article class="box post post-excerpt">
                        <header>
                            <h2><a href="/main/article/{{$post->id}}">{{ $post->Name }}</a></h2>
                            <p>{{ $post->description }}</p>
                        </header>
                        <div class="info">
                            <span class="date"><span class="month">{{$year}}</span> <span class="day">{{$day}}</span><span class="year">, {{$year}}</span></span>

                            <form method="post">
                                <ul class="stats">
                                    {{  csrf_field() }}
                                    <input type = "hidden" value = "{{  $post->id }}" name="id">
                                    <li><a href="" class="icon fa-comment">{{ $quantity}}</a></li>
                                </ul>
                            </form>

                        </div>

                        @if ($post->Photo != null)
                            <a href="/main/article/{{$post->id}}" class="image featured"><img width="500" height="350" src="{{asset('images/'.$post->Photo)}}" alt="" /></a>
                        @endif

                        <div class = "text-overflow">
                            <p>  {{  $post->text  }} </p>
                        </div>
                    </article>
                @endforeach
            @endif
        </div>
    </div>

@endsection