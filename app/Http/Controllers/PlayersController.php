<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function show($id) {
        $player = Player::with('team')->findOrFail($id);

        return view('players.index',compact('player'));
    }
}
