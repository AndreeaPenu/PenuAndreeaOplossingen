@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Article overview</div>

                    <div class="panel-content">

                        <ul class="article-overview">



                                @if($articles)

                                    @foreach($articles as $article)
                                    <li>
                                        <div class="vote">

                                            <form action="#" method="POST" class="form-inline upvote">
                                                <input type="hidden" name="_token" value="AQGA9TSOWtuKEOBxbJ8iPUTwVN6wkZykDZ8VRAco">

                                                <button name="article_id"value="{{$article->id}}">
                                                    <i class="fa fa-btn fa-caret-up" title="upvote"></i>
                                                </button>

                                            </form>



                                            <form action="" method="POST" class="form-inline downvote">
                                                <input type="hidden" name="_token" value="AQGA9TSOWtuKEOBxbJ8iPUTwVN6wkZykDZ8VRAco">

                                                <button name="article_id"value="{{$article->id}}">
                                                    <i class="fa fa-btn fa-caret-down" title="downvote"></i>
                                                </button>

                                            </form>

                                        </div>
                                        <div class="url">
                                            <a href="{{$article->url}}" class="urlTitle"> {{$article->title}}</a>
                                            <a href="{{route('articles.edit', $article->id)}}" class ="btn btn-primary btn-xs edit-btn">edit</a>
                                        </div>
                                        <div class="info">
                                            0 points   |   posted by  {{$article->user->name}}   | <a href="#">0 comments</a>
                                        </div>
                                    </li>
                                    @endforeach
                                @endif









                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
