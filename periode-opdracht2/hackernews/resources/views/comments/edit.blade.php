@extends('layouts.app')

@section('content')


    @if (Auth::check())
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="breadcrumb">

                    <a href="/">← back to overview</a>

                </div>



                <div class="bg-">

                </div>


                <!-- Display Validation Errors -->
            @include('includes.form_error')
                <!-- resources/views/common/errors.blade.php -->


                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        Edit comment


                        {!! Form::open(['method'=>'DELETE', 'action' => ['CommentsController@destroy', $comment->id]]) !!}
                        <div class="form-group">
                            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                        </div>
                        {!! Form::close() !!}

                    </div>






                        {!! Form::model($comment, ['method' => 'PATCH', 'action'=> ['CommentsController@update', $comment->id]]) !!}

                        <div class="form-group">
                            {!! Form::label('body','Comment') !!}
                            {!! Form::textarea('body', null, ['class'=>'form-control'])!!}
                        </div>



                        <div class="form-group">
                            {!! Form::submit('Edit Comment', ['class'=>'btn btn-default']) !!}
                        </div>
                    {!! Form::close() !!}





                </div>

            </div>
        </div>
    </div>

    @endif
@endsection