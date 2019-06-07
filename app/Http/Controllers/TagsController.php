<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function show($id)
    {
        $tags = Tag::with('news')->findOrfail($id);
        $pagination = $tags->paginate(10);
        return view('tags.show',compact('tags','pagination'));
    }
}
 