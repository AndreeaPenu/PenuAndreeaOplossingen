@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">


                <div class="breadcrumb">

                    <a href="#">← back to overview</a>

                </div>

                <!-- Display Validation Errors -->
                <!-- resources/views/common/errors.blade.php -->


                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        {{-- Article: {{$comment->article->title}}--}}

                    </div>

                    <div class="panel-content">

                        <div class="vote">




                            <form action="#" method="POST" class="form-inline upvote">
                                <input type="hidden" name="_token" value="AZ3oQkKpwlOJZG4WKFcCLNVMSao4iQFnOwlSEp3l">

                                <button name="article_id"value="1">
                                    <i class="fa fa-btn fa-caret-up" title="upvote"></i>
                                </button>

                            </form>








                            <form action="#" method="POST" class="form-inline downvote">
                                <input type="hidden" name="_token" value="AZ3oQkKpwlOJZG4WKFcCLNVMSao4iQFnOwlSEp3l">

                                <button name="article_id"value="1">
                                    <i class="fa fa-btn fa-caret-down" title="downvote"></i>
                                </button>

                            </form>




                        </div>

                        <div class="url">

                            <a href="{{$comment->article->url}}" class="urlTitle">{{$comment->article->title}}</a>
                        </div>
                        <div class="info">
                            4 points  | posted by {{$comment->article->user->name}} | 5 comments
                        </div>

                        <div class="comments">


                            <ul>

                                @foreach($comments as $comment )
                                    <li>

                                        <div class="comment-body">
                                            {{$comment->body}}
                                        </div>

                                        <div class="comment-info">
                                            Posted by {{$comment->author}} on {{$comment->created_at}}


                                            {!! Form::open(['method'=>'DELETE', 'action' => ['CommentsController@destroy', $comment->id]]) !!}
                                            <div class="form-group">
                                                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                            </div>
                                            {!! Form::close() !!}



                                            <a href="{{route('comments.edit', $comment->id)}}" class ="btn btn-primary btn-xs edit-btn">edit</a>


                                        </div>
                                    </li>

                                @endforeach


                            </ul>
                        </div>

                        {!! Form::open(['method'=>'POST','action'=>'CommentsController@store']) !!}

                        <input type="hidden" name="article_id" value="{{$comment->article->id}}">

                        <div class="form-group">
                            {!! Form::label('body', 'Comment:') !!}
                            {!! Form::textarea('body', null, ['class'=>'form-control','rows'=>3]) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Add comment', ['class'=>'btn btn-default']) !!}
                        </div>
                        {!! Form::close() !!}


                    </div>



                </div>

            </div>

        </div>
    </div>

@endsection