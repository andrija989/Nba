@extends('layouts.master')

@section('title','List of teams')

@section('content')

    <ul>
        @foreach ($teams as $team)
        <li>
           <a href="{{'/teams/'. $team->id}}">
            {{$team->name}}
            </a>
        </li>
        @endforeach
    </ul>

    
@endsection


