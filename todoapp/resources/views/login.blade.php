@extends('layouts.main')

@section('content')


    @foreach($errors->all() as $error)
        <p class="error"> {{ $error }} </p>
    @endforeach

    {{ Form::open(array('autocomplete' => 'off')) }}
        <input type="text" name="username" placeholder="username" />
        <input type="password" name="password" placeholder="password" />
        <input type="submit" value="Sign in" />
    {{ Form::close() }}
@stop