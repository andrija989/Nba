@extends('layouts.master')

@section('title','Player')

@section('content')

<h2>{{$player->first_name}} {{$player->last_name}}</h2>
<a href="/teams/".{{$player->team->id}}>{{$player->team->name}}</a>
    
@endsection


