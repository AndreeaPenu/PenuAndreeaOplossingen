@extends('layouts.main')

@section('content')
    <h1>Create new task</h1>

    @foreach($errors->all() as $error)
        <p class="error"> {{ $error }} </p>
    @endforeach

    {{Form::open()}}

        <input type="text" name="name" placeholder="the name of your task" />
        <input type="submit" value="create"/>

    {{Form::close()}}
@stop