@extends('layouts.master')

@section('content')

    <h2>{{$team->name}}</h2>

    <div>
        <p>{{$team->email}}</p>
        <p>{{$team->adress}}</p>
        <p>{{$team->city}}</p>
    </div>
    
    @if(count($team->players))
        <h4>Players:</h4>
        <ul>
            @foreach ($team->players as $player)
                <li>
                    <a href="/player/{{$player->id}}" class="player">
                        Full name: {{$player->first_name}} {{$player->last_name}}
                    </a>
                    
                </li>
            @endforeach
        </ul>
    @endif

    @if(count($team->comments))
        <h4>Comments:</h4>
        <ul>
            @foreach ($team->comments as $comment)
                <li>
                    <p>
                        {{$comment->content}}
                    </p class="comment">
                    <p>
                        Posted by: {{$comment->user->name}}
                    </p>
                </li>
            @endforeach
        </ul>
    @endif

    <h4>Post a comment</h4>

    <form method="POST" action="{{route('comments-team', ['post_id' => $team->id])}}">
        @csrf

        <div class="form-group">
            <label for="content">Text</label>
            <textarea class="form-control" id="content" name="content"></textarea>
        </div>

        <div class="form-control">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection