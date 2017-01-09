@extends('app')
@section('content')

    <h1>About</h1>

    @if (count($people))
    <h3>People I Like:</h3>

    <ul>
        @foreach ($people as $person)
            <li>{{ $person }}</li>
        @endforeach
    </ul>
    @endif
    <h1>about me: {{ $name }}</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad asperiores blanditiis cum dicta error necessitatibus omnis quos. Aliquid esse exercitationem facere laboriosam minima quod sint sit veritatis. Dolore, maiores, placeat!</p>

@stop