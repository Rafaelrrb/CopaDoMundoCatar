<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Player;

class PlayerController extends Controller
{
    private $player;

    public function __construct(Player $player){
        $this->player = $player;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Team $team)
    {
        return $team->players;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $team_id)
    {   
        $team = Team::findOrFail($team_id);
        return $team->players()->create($request->all());
    }

    /**
     * Display the specified resource.
     * @param  int  $team_id
     * @param  int  $player_id
     * @return \Illuminate\Http\Response
     */
    public function show($team_id, $player_id)
    {   
        $player = Player::findOrFail($player_id);

        if($player->team_id == $team_id)
        return $player;
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $team_id
     * @param  int  $player_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $team_id, $player_id)
    {
        $player = Player::findOrFail($player_id);
        $player->update($request->all());

        return $player;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $player_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($player_id)
    {
        $player = Player::findOrFail($player_id);

        return $player->delete();
    }
}
