@extends('layouts.master')

@section('content')

<h2>Tag: {{$tags->name}}</h2>

@if($tags || $tags->news)

    @foreach($tags->news as $new)
    <div class="blog-post">
        <h2 class="blog-post-title">
            <a href="/tags/{{$new->id}}">{{ $new->title}}</a>
        </h2>
        <p>{{ $new->created_at->toFormattedDateString() }}</p>
        <div class="blog-post">
            {{ $new->content }}
        </div>

    </div>

    @endforeach
@endif

<nav class="blog-pagination">
    <a class="btn btn-outline-{{ $pagination->currentPage() === 1 ? 'disabled' : 'primary' }}" 
        href="{{ $pagination->previousPageUrl() }}">
        Previous
    </a>

    <a class="btn btn-outline-{{ $pagination->hasMorePages() ? 'primary' : 'disabled' }}" 
        href="{{ $pagination->nextPageUrl() }}">
        Next
    </a>

    Page {{ $pagination->currentPage() }} of {{ $pagination->lastPage() }}
</nav>

@endsection