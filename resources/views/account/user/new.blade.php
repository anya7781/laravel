@extends('layouts.account')

@section('content')

<!-- Content -->

    <div id="content">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>*{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form enctype="multipart/form-data" method="post" action="/new_article">
            {{  csrf_field() }}
            <label>Main image</label><br>
            <input name = "image" type="file"> <br><br><br>
            <label>Post's name*</label>
            <input name = "name" type="text">
            <label> Category </label>
                <select class="category" name =  "category">
                    @foreach($categories as $value)
                        <option> {{ $value->Name }} </option>
                    @endforeach
                </select>
            <label>Description</label>
            <textarea name = "description"></textarea>
            <label>Full text*</label>
            <textarea name = "text" rows = "20"></textarea>
            <br>
            <button type = "submit"> Send </button>
        </form>


    </div>

    @endsection