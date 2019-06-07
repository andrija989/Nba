@extends('layouts.master')

@section('title')
    Create news

@endsection

@section('content')
    <h2 class="blog-post-title">Create news</h2>

<form method="POST" action="{{ route('store-news') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title"/>
            
        </div>

        <div class="form-group">
                <label for="content">Body</label>
                <input type="text" class="form-control" id="content" name="content"/>
                
        </div>

        <div class="for-group">
            <label for="tag">Tag selection:</label>
            
            <select name="tags">
                @foreach($tags as $tag) 
                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
            </select>
          
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary"> Submit Post</button>
        </div>
    </form>
@endsection