@extends('layouts.admin_account')

@section('content')

<!-- Content -->
    <div id="content">
        <div class="inner">

            @if (count($posts) == 0)

                <p align = "center"> List is empty. All articles are public. </p>

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
                                    <li><button class="but" formaction="/public">Public</button></li>
                                    <li><button formaction="/edit" class="but edit">Edit</button></li>
                                    <li><button formaction="/block" class="but delete">Delete</button></li>
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
    </div>

    @endsection