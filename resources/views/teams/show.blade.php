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
                    <p class="player">
                        Full name: {{$player->first_name}} {{$player->last_name}}
                    </p>
                    
                </li>
            @endforeach
        </ul>
    @endif

@endsection