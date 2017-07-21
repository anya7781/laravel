@extends('layouts.admin_account')

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


        <form enctype="multipart/form-data" method="post" action="/update">
            {{  csrf_field() }}
            <label>Main image</label><br>
            <input name = "image" type="file"> <br><br><br>
            <label>Post's name*</label>
            <input name = "name" type="text" value = "{{  $post->Name  }}">
            <label> Category </label>
                <select class="category" name =  "category">
                    @foreach($categories as $value)
                        <option value = "{{  $value->Name  }}" @if ($value == $post->category) selected @endif> {{ $value->Name }} </option>
                    @endforeach
                </select>
            <label>Description</label>
            <textarea name = "description"> {{ $post->descriprion }} </textarea>
            <label>Full text*</label>
            <textarea name = "text" rows = "20"> {{$post->text}} </textarea>
            <br>
            <input type = "hidden" name = "id" value = "{{$post->id}}">
            <button type = "submit"> Save </button>
        </form>


    </div>

    @endsection