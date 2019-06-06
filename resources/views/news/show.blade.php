@extends('layouts.master')

@section('title',$new->title)

@section('content')
    <h1>
        {{$new->title}}
    </h1>
    <p>
        {{$new->content}}
    </p>

    <p><b>{{"Post creator: ".$new->user['name']}}</b></p>
    <p><b>{{"email: ".$new->user['email']}}</b></p>

@endsection