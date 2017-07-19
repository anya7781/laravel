@extends('layouts.admin_account')

@section('content')

<!-- Content -->
    <div id="content">

        @foreach($users as $user)

            <article class="box post post-excerpt">
                <div class = "user_list">
                    <p> {{  $user->login  }} </p>
                    <div>
                        <button class = "make_admin">Make admin</button>
                        <button class = "delete_button">Delete</button>
                    </div>
                </div>
            </article>

        @endforeach



    </div>

    @endsection