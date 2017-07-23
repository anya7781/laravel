@extends('layouts.account')

@section('content')

<!-- Content -->
    <div id="content">

        <p align = "center"> Hi, {{  $user->login  }} Welcome to your account!</p><br>

        <div class="profile">

            @if ($user->Photo != null)
                <img src="{{ asset('images/'.$user->Photo) }}" width="300" height="300" class = "profile__image">
            @else
                <img src="{{ asset('images/noavatar.png') }}" width="300" height="300" class = "profile__image">
            @endif

            <div>
                <p><strong>Login:      </strong> {{  $user->login  }} </p>
                <p><strong>Name:       </strong> {{  $user->Firstname  }} </p>
                <p><strong>SurName:    </strong> {{  $user->Surname  }} </p>
                <p><strong>Email:      </strong> {{  $user->email  }} </p>
                <p><strong>Birthday:   </strong> {{  $user->Birthday  }} </p>
            </div>

        </div>

    </div>

    @endsection