@extends('layouts.master')

@section('title','List of posts')

@section('content')

    <ul>
        @foreach ($news as $new)
        <li>
           <a href="{{'/news/'. $new->id}}">
            {{$new->title}}
            </a>
        @if($new->user_id)
            <p href="/users/{{$new->user_id}}"> {{"Post creator:".$new->user['name']}}</p>
        @endif
        </li>
        @endforeach
    </ul>

    <nav class="blog-pagination">
        <a class="btn btn-outline-{{ $news->currentPage() === 1 ? 'disabled' : 'primary' }}" 
            href="{{ $news->previousPageUrl() }}">
            Previous
        </a>

        <a class="btn btn-outline-{{ $news->hasMorePages() ? 'primary' : 'disabled' }}" 
            href="{{ $news->nextPageUrl() }}">
            Next
        </a>
    </nav>

    Page {{ $news->currentPage() }} of {{ $news->lastPage() }}

   
@endsection