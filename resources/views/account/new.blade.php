@extends('layouts.account')

@section('content')

<!-- Content -->
    <div id="content">

        <form method="post" action="/">
            {{  csrf_field() }}
            <label>Main image</label><br>
            <input name = "image" type="file"> <br><br><br>
            <label>Post's name*</label>
            <input name = "name" type="text">
            <label>Description</label>
            <textarea name = "description"></textarea>
            <label>Full text*</label>
            <textarea name = "text" rows = "20"></textarea>
            <br>
            <button type = "submit"> Send </button>
        </form>

    </div>

    @endsection