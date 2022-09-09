<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    use HasFactory;

    protected $fillable = ['score_team_a','cardRed_team_a','cardYellow_team_a','score_team_b','cardRed_team_b','cardYellow_team_b'];

    public function clashes()
    {
        return $this->belongsTo(Clashes::class);
    }
}
