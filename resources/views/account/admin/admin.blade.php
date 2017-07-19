@extends('layouts.admin_account')

@section('content')

<!-- Content -->
    <div id="content">

        <p align = "center"> Hi, admin! Welcome to your admin panel!</p><br>

        <div class="profile">

            <img src="{{ asset('images/uploaded/YZUuArqfNVg.jpg') }}" width="300" height="300" class = "profile__image">

            <div>
                <p><strong>Login:      </strong> {{  $user->login  }} </p>
                <p><strong>Name:       </strong> {{  $user->Firstname  }} </p>
                <p><strong>SurName:    </strong> {{  $user->Surname  }} </p>
                <p><strong>Email:      </strong> {{  $user->email  }} </p>
                <p><strong>Birthday:   </strong> {{  $user->Birthday  }} </p>
                <button> Edit </button>
            </div>

        </div>

    </div>

    @endsection