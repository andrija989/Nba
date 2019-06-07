<?php

namespace App\Http\Controllers;

use App\News;
use App\User;
use App\Tag;
use Auth;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __consturct()
    {
        $this->middleware('Auth',['except' => ['index', 'show']]);
    }


    public function index()
    {
        $news = News::with('user')->paginate(10);
        
        return view('news.index',compact(['news']));
        
    }

    public function show($id)
    {
        $new = News::find($id);
        //dd($new);
        return view('/news.show',compact('new'));
    }

    public function create()
    {
        $tags = Tag::all();
        if(Auth::check()) {
            return view('/news.create',compact('tags'));
        }
        return view('auth.login');
        
    }
    public function store()
    {
        
        $this->validate(request(),[
            'title' => 'required',
            'content' => 'required|min:15',
            'tags' => 'required'
            
        ]);
        $news = new News();
        $news->title = request("title");
        $news->content = request("content");
        $news->user_id = auth()->user()->id;
        $news->save();
        $news->tags()->attach(request('tags'));
        
        session()->flash('message','Thank you for publishing article on www.nba.com');
        return redirect()->route('news-list');
    }
}

