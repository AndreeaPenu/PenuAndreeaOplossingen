@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Article overview</div>

                <div class="panel-content">

                    <ul class="article-overview">


                        <li>
                            @if($articles)

                                @foreach($articles as $article)

                                    <div class="url">
                                        <a href="{{$article->url}}"> {{$article->title}}</a>
                                    </div>
                                    <div class="info">
                                        0 points   |   posted by  {{$article->user->name}}   | <a href="#">0 comments</a>
                                    </div>

                                @endforeach
                            @endif


                        </li>






                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
