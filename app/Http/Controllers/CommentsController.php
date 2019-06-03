<?php

namespace App\Http\Controllers;

use App\User;
use App\Team;
use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store($teamId)
    {

        $comment = new Comment;

        $comment->content = request('content');
        $comment->user_id = auth()->user()->id;
        $comment->team_id = $teamId;
        $comment->save();

        return redirect()->route('team-details', ['id' => $teamId]);
    }
}
