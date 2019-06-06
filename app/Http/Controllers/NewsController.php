<?php

namespace App\Http\Controllers;

use App\News;
use App\User;
use App\Tag;
use Illuminate\Http\Request;

class NewsController extends Controller
{
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
}
