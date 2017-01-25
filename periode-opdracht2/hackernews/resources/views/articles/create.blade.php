@extends('layouts.app')

@section('content')
    @if (Auth::check())
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <!-- Display Validation Errors -->
                <!-- resources/views/common/errors.blade.php -->


                <div class="breadcrumb">

                    <a href="/">← back to overview</a>

                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">Add article</div>

                    <div class="panel-content">


    {!! Form::open(['method' => 'POST', 'action'=> 'ArticleController@store']) !!}

    <div class="form-group">
        {!! Form::label('title','Title (max.225 characters)') !!}
        {!! Form::text('title', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('url','URL') !!}
        {!! Form::text('url', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::submit('+ Add Article', ['class'=>'btn btn-default']) !!}
    </div>
{!! Form::close() !!}

</div>
    </div>
    </div>
    </div>
    </div>



    {{--<div class="row">
    @include('includes.form_error')
    </div>--}}


    @endif
@endsection