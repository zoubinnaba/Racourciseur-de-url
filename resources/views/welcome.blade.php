@extends('layouts.base')

@section('content')
    <h1>URL Shortener</h1>

    <form method="POST">
        {{ csrf_field() }}
        <input type="text" placeholder="Please enter your orginal URL here" name="url" value="{{old('url')}}">
        <p>{!!$errors->first('url', '<p class="error-msg">:message</p>')!!}</p>
        <input type="submit" value="Shorten Url">
    </form>
@stop