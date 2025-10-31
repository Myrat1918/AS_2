<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
       public function index()
    {
    $players = Player::get()->paginate(10);

    return view('player.index')->with(
            [
                'player' =>$players
            ]
        );
}
}
