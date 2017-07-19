@extends('layouts.admin_account')

@section('content')

<!-- Content -->
    <div id="content">

        @foreach($users as $user)

            <article class="box post post-excerpt">
                <div class = "user_list">
                    <p> {{  $user->login  }} </p>
                    <div>
                        <form method="post">
                            {{  csrf_field() }}
                            @if($user->access_type == 'user')
                                 <button class = "make_admin" formaction="make-admin">Make admin</button>
                            @endif
                            <button class = "delete_button" formaction="delete-user">Delete</button>
                            <input name = "id" type="hidden" value="{{$user->id}}">
                        </form>
                    </div>
                </div>
            </article>

        @endforeach



    </div>

    @endsection