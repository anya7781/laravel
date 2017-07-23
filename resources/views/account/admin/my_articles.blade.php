@extends('layouts.admin_account')

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

                    ?>

                    <article class="box post post-excerpt">
                        <header>
                            <h2><a href="/article/{{$post->id}}">{{ $post->Name }}</a></h2>
                            <p>{{ $post->description }}</p>
                        </header>
                        <div class="info">
                            <span class="date"><span class="month">{{$year}}</span> <span class="day">{{$day}}</span><span class="year">, {{$year}}</span></span>

                            <form method="post">
                                <ul class="stats">
                                    {{  csrf_field() }}
                                    <input type = "hidden" value = "{{  $post->id }}" name="id">
                                </ul>
                            </form>

                        </div>

                        @if ($post->Photo != null)
                            <a href="/article/{{$post->id}}" class="image featured"><img width="500" height="350" src="{{asset('images/'.$post->Photo)}}" alt="" /></a>
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