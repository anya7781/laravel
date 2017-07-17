@extends('layouts.admin_account')

@section('content')

<!-- Content -->
    <div id="content">

        <article class="box post post-excerpt">
            <div class = "user_list">
                <p> user1 </p>
                <div>
                    <button class = "make_admin">Make admin</button>
                    <button class = "delete_button">Delete</button>
                </div>
            </div>
        </article>

        <!-- Post -->
        <article class="box post post-excerpt">
            <div class = "user_list">
                <p> user1 </p>
                <div>
                    <button class = "make_admin">Make admin</button>
                    <button class = "delete_button">Delete</button>
                </div>
            </div>
        </article>

    </div>

    @endsection