<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeamController extends Controller
{


    public function index()
    {
        $teams = Team::get();

    return view('team.index')->with(
            [
                'teams' =>$teams
            ]
        );


    }

}
