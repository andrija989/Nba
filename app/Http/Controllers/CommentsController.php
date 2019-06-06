<?php

namespace App\Http\Controllers;

use App\User;
use App\Team;
use App\Comment;
use App\Mail\CommentReceived;
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

        $team = Team::find($teamId);
        

        \Mail::to($team->email)->send(new CommentReceived($team));

        return redirect()->route('team', ['id' => $teamId]);
    }
}
